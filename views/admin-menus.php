<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Gestion des menus</h1>

    <a href="?page=add-menu">

        <button>
            Ajouter un menu
        </button>

    </a>

    <br><br>

    <?php foreach($menus as $menu): ?>

        <div class="card">

            <h2>
                <?= htmlspecialchars($menu['titre']); ?>
            </h2>

            <p>
                <?= htmlspecialchars($menu['description']); ?>
            </p>

            <p>
                Prix :
                <?= htmlspecialchars($menu['prix_par_personne']); ?> €
            </p>

            <br>

            <a href="?page=delete-menu&id=<?= $menu['menu_id']; ?>">

                <button
                    style="background:red;"
                >

                    Supprimer

                </button>

            </a>

        </div>

    <?php endforeach; ?>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>