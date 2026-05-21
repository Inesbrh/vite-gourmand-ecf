<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Gestion des commandes</h1>

    <!-- FILTRE STATUT -->

    <form method="GET">

        <input
            type="hidden"
            name="page"
            value="admin-commandes"
        >

        <select name="statut">

            <option value="">
                Tous les statuts
            </option>

            <option value="en attente">
                En attente
            </option>

            <option value="accepté">
                Accepté
            </option>

            <option value="en préparation">
                En préparation
            </option>

            <option value="livrée">
                Livrée
            </option>

            <option
                value="en attente du retour de matériel"
                <?= $commande['statut']
                    == 'en attente du retour de matériel'
                    ? 'selected'
                    : ''; ?>
            >
                En attente du retour de matériel
            </option>

            <option value="terminée">
                Terminée
            </option>

            <option value="annulée">
                Annulée
            </option>

        </select>

        <button type="submit">

            Filtrer

        </button>

    </form>

    <br>

    <!-- RECHERCHE NUMÉRO -->

    <form method="GET">

        <input
            type="hidden"
            name="page"
            value="admin-commandes"
        >

        <input
            type="text"
            name="numero_commande"
            placeholder="Numéro commande"
        >

        <button type="submit">

            Rechercher

        </button>

    </form>

    <br>

    <?php foreach($commandes as $commande): ?>

        <div class="card">

            <h2>

                Commande
                #<?= htmlspecialchars($commande['numero_commande']); ?>

            </h2>

            <p>

                <strong>Client :</strong>

                <?= htmlspecialchars($commande['prenom']); ?>
                <?= htmlspecialchars($commande['nom']); ?>

            </p>

            <p>

                <strong>Email :</strong>

                <?= htmlspecialchars($commande['email']); ?>

            </p>

            <p>

                <strong>Téléphone :</strong>

                <?= htmlspecialchars($commande['telephone']); ?>

            </p>

            <p>

                <strong>Menu :</strong>

                <?= htmlspecialchars($commande['titre']); ?>

            </p>

            <p>

                <strong>Date commande :</strong>

                <?= htmlspecialchars($commande['date_commande']); ?>

            </p>

            <p>

                <strong>Date prestation :</strong>

                <?= htmlspecialchars($commande['date_prestation']); ?>

            </p>

            <p>

                <strong>Heure livraison :</strong>

                <?= htmlspecialchars($commande['heure_livraison']); ?>

            </p>

            <p>

                <strong>Nombre personnes :</strong>

                <?= htmlspecialchars($commande['nombre_personne']); ?>

            </p>

            <p>

                <strong>Prêt matériel :</strong>

                <?= $commande['pret_materiel']
                    ? 'Oui'
                    : 'Non'; ?>

            </p>

            <p>

                <strong>Statut :</strong>

                <?= htmlspecialchars($commande['statut']); ?>

            </p>

            <br>

            <form method="POST">

                <input
                    type="hidden"
                    name="numero_commande"
                    value="<?= $commande['numero_commande']; ?>"
                >

                <select name="statut">

                    <option
                        value="en attente"
                        <?= $commande['statut'] == 'en attente'
                            ? 'selected'
                            : ''; ?>
                    >
                        En attente
                    </option>

                    <option
                        value="accepté"
                        <?= $commande['statut'] == 'accepté'
                            ? 'selected'
                            : ''; ?>
                    >
                        Accepté
                    </option>

                    <option
                        value="en préparation"
                        <?= $commande['statut'] == 'en préparation'
                            ? 'selected'
                            : ''; ?>
                    >
                        En préparation
                    </option>

                    <option
                        value="livrée"
                        <?= $commande['statut'] == 'livrée'
                            ? 'selected'
                            : ''; ?>
                    >
                        Livrée
                    </option>

                    <option
                        value="en attente du retour de matériel"
                        <?= $commande['statut']
                            == 'en attente du retour de matériel'
                            ? 'selected'
                            : ''; ?>
                    >
                        En attente du retour de matériel
                    </option>

                    <option
                        value="terminée"
                        <?= $commande['statut'] == 'terminée'
                            ? 'selected'
                            : ''; ?>
                    >
                        Terminée
                    </option>

                    <option
                        value="annulée"
                        <?= $commande['statut'] == 'annulée'
                            ? 'selected'
                            : ''; ?>
                    >
                        Annulée
                    </option>

                </select>

                <button type="submit">

                    Modifier le statut

                </button>

            </form>

        </div>

    <?php endforeach; ?>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>