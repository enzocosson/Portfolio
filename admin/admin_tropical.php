<?php
require '../lib.inc.php';
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
    <title>Portfolio | Admin - Tropical</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./img/favicon/site.webmanifest" />
    <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#00aba9" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="stylesheet" href="../css/styles.css" />
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
    <div class="cursor_follow"></div>
    <div class="loader">
        <span class="deformation"></span>
        <div class="spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="transition_leave"></div>

    <section class="container_colors">
        <div class="bg_colors"></div>
        <div class="choix_couleurs">
            <button onclick="colorVert()" class="colors vert"></button>
            <button onclick="colorBleu()" class="colors bleu"></button>
            <button onclick="colorViolet()" class="colors violet"></button>
            <button onclick="colorOrange()" class="colors orange"></button>
            <button onclick="colorRose()" class="colors rose"></button>
            <button onclick="colorJaune()" class="colors jaune"></button>
            <button onclick="colorTurquoise()" class="colors turquoise"></button>
            <button onclick="colorRouge()" class="colors rouge"></button>
        </div>
    </section>

    <header class="header header_galerie" id="rth">
        <a href="../accueil" class="pagelink">
            <img class="logo logo_white_galerie" src="../img/white_logo.png" alt="logo du site" />
            <img class="logo logo_black_galerie" src="../img/black_logo.png" alt="logo du site" />
        </a>

        <ul class="menu">
            <li><a class="links" href="../accueil">Accueil</a></li>
            <li>
                <a class="links" href="../developpement-web">Développement web | Design</a>
            </li>
            <li><a class="links" href="../photo-video">Photos | Videos</a></li>
            <li><a class="links" href="../a-propos">À propos</a></li>
            <li class="li_contact">
                <a class="links" id="contact" href="../contact">Contact</a>
            </li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
    </header>

    <ul class="menu_mobile_black">
        <li><a class="links " href="../accueil">Accueil</a></li>
        <li>
            <a class="links " href="../developpement-web">Développement web | Design</a>
        </li>
        <li><a class="links" href="../photo-video">Photos | Videos</a></li>
        <li><a class="links" href="../a-propos">À propos</a></li>
        <li class="li_contact">
            <a class="links" id="contact" href="..//contact">Contact</a>
        </li>
    </ul>

    <div class="home_footer">
        <audio class="rth_sound" src="./audio/click/rth-sound.mp3"></audio>

        <audio class="sound_click_feedback" src="./audio/click/click-sound.mp3"></audio>

        <audio class="sound_click_colors" src="./audio/click/click-sound.mp3"></audio>
        <audio class="select_colors_sound" src="./audio/click/select-colors-sound.mp3"></audio>
        <a class="rth" href="#rth">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 32L5.64 37.64L28 15.32V64H36V15.32L58.32 37.68L64 32L32 0L0 32Z" fill="#FCFCFC" />
            </svg>
        </a>

        <button class="darkMode">
            <svg class="logo_darkmode" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="vector_darkMode" d="M23.2457 44.8802C9.72124 44.8894 -0.981693 33.574 0.0716015 20.2823C0.83074 10.7049 5.87889 4.08024 14.7844 0.374315C16.0552 -0.154627 17.2585 -0.210262 18.3093 0.777043C19.3542 1.75853 19.3684 2.93101 18.9459 4.25129C16.2793 12.594 19.9 21.2555 27.6656 25.0777C31.7271 27.0772 35.9628 27.3512 40.3059 26.0907C41.0801 25.8657 41.8367 25.5302 42.6809 25.7146C44.4533 26.1015 45.4566 27.8519 44.7941 29.5999C41.7501 37.6295 36.0003 42.5669 27.5881 44.4152C26.9131 44.5639 26.2256 44.6685 25.5382 44.7383C24.7299 44.8196 23.9157 44.8412 23.2457 44.8802ZM36.5469 32.6066C29.6847 32.825 23.8032 30.6561 18.9951 25.8616C14.2052 21.0853 12.0562 15.2246 12.2628 8.43301C7.90798 11.61 4.69643 18.0943 6.07055 25.1881C7.40633 32.086 12.9411 37.5382 19.9317 38.7737C26.9556 40.0151 33.362 36.9868 36.5469 32.6066Z" fill="#FCFCFC" />
            </svg>
        </button>

        <button onclick="generateColors()" class="change_color_btn" href="">
            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27 0C12.09 0 0 12.09 0 27C0 41.91 12.09 54 27 54C29.49 54 31.5 51.99 31.5 49.5C31.5 48.33 31.05 47.28 30.33 46.47C29.64 45.69 29.19 44.64 29.19 43.5C29.19 41.01 31.2 39 33.69 39H39C47.28 39 54 32.28 54 24C54 10.74 41.91 0 27 0ZM10.5 27C8.01 27 6 24.99 6 22.5C6 20.01 8.01 18 10.5 18C12.99 18 15 20.01 15 22.5C15 24.99 12.99 27 10.5 27ZM19.5 15C17.01 15 15 12.99 15 10.5C15 8.01 17.01 6 19.5 6C21.99 6 24 8.01 24 10.5C24 12.99 21.99 15 19.5 15ZM34.5 15C32.01 15 30 12.99 30 10.5C30 8.01 32.01 6 34.5 6C36.99 6 39 8.01 39 10.5C39 12.99 36.99 15 34.5 15ZM43.5 27C41.01 27 39 24.99 39 22.5C39 20.01 41.01 18 43.5 18C45.99 18 48 20.01 48 22.5C48 24.99 45.99 27 43.5 27Z" fill="white" />
            </svg>
        </button>
        <button onclick="generateFeedback()" class="feedback_btn" href="">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M72 0H8C3.6 0 0.04 3.6 0.04 8L0 80L16 64H72C76.4 64 80 60.4 80 56V8C80 3.6 76.4 0 72 0ZM64 48H16V40H64V48ZM64 36H16V28H64V36ZM64 24H16V16H64V24Z" fill="#FCFCFC" />
            </svg>
        </button>
    </div>
    <section class="administration">
        <section class="container">
            <h1>Tropical</h1>
            <div class="theme_photo">
                <a href="admin_tropical_portrait.php" class="card_photo spe">
                    <h3 class="theme_titre">Portrait</h3>
                </a>
                <a href="admin_tropical_paysage.php" class="card_photo spe">
                    <h3 class="theme_titre">Paysage</h3>
                </a>
                <a href="admin_tropical_fullimage.php" class="card_photo spe">
                    <h3 class="theme_titre">Fullimage</h3>
                </a>
            </div>
            <a class="retour" href="./index.php">Retour</a>
        </section>
    </section>
</body>
<?php require 'footer.php'; ?>

</html>