<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>Mon profil</h1>

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

            <label>Nom :</label>

            <input
                type="text"
                name="nom"
                value="<?= htmlspecialchars($user['nom'] ?? ''); ?>"
                required
            >

            <label>Prénom :</label>

            <input
                type="text"
                name="prenom"
                value="<?= htmlspecialchars($user['prenom'] ?? ''); ?>"
                required
            >

            <label>Téléphone :</label>

            <input
                type="text"
                name="telephone"
                value="<?= htmlspecialchars($user['telephone'] ?? ''); ?>"
                required
            >

            <label>Ville :</label>

            <input
                type="text"
                name="ville"
                value="<?= htmlspecialchars($user['ville'] ?? ''); ?>"
            >

            <label>Adresse :</label>

            <input
                type="text"
                name="adresse_postale"
                value="<?= htmlspecialchars($user['adresse_postale'] ?? ''); ?>"
            >

            <button type="submit">

                Mettre à jour

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>