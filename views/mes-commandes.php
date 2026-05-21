<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Mes commandes</h1>

    <?php if (!empty($commandes)): ?>

        <?php foreach($commandes as $commande): ?>

            <div class="card">

                <p>

                    <strong>Commande :</strong>

                    <?= htmlspecialchars($commande['numero_commande']); ?>

                </p>

                <p>

                    <strong>Menu :</strong>

                    <?= htmlspecialchars($commande['titre']); ?>

                </p>

                <p>

                    <strong>Date :</strong>

                    <?= htmlspecialchars($commande['date_commande']); ?>

                </p>

                <p>

                    <strong>Nombre de personnes :</strong>

                    <?= htmlspecialchars($commande['nombre_personne']); ?>

                </p>

                <p>

                    <strong>Statut :</strong>

                    <?= htmlspecialchars($commande['statut']); ?>

                </p>

                <!-- COMMANDE TERMINÉE -->

                <?php if($commande['statut'] == 'terminée'): ?>

                    <p
                        style="
                            color:green;
                            font-weight:bold;
                            margin-top:15px;
                        "
                    >

                        Votre commande est terminée,
                        vous pouvez laisser un avis.

                    </p>

                    <a
                        href="?page=avis&commande_id=<?= $commande['numero_commande']; ?>"
                    >

                        <button>

                            Laisser un avis

                        </button>

                    </a>

                <?php endif; ?>

                <!-- RETOUR MATÉRIEL -->

                <?php if(
                    $commande['statut']
                    == 'en attente du retour de matériel'
                ): ?>

                    <p
                        style="
                            color:red;
                            font-weight:bold;
                            margin-top:15px;
                        "
                    >

                        Merci de restituer le matériel
                        sous 10 jours ouvrés.

                        Sans restitution,
                        600€ de frais pourront être appliqués.

                    </p>

                <?php endif; ?>

                <!-- ANNULATION -->

                <?php if($commande['statut'] == 'en attente'): ?>

                    <br>

                    <a
                        href="?page=delete-commande&numero_commande=<?= $commande['numero_commande']; ?>"
                    >

                        <button
                            style="background:red;"
                        >

                            Annuler la commande

                        </button>

                    </a>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="card">

            <p>

                Aucune commande.

            </p>

        </div>

    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>