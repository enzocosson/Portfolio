<?php
require '././lib.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K5PXVFM');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | Photo - Gold</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#00aba9" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="././css/styles.css" />
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-99XN6JZP88"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-99XN6JZP88');
</script>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5PXVFM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header header_galerie" id="rth">
        <a href="././/" class="pagelink">
            <img class="logo logo_white_galerie" src="././img/white_logo.png" alt="logo du site" />
            <img class="logo logo_black_galerie" src="././img/black_logo.png" alt="logo du site" />
        </a>

        <ul class="menu">
            <li><a class="links" href="././/">Accueil</a></li>
            <li>
                <a class="links" href="././/developpement-web">Développement web | Design</a>
            </li>
            <li><a class="links" href="././/photo-video">Photos | Videos</a></li>
            <li><a class="links" href="././/a-propos">À propos</a></li>
            <li class="li_contact">
                <a class="links" id="contact" href="././/contact">Contact</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
    </header>

    <ul class="menu_mobile_black">
        <li><a class="links " href="././/">Accueil</a></li>
        <li>
            <a class="links " href="././/developpement-web">Développement web | Design</a>
        </li>
        <li><a class="links" href="././/photo-video">Photos | Videos</a></li>
        <li><a class="links" href="././/a-propos">À propos</a></li>
        <li class="li_contact">
            <a class="links" id="contact" href="././/contact">Contact</a>
        </li>
    </ul>


    <section class="container_formulaire">

        <form action="/admin_gold_paysage_ajout_traitement.php" method="POST" enctype="multipart/form-data">
            <div class="label_input">
                <label for="photo">Photo :</label>
                <input type="file" id="photo" name="photo" required>
            </div>
            <div class="label_input">
                <label for="alt">Alt:</label>
                <input type="text" id="alt" name="alt" required>
            </div>
            <div class="label_input">
                <label for="iso">ISO :</label>
                <input type="text" id="iso" name="iso" required>
            </div>
            <div class="label_input">
                <label for="ouverture">Ouverture :</label>
                <input type="text" id="ouverture" name="ouverture" required>
            </div>
            <div class="label_input">
                <label for="duree">Durée :</label>
                <input type="text" id="duree" name="duree" required>
            </div>
            <div class="label_input">
                <label for="focale">Focale :</label>
                <input type="text" id="focale" name="focale" required>
            </div class="label_input">

            <div class="interaction">
                <a class="retour" href="./admin_gold_paysage.php">Retour</a>
                <button class="ajouter" type="submit" name="submit">Ajouter la photo</button>
            </div>

        </form>
        <?php
        if (isset($_SESSION['success_message'])) {

            echo '<p class="confirmation-message">' . $_SESSION['success_message'] . '</p>';

            unset($_SESSION['success_message']);
        }
        ?>
    </section>
    <script>
        // Validation des champs
        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            const alt = document.getElementById('alt').value;
            const iso = document.getElementById('iso').value;
            const ouverture = document.getElementById('ouverture').value;
            const duree = document.getElementById('duree').value;
            const focale = document.getElementById('focale').value;

            if (alt === '' || iso === '' || ouverture === '' || duree === '' || focale === '') {
                alert('Veuillez remplir tous les champs.');
                event.preventDefault();
            }
        });
    </script>
</body>
<?php require 'footer.php'; ?>

</html>