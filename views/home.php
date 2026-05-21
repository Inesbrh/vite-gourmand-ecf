<?php require_once __DIR__ . '/layout/header.php'; ?>

<!-- HERO -->

<section class="hero">

    <div class="hero-content">

        <h1>Vite Gourmand</h1>

        <p>
            Des menus gourmands pour tous vos événements.
        </p>

        <a href="?page=menu">

            <button>
                Découvrir nos menus
            </button>

        </a>

    </div>

</section>

<!-- CONTENU -->

<div class="container">

    <!-- PRESENTATION -->

    <div class="card savoir-faire">

        <div class="savoir-image">

            <img
                src="/vite-gourmand-ecf/public/assets/img/table.jpeg"
                alt="Savoir faire"
            >

        </div>

        <div class="savoir-text">

            <h2>
                Notre savoir-faire
            </h2>

            <br>

            <p>
                Vite Gourmand vous propose des menus raffinés,
                préparés avec des produits frais pour tous vos
                événements privés et professionnels.
            </p>

        </div>

    </div>

    <!-- MENUS POPULAIRES -->

    <h2 style="margin-top:40px;">
        Menus populaires
    </h2>

    <div class="home-menus">

        <div class="card">

            <img
                src="/vite-gourmand-ecf/public/assets/img/menu1.jpg"
                alt="Menu"
            >

            <br><br>

            <h3>Menu Prestige</h3>

            <p>
                Une sélection haut de gamme pour vos événements.
            </p>

        </div>

        <div class="card">

            <img
                src="/vite-gourmand-ecf/public/assets/img/menu2.jpg"
                alt="Menu"
            >

            <br><br>

            <h3>Menu Famille</h3>

            <p>
                Un menu généreux pour partager un moment convivial.
            </p>

        </div>

        <div class="card">

            <img
                src="/vite-gourmand-ecf/public/assets/img/menu3.jpg"
                alt="Menu"
            >

            <br><br>

            <h3>Menu Mariage</h3>

            <p>
                Élégance et gourmandise pour le plus beau jour.
            </p>

        </div>

    </div>

    <!-- AVIS -->

    <h2 style="margin-top:40px;">
        Avis clients
    </h2>

    <?php if(!empty($avis)): ?>

        <?php foreach($avis as $unAvis): ?>

            <div class="card">

                <p>
                    <?= str_repeat('⭐', $unAvis['note']); ?>
                </p>

                <p>
                    <?= htmlspecialchars($unAvis['description']); ?>
                </p>

            </div>

        <?php endforeach; ?>

    <?php else: ?>

        <div class="card">

            <p>
                Aucun avis pour le moment.
            </p>

        </div>

    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>