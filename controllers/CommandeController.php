<?php

require_once __DIR__ . '/../models/Commande.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Menu.php';

class CommandeController {

    public function create() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        $menu_id = $_GET['menu_id'];

        $menu = Menu::getById($menu_id);

        $user = User::findById($_SESSION['user']['id']);

        $prix_total = 0;
        $prix_livraison = 0;
        $prix_final = 0;

        // STOCK

        if ($menu['quantite_restante'] <= 0) {

            $error =
                "Ce menu n'est plus disponible.";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $date_prestation =
                $_POST['date_prestation'];

            $nombre_personne =
                $_POST['nombre_personne'];

            // DATE MINIMUM

            if (

                $date_prestation <
                date(
                    'Y-m-d',
                    strtotime('+2 days')
                )

            ) {

                $error =
                    "La date de prestation doit être au minimum dans 2 jours.";
            }

            // MINIMUM PERSONNES

            elseif (

                $nombre_personne <
                $menu['nombre_personne_minimum']

            ) {

                $error =
                    "Le minimum de personnes pour ce menu est de "
                    . $menu['nombre_personne_minimum'];
            }

            // STOCK

            elseif (

                $menu['quantite_restante'] <= 0

            ) {

                $error =
                    "Ce menu est en rupture de stock.";
            }

            else {

                // PRIX MENU

                $prix_total =

                    $menu['prix_par_personne']
                    * $nombre_personne;

                // RÉDUCTION

                if (

                    $nombre_personne >=
                    (
                        $menu['nombre_personne_minimum']
                        + 5
                    )

                ) {

                    $prix_total =
                        $prix_total * 0.9;
                }

                // LIVRAISON

                if (
                    ($user['ville'] ?? '')
                    != 'Bordeaux'
                ) {

                    $prix_livraison = 5;
                }

                // TOTAL

                $prix_final =
                    $prix_total
                    + $prix_livraison;

                // CRÉER COMMANDE

                Commande::create(

                    $_POST,
                    $menu_id,
                    $_SESSION['user']['id']
                );

                // BAISSER STOCK

                Menu::decreaseStock(
                    $menu_id
                );

                $message =
                    "Commande enregistrée avec succès.";

                require_once
                    __DIR__
                    . '/../views/commande.php';

                exit;
            }
        }

        require_once
            __DIR__
            . '/../views/commande.php';
    }

    public function mesCommandes() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        $commandes =

            Commande::getByUser(
                $_SESSION['user']['id']
            );

        require_once
            __DIR__
            . '/../views/mes-commandes.php';
    }

    public function adminCommandes() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        if (

            $_SESSION['user']['role_id'] != 1
            &&
            $_SESSION['user']['role_id'] != 3

        ) {

            die("Accès refusé");
        }

        // MODIFIER STATUT

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            Commande::updateStatus(

                $_POST['numero_commande'],
                $_POST['statut']
            );

            Commande::assignEmploye(

                $_POST['numero_commande'],

                $_SESSION['user']['id']
            );

            $allCommandes =
                Commande::getAll();

            foreach($allCommandes as $commande) {

                if (

                    $commande['numero_commande']
                    ==
                    $_POST['numero_commande']

                ) {

                    // EMAIL COMMANDE TERMINÉE

                    if (
                        $_POST['statut']
                        == 'terminée'
                    ) {

                        $to =
                            $commande['email'];

                        $subject =
                            "Votre commande est terminée";

                        $message = "

Bonjour "
. $commande['prenom'] .

",

Votre commande est maintenant terminée.

Vous pouvez laisser un avis sur Vite Gourmand.

Merci et à bientôt !
";

                        $headers =
                            "From: vitegourmand@gmail.com";

                        mail(

                            $to,
                            $subject,
                            $message,
                            $headers
                        );
                    }

                    // EMAIL RETOUR MATÉRIEL

                    if (

                        $_POST['statut']
                        ==
                        'en attente du retour de matériel'

                        &&

                        $commande['pret_materiel'] == 1

                    ) {

                        $to =
                            $commande['email'];

                        $subject =
                            "Retour du matériel";

                        $message = "

Bonjour "
. $commande['prenom'] .

",

Le matériel prêté doit être restitué.

Sans restitution sous 10 jours ouvrés,
600 euros de frais pourront être appliqués.

Merci,
Vite Gourmand
";

                        $headers =
                            "From: vitegourmand@gmail.com";

                        mail(

                            $to,
                            $subject,
                            $message,
                            $headers
                        );
                    }
                }
            }
        }

        // FILTRES

        if (

            isset($_GET['numero_commande'])
            &&
            $_GET['numero_commande'] != ''

        ) {

            $commandes =

                Commande::searchByNumero(
                    $_GET['numero_commande']
                );

        }

        elseif (

            isset($_GET['statut'])
            &&
            $_GET['statut'] != ''

        ) {

            $commandes =

                Commande::filterByStatus(
                    $_GET['statut']
                );

        }

        else {

            $commandes =
                Commande::getAll();
        }

        require_once
            __DIR__
            . '/../views/admin-commandes.php';
    }

    public function delete() {

        session_start();

        if (!isset($_SESSION['user'])) {

            die("Vous devez être connecté");
        }

        Commande::delete(
            $_GET['numero_commande']
        );

        header(
            'Location: ?page=mes-commandes'
        );

        exit;
    }
}