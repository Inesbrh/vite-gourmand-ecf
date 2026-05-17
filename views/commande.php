<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1>Commander un menu</h1>

<form method="POST">

    <label>Date prestation :</label><br>
    <input type="date" name="date_prestation" required><br><br>

    <label>Heure livraison :</label><br>
    <input type="time" name="heure_livraison" required><br><br>

    <label>Nombre de personnes :</label><br>
    <input type="number" name="nombre_personne" required><br><br>

    <label>Prêt matériel :</label><br>

    <select name="pret_materiel">
        <option value="1">Oui</option>
        <option value="0">Non</option> 
    </select>

    <br><br>

    <button type="submit">Valider la commande</button>

</form>

<?php require_once __DIR__ . '/layout/footer.php'; ?>