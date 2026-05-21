<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>Laisser un avis</h1>

        <?php if(isset($message)): ?>

            <p style="color:green;">
                <?= htmlspecialchars($message); ?>
            </p>

        <?php endif; ?>

        <?php if(!isset($message)): ?>

        <form method="POST">

            <label>Note :</label>

            <select name="note" required>

                <option value="5">5 ⭐</option>
                <option value="4">4 ⭐</option>
                <option value="3">3 ⭐</option>
                <option value="2">2 ⭐</option>
                <option value="1">1 ⭐</option>

            </select>

            <label>Commentaire :</label>

            <textarea
                name="description"
                rows="5"
                required
            ></textarea>

            <button type="submit">
                Envoyer l'avis
            </button>

        </form>

        <?php endif; ?>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>