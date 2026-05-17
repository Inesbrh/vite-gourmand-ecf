<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1>Créer un compte</h1>

<form method="POST">

    <input type="text" name="prenom" placeholder="Prénom" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Mot de passe" required>
    <br><br>

    <input type="text" name="telephone" placeholder="Téléphone">
    <br><br>

    <input type="text" name="ville" placeholder="Ville">
    <br><br>

    <input type="text" name="pays" placeholder="Pays">
    <br><br>

    <input type="text" name="adresse_postale" placeholder="Adresse postale">
    <br><br>

    <button type="submit">
        Créer mon compte
    </button>

</form>

<?php require_once __DIR__ . '/layout/footer.php'; ?>