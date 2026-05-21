<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Dashboard Admin</h1>

    <div class="home-menus">

        <!-- MENUS -->

        <div class="card">

            <h2>
                Menus
            </h2>

            <p
                style="
                    font-size:50px;
                    font-weight:bold;
                "
            >

                <?= htmlspecialchars($totalMenus); ?>

            </p>

        </div>

        <!-- COMMANDES -->

        <div class="card">

            <h2>
                Commandes
            </h2>

            <p
                style="
                    font-size:50px;
                    font-weight:bold;
                "
            >

                <?= htmlspecialchars($totalCommandes); ?>

            </p>

        </div>

        <!-- AVIS -->

        <div class="card">

            <h2>
                Avis
            </h2>

            <p
                style="
                    font-size:50px;
                    font-weight:bold;
                "
            >

                <?= htmlspecialchars($totalAvis); ?>

            </p>

        </div>

    </div>

    <br><br>

    <!-- STATS EMPLOYÉS -->

    <div class="card">

        <h2>

            Classement employés

        </h2>

        <?php if(!empty($statsEmployes)): ?>

            <?php foreach($statsEmployes as $employe): ?>

                <p
                    style="
                        margin-bottom:15px;
                        font-size:18px;
                    "
                >

                    <strong>

                        <?= htmlspecialchars(
                            $employe['prenom']
                        ); ?>

                        <?= htmlspecialchars(
                            $employe['nom']
                        ); ?>

                    </strong>

                    :

                    <?= htmlspecialchars(
                        $employe['total_commandes']
                    ); ?>

                    commande(s) traitée(s)

                </p>

            <?php endforeach; ?>

        <?php else: ?>

            <p>

                Aucune statistique disponible.

            </p>

        <?php endif; ?>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>