<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>
            Réinitialiser le mot de passe
        </h1>

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

            <label>Email :</label>

            <input
                type="email"
                name="email"
                required
            >

            <label>Nouveau mot de passe :</label>

            <input
                type="password"
                name="password"
                required
            >

            <button type="submit">

                Réinitialiser

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>