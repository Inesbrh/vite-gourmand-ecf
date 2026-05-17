<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1>Nos Menus</h1>

<?php foreach($menus as $menu): ?>

    <div style="margin-bottom:20px; border:1px solid #ccc; padding:10px;">

        <h3><?= htmlspecialchars($menu['titre']); ?></h3>

        <p>Prix : <?= htmlspecialchars($menu['prix_par_personne']); ?> €</p>

        <p><?= htmlspecialchars($menu['description']); ?></p>

        <h4>Plats inclus :</h4>

        <?php if (!empty($menu['plats'])): ?>
            <ul>
                <?php foreach($menu['plats'] as $plat): ?>
                    <li>

                        <strong><?= htmlspecialchars($plat['titre_plat']); ?></strong><br>
                        
                        <img src="/vite-gourmand-ecf/public/assets/img/<?= $plat['photo']; ?>" width="120">

                    </li>
                    
                    <a href="?page=detail-menu&id=<?= $menu['menu_id']; ?>">
                        Voir détail
                    </a>

                    <a href="?page=commande&menu_id=<?= $menu['menu_id']; ?>">
                        Commander
                    </a>

                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucun plat</p>
        <?php endif; ?>

    </div>

<?php endforeach; ?>

<?php require_once __DIR__ . '/layout/footer.php'; ?>