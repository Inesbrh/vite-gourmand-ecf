<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1>Mes commandes</h1>

<?php if (!empty($commandes)): ?>

    <?php foreach($commandes as $commande): ?>

        <div style="margin-bottom:20px; border:1px solid #ccc; padding:10px;">

            <p>
                <strong>Commande :</strong>
                <?= htmlspecialchars($commande['numero_commande']); ?>
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

        </div>

    <?php endforeach; ?>

<?php else: ?>

    <p>Aucune commande.</p>

<?php endif; ?>

<?php require_once __DIR__ . '/layout/footer.php'; ?>