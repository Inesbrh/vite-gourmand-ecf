<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <!-- IMAGE PRINCIPALE -->

        <img
            src="/vite-gourmand-ecf/public/assets/img/<?= htmlspecialchars($menu['image']); ?>"
            alt="<?= htmlspecialchars($menu['titre']); ?>"
            style="width:100%; max-height:400px; object-fit:cover;"
        >

        <!-- GALERIE -->

        <div class="gallery">

            <img
                src="/vite-gourmand-ecf/public/assets/img/<?= htmlspecialchars($menu['image1']); ?>"
                alt="Galerie menu"
            >

            <img
                src="/vite-gourmand-ecf/public/assets/img/<?= htmlspecialchars($menu['image2']); ?>"
                alt="Galerie menu"
            >

            <img
                src="/vite-gourmand-ecf/public/assets/img/<?= htmlspecialchars($menu['image3']); ?>"
                alt="Galerie menu"
            >

        </div>

        <br><br>

        <!-- TITRE -->

        <h1>

            <?= htmlspecialchars($menu['titre']); ?>

        </h1>

        <br>

        <!-- DESCRIPTION -->

        <p>

            <?= htmlspecialchars($menu['description']); ?>

        </p>

        <br>

        <!-- INFORMATIONS -->

        <p>
            <strong>Prix par personne :</strong>

            <?= htmlspecialchars($menu['prix_par_personne']); ?> €
        </p>

        <p>
            <strong>Nombre minimum :</strong>

            <?= htmlspecialchars($menu['nombre_personne_minimum']); ?>
            personnes
        </p>

        <p>
            <strong>Régime :</strong>

            <?= htmlspecialchars($menu['regime']); ?>
        </p>

        <p>
            <strong>Thème :</strong>

            <?= htmlspecialchars($menu['theme'] ?? 'Non défini'); ?>
        </p>

        <p>
            <strong>Allergènes :</strong>

            <?= htmlspecialchars($menu['allergenes'] ?? 'Aucun'); ?>
        </p>

        <p>
            <strong>Stock restant :</strong>

            <?= htmlspecialchars($menu['quantite_restante']); ?>
        </p>

        <!-- CONDITIONS -->

        <br>

        <div
            style="
                background:#fff3cd;
                padding:15px;
                border-radius:10px;
                border:1px solid #ffeeba;
            "
        >

            <p
                style="
                    font-weight:bold;
                    color:#856404;
                "
            >

                Conditions du menu :

            </p>

            <p>

                <?= nl2br(htmlspecialchars($menu['conditions_menu'] ?: 'Aucune condition')); ?>

            </p>

        </div>

        <br>

        <!-- COMMANDE -->

        <?php if(isset($_SESSION['user'])): ?>

            <?php if($menu['quantite_restante'] > 0): ?>

                <a href="?page=commande&menu_id=<?= $menu['menu_id']; ?>">

                    <button>
                        Commander ce menu
                    </button>

                </a>

            <?php else: ?>

                <button
                    disabled
                    style="
                        background:gray;
                        cursor:not-allowed;
                    "
                >

                    Rupture de stock

                </button>

            <?php endif; ?>

        <?php else: ?>

            <a href="?page=login&menu_id=<?= $menu['menu_id']; ?>">

                <button>
                    Connectez-vous pour commander
                </button>

            </a>

        <?php endif; ?>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>