<?php
require '../lib.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio | Photo - Tropical</title>
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
            <a class="links" id="contact" href="../contact">Contact</a>
        </li>
    </ul>


    <section class="administration">
        <h1>Administration</h1>
        <h2>Bonjour Enzo, heureux de vous revoir.</h2>

        <section>
            <div class="theme_photo">
                <a href="admin_mountain.php" class="card_photo">
                    <h3 class="theme_titre">Mountain</h3>
                    <img src="../img/photo/theme/resize/mountain.webp" class="theme_img" alt="couvertrue de la thématique gold" />
                </a>
                <a href="admin_tropical.php" class="card_photo">
                    <h3 class="theme_titre">Tropical</h3>
                    <img src="../img/photo/theme/resize/waterwall.webp" class="theme_img" alt="couvertrue de la thématique gold" />
                </a>
                <a href="admin_gold.php" class="card_photo">
                    <h3 class="theme_titre">Gold</h3>
                    <img src="../img/photo/theme/resize/gold.webp" class="theme_img" alt="couvertrue de la thématique gold" />
                </a>
                <a href="admin_by_night.php" class="card_photo">
                    <h3 class="theme_titre">By Night</h3>
                    <img src="../img/photo/theme/resize/stars.webp" class="theme_img" alt="couverture de la thématique gold" />
                </a>
            </div>

            <?php

            $co = connexionBD();

            $requete = $co->prepare("SELECT nom, prenom, email, theme, message, date, heure FROM contact");
            $requete->execute();
            $donnees = $requete->fetch(PDO::FETCH_ASSOC);

            echo '<div class="boites_messages">';
            echo '  <div class="boite">';
            echo '    <h3>Contact</h3>';
            echo '    <div class="message">';
            echo '      <p>' . $donnees['prenom'] . '</p>';
            echo '      <p>' . $donnees['nom'] . '</p>';
            echo '      <p>' . $donnees['email'] . '</p>';
            echo '      <p>' . $donnees['theme'] . '</p>';
            echo '      <p class="container_message">' . $donnees['message'] . '</p>';
            echo '      <p>' . $donnees['date'] . '</p>';
            echo '      <p>' . $donnees['heure'] . '</p>';
            echo '    </div>';
            echo '  </div>';

            $requete2 = $co->prepare("SELECT prenom, nom, email, commentaire, note FROM feedback");
            $requete2->execute();
            $resultats = $requete2->fetch(PDO::FETCH_ASSOC);

            echo '  <div class="boite">';
            echo '    <h3>Feedback</h3>';
            echo '    <div class="message">';
            echo '      <p>' . $resultats['prenom'] . '</p>';
            echo '      <p>' . $resultats['nom'] . '</p>';
            echo '      <p>' . $resultats['email'] . '</p>';
            echo '      <p class="container_message">' . $resultats['commentaire'] . '</p>';
            echo '      <p>' . $resultats['note'] . '/10' . '</p>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
            deconnexionBD($co);
            ?>
        </section>
    </section>
</body>

<?php require 'footer.php'; ?>

</html>