<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <?php require_once __DIR__ . '/layout/header.php'; ?>

    <h1>Bienvenue chez Vite Gourmand</h1>

    <section>
        <h2>Julie et José, vos artisans du goût à Bordeaux</h2>
        <p>
            Nous sommes Julie et José, et depuis 25 ans à Bordeaux,
            nous avons à cœur de faire de vos repas des moments mémorables.<br>
            Que ce soit pour un simple repas en famille ou pour des fêtes comme Noël ou Pâques,<br>
            nous créons pour vous des menus gourmands,
            toujours en évolution, pour surprendre vos papilles et ravir vos convives.<br>
            Chaque plat que nous préparons est pensé avec passion, goût et authenticité.<br>
            Notre objectif ? Faire de chaque bouchée un instant de plaisir et de partage.<br>
            Nous serions ravis de participer à vos moments de fête et de transformer vos repas en souvenirs inoubliables.
        </p>
    </section>

    <section>
        <h2>Notre savoir-faire à votre service</h2>
        <p>
            Chez Vite & Gourmand, nous combinons 25 ans d’expérience avec une passion constante pour la gastronomie.<br>
            Chaque événement que nous accompagnons bénéficie de notre rigueur, notre organisation et notre sens du détail,<br>
            afin que tout se déroule parfaitement, de la préparation à la dégustation.<br>
            Nous veillons à ce que chaque plat soit non seulement délicieux, mais également présenté avec soin.<br>
            Notre équipe met un point d’honneur à allier créativité, qualité et fiabilité,
            pour que vous puissiez profiter de vos moments en toute sérénité,<br>en sachant que tout est entre de bonnes mains.
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

    <?php require_once __DIR__ . '/layout/footer.php'; ?>

</body>
</html>