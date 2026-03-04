<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>

    <h1>Bienvenue chez Vite Gourmand</h1>

    <section>
        <h2>Présentation de l’entreprise</h2>
        <p>
            Vite Gourmand est un restaurant moderne alliant rapidité,
            qualité et passion du métier.
        </p>
    </section>

    <section>
        <h2>Notre équipe</h2>
        <p>
            Une équipe professionnelle et expérimentée,
            engagée pour offrir un service rapide et chaleureux.
        </p>
    </section>

    <section>
        <h2>Avis clients</h2>

        <?php if (!empty($avis)): ?>
            <?php foreach($avis as $a): ?>
                <div style="margin-bottom:15px;">
                    <strong>Note : <?= htmlspecialchars($a['note']); ?>/5</strong>
                    <p><?= htmlspecialchars($a['description']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun avis pour le moment.</p>
        <?php endif; ?>

    </section>

</body>
</html>