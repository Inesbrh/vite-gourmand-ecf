<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <div class="card">

        <h1>Commander un menu</h1>

        <!-- INFOS CLIENT -->

        <h2>Informations client</h2>

        <input
            type="text"
            value="<?= htmlspecialchars($user['nom']); ?>"
            disabled
        >

        <input
            type="text"
            value="<?= htmlspecialchars($user['prenom']); ?>"
            disabled
        >

        <input
            type="email"
            value="<?= htmlspecialchars($user['email']); ?>"
            disabled
        >

        <input
            type="text"
            value="<?= htmlspecialchars($user['telephone']); ?>"
            disabled
        >

        <!-- ERREURS -->

        <?php if(isset($error)): ?>

            <p style="color:red; font-weight:bold;">

                <?= htmlspecialchars($error); ?>

            </p>

        <?php endif; ?>

        <!-- SUCCESS -->

        <?php if(isset($message)): ?>

            <p style="color:green; font-weight:bold;">

                <?= htmlspecialchars($message); ?>

            </p>

            <br>

            <div
                style="
                    background:#f8f9fa;
                    padding:20px;
                    border-radius:10px;
                "
            >

                <h3>Détail du prix</h3>

                <p>
                    Prix menus :
                    <?= htmlspecialchars($prix_total); ?> €
                </p>

                <p>
                    Livraison :
                    <?= htmlspecialchars($prix_livraison); ?> €
                </p>

                <p style="font-size:24px;">

                    <strong>
                        Total :
                        <?= htmlspecialchars($prix_final); ?> €
                    </strong>

                </p>

            </div>

        <?php endif; ?>

        <!-- FORMULAIRE -->

        <?php if(!isset($message)): ?>

        <form method="POST">

            <label>Date prestation :</label>

            <input
                type="date"
                name="date_prestation"
                min="<?= date('Y-m-d', strtotime('+2 days')); ?>"
                required
            >

            <label>Adresse prestation :</label>

            <input
                type="text"
                name="adresse_prestation"
                required
            >

            <label>Ville prestation :</label>

            <input
                type="text"
                name="ville_prestation"
                required
            >

            <label>Lieu prestation :</label>

            <input
                type="text"
                name="lieu_prestation"
                required
            >

            <label>Heure livraison :</label>

            <input
                type="time"
                name="heure_livraison"
                required
            >

            <label>Nombre de personnes :</label>

            <input
                type="number"
                name="nombre_personne"
                min="<?= htmlspecialchars($menu['nombre_personne_minimum']); ?>"
                required
            >

            <label>Prêt matériel :</label>

            <select name="pret_materiel">

                <option value="1">
                    Oui
                </option>

                <option value="0">
                    Non
                </option>

            </select>

            <button type="submit">
                Valider la commande
            </button>

        </form>

        <?php endif; ?>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>