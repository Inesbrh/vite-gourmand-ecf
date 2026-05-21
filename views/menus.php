<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container">

    <h1>Nos Menus</h1>

    <!-- FILTRES -->

    <div class="card">

        <h2>Filtres</h2>

        <input
            type="number"
            id="prix"
            placeholder="Prix maximum"
        >

        <select id="regime">

            <option value="">
                Tous les régimes
            </option>

            <option value="vegetarien">
                Végétarien
            </option>

            <option value="vegan">
                Vegan
            </option>

            <option value="classique">
                Classique
            </option>

        </select>

        <select id="theme">

            <option value="">
                Tous les thèmes
            </option>

            <option value="noel">
                Noel
            </option>

            <option value="pâques">
                Pâques
            </option>

            <option value="mariage">
                Mariage
            </option>

            <option value="classique">
                Classique
            </option>

        </select>

    </div>

    <!-- MENUS -->

    <div id="menus-container">

        <?php foreach($menus as $menu): ?>

            <div class="card menu-card">

                <div class="menu-text">

                    <h2>
                        <?= htmlspecialchars($menu['titre']); ?>
                    </h2>

                    <br>

                    <p>
                        <?= htmlspecialchars($menu['description']); ?>
                    </p>

                    <br>

                    <p>
                        <strong>Prix :</strong>

                        <?= htmlspecialchars($menu['prix_par_personne']); ?> €
                    </p>

                    <p>
                        <strong>Nombre minimum :</strong>

                        <?= htmlspecialchars($menu['nombre_personne_minimum']); ?>
                        personnes
                    </p>

                    <p>
                        <strong>Régime :</strong>

                        <?= htmlspecialchars($menu['regime']); ?>
                    </p>

                    <p>
                        <strong>Thème :</strong>

                        <?= htmlspecialchars($menu['theme']); ?>
                    </p>

                    <br>

                    <a href="?page=detail-menu&id=<?= $menu['menu_id']; ?>">

                        <button>
                            Voir le détail
                        </button>

                    </a>

                </div>

                <div class="menu-image">

                    <img
                        src="/vite-gourmand-ecf/public/assets/img/<?= htmlspecialchars($menu['image']); ?>"
                        alt="<?= htmlspecialchars($menu['titre']); ?>"
                    >

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<!-- JAVASCRIPT FILTRES -->

<script>

const prixInput =
    document.getElementById('prix');

const regimeSelect =
    document.getElementById('regime');

const themeSelect =
    document.getElementById('theme');

const cards =
    document.querySelectorAll('.menu-card');

function filtrerMenus() {

    const prix =
        prixInput.value;

    const regime =
        regimeSelect.value.toLowerCase();

    const theme =
        themeSelect.value.toLowerCase();

    cards.forEach(card => {

        const texte =
            card.innerText.toLowerCase();

        const prixMenu =
            parseFloat(
                texte.match(/prix :\s*(\d+)/i)?.[1]
            );

        const matchPrix =
            !prix || prixMenu <= prix;

        const matchRegime =
            !regime || texte.includes(regime);

        const matchTheme =
            !theme || texte.includes(theme);

        if (
            matchPrix &&
            matchRegime &&
            matchTheme
        ) {

            card.style.display = 'flex';

        } else {

            card.style.display = 'none';
        }
    });
}

prixInput.addEventListener(
    'input',
    filtrerMenus
);

regimeSelect.addEventListener(
    'change',
    filtrerMenus
);

themeSelect.addEventListener(
    'change',
    filtrerMenus
);

</script>

<?php require_once __DIR__ . '/layout/footer.php'; ?>