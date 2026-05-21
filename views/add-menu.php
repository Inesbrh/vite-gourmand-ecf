<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>Ajouter un menu</h1>

        <form
            method="POST"
            enctype="multipart/form-data"
        >

            <label>Titre :</label>

            <input
                type="text"
                name="titre"
                required
            >

            <label>Description :</label>

            <textarea
                name="description"
                required
            ></textarea>

            <label>Prix par personne :</label>

            <input
                type="number"
                name="prix_par_personne"
                required
            >

            <label>Nombre minimum :</label>

            <input
                type="number"
                name="nombre_personne_minimum"
                required
            >

            <label>Régime :</label>

            <input
                type="text"
                name="regime"
                required
            >

            <label>Thème :</label>

            <input
                type="text"
                name="theme"
                required
            >

            <label>Allergènes :</label>

            <input
                type="text"
                name="allergenes"
            >

            <label>Conditions :</label>

            <textarea
                name="conditions_menu"
            ></textarea>

            <label>Stock :</label>

            <input
                type="number"
                name="quantite_restante"
                required
            >

            <!-- IMAGES -->

            <label>Image principale :</label>

            <input
                type="file"
                name="image"
                required
            >

            <label>Image galerie 1 :</label>

            <input
                type="file"
                name="image1"
            >

            <label>Image galerie 2 :</label>

            <input
                type="file"
                name="image2"
            >

            <label>Image galerie 3 :</label>

            <input
                type="file"
                name="image3"
            >

            <button type="submit">

                Ajouter le menu

            </button>

        </form>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>