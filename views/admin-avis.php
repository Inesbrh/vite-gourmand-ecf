<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Gestion des avis</h1>

    <?php foreach($avis as $unAvis): ?>

        <div class="card">

            <p>
                <strong>Note :</strong>

                <?= htmlspecialchars($unAvis['note']); ?> ⭐
            </p>

            <p>
                <strong>Commentaire :</strong>

                <?= htmlspecialchars($unAvis['description']); ?>
            </p>

            <p>
                <strong>Statut :</strong>

                <?= htmlspecialchars($unAvis['statut']); ?>
            </p>

            <form method="POST">

                <input
                    type="hidden"
                    name="avis_id"
                    value="<?= htmlspecialchars($unAvis['avis_id']); ?>"
                >

                <select name="statut">

                    <option
                        value="en attente"
                        <?= $unAvis['statut'] == 'en attente' ? 'selected' : ''; ?>
                    >
                        En attente
                    </option>

                    <option
                        value="validé"
                        <?= $unAvis['statut'] == 'validé' ? 'selected' : ''; ?>
                    >
                        Validé
                    </option>

                    <option
                        value="refusé"
                        <?= $unAvis['statut'] == 'refusé' ? 'selected' : ''; ?>
                    >
                        Refusé
                    </option>

                </select>

                <button type="submit">
                    Modifier
                </button>

            </form>

        </div>

    <?php endforeach; ?>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>