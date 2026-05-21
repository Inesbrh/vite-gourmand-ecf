<?php require_once __DIR__ . '/layout/header.php'; ?>

<?php

$success = $success ?? null;

?>

<div class="container">

    <div class="card">

        <h1>Contact</h1>

        <p>

            Une question ?
            Contactez-nous directement.

        </p>

        <!-- MESSAGE SUCCESS -->

        <?php if($success): ?>

            <p
                style="
                    color: green;
                    font-weight: bold;
                    margin-top: 20px;
                    margin-bottom: 20px;
                "
            >

                <?= htmlspecialchars($success); ?>

            </p>

        <?php endif; ?>

        <!-- FORMULAIRE -->

        <form
            method="POST"
            action="?page=contact"
        >

            <label>

                Nom

            </label>

            <input
                type="text"
                name="nom"
                required
            >

            <label>

                Email

            </label>

            <input
                type="email"
                name="email"
                required
            >

            <label>

                Message

            </label>

            <textarea
                name="message"
                rows="8"
                required
            ></textarea>

            <button type="submit">

                Envoyer

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>