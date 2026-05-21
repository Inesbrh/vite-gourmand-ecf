<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Gestion des employés</h1>

    <a href="?page=add-user">

        <button>
            Ajouter un employé
        </button>

    </a>

    <br><br>

    <?php foreach($employes as $employe): ?>

        <div class="card">

            <h2>

                <?= htmlspecialchars($employe['prenom']); ?>
                <?= htmlspecialchars($employe['nom']); ?>

            </h2>

            <p>

                <?= htmlspecialchars($employe['email']); ?>

            </p>

            <p>

                <?= htmlspecialchars($employe['telephone']); ?>

            </p>

            <br>

            <a
                href="?page=delete-user&id=<?= $employe['utilisateur_id']; ?>"
            >

                <button
                    style="background:red;"
                >

                    Supprimer

                </button>

            </a>

        </div>

    <?php endforeach; ?>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>