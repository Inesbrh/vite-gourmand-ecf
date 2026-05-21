<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>Ajouter un employé</h1>

        <form method="POST">

            <label>Nom :</label>

            <input
                type="text"
                name="nom"
                required
            >

            <label>Prénom :</label>

            <input
                type="text"
                name="prenom"
                required
            >

            <label>Email :</label>

            <input
                type="email"
                name="email"
                required
            >

            <label>Téléphone :</label>

            <input
                type="text"
                name="telephone"
                required
            >

            <label>Adresse :</label>

            <input
                type="text"
                name="adresse"
                required
            >

            <label>Ville :</label>

            <input
                type="text"
                name="ville"
                required
            >

            <label>Mot de passe :</label>

            <input
                type="password"
                name="password"
                required
            >

            <button type="submit">

                Ajouter l'employé

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>