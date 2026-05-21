<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>Modifier les horaires</h1>

        <?php if(isset($message)): ?>

            <p
                style="
                    color:green;
                    font-weight:bold;
                "
            >

                <?= htmlspecialchars($message); ?>

            </p>

        <?php endif; ?>

        <form method="POST">

            <label>Horaires :</label>

            <textarea
                name="contenu"
                rows="10"
                required
            ><?= htmlspecialchars($horaire['contenu'] ?? ''); ?></textarea>

            <button type="submit">

                Enregistrer

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>