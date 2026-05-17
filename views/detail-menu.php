<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1><?= htmlspecialchars($menu['titre']); ?></h1>

<p>
    <strong>Description :</strong>
    <?= htmlspecialchars($menu['description']); ?>
</p>

<p>
    <strong>Prix :</strong>
    <?= htmlspecialchars($menu['prix_par_personne']); ?> €
</p>

<p>
    <strong>Minimum personnes :</strong>
    <?= htmlspecialchars($menu['nombre_personne_minimum']); ?>
</p>

<p>
    <strong>Régime :</strong>
    <?= htmlspecialchars($menu['regime']); ?>
</p>

<h2>Plats du menu</h2>

<?php foreach($menu['plats'] as $plat): ?>

    <div style="margin-bottom:20px;">

        <h3><?= htmlspecialchars($plat['titre_plat']); ?></h3>

        <img
            src="/vite-gourmand-ecf/public/assets/img/<?= htmlspecialchars($plat['photo']); ?>"
            width="150"
        >

    </div>

<?php endforeach; ?>

<hr>

<p style="color:red; font-weight:bold;">
    Attention : veuillez vérifier les conditions du menu avant commande.
</p>

<a href="?page=commande&menu_id=<?= $menu['menu_id']; ?>">
    Commander ce menu
</a>

<?php require_once __DIR__ . '/layout/footer.php'; ?>