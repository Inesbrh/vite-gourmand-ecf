<?php

require_once __DIR__ . '/../../models/Horaire.php';

$horaire = Horaire::get();

?>

<hr>

<footer>

    <div class="container">

        <h3>Horaires</h3>

        <p style="white-space: pre-line;">

            <?= htmlspecialchars($horaire['contenu'] ?? ''); ?>

        </p>

        <br>

        <a href="?page=mentions-legales">

            Mentions légales

        </a>

        |

        <a href="?page=cgv">

            Conditions générales de vente

        </a>

    </div>

</footer>

</body>
</html>