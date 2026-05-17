<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1>Administration des commandes</h1>

<?php foreach($commandes as $commande): ?>

    <div style="border:1px solid #ccc; padding:10px; margin-bottom:15px;">

        <p>
            <strong>Commande :</strong>
            <?= htmlspecialchars($commande['numero_commande']); ?>
        </p>

        <p>
            <strong>Statut :</strong>
            <?= htmlspecialchars($commande['statut']); ?>
        </p>

        <p>
            <strong>Date :</strong>
            <?= htmlspecialchars($commande['date_commande']); ?>
        </p>

        <p>
            <strong>Utilisateur :</strong>
            <?= htmlspecialchars($commande['utilisateur_id']); ?>
        </p>

    </div>

<?php endforeach; ?>

<?php require_once __DIR__ . '/layout/footer.php'; ?>