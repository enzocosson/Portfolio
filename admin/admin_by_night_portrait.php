<?php
require '../lib.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Photo - By Night</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="../css/styles.css" />
</head>

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
    <a href="../index.html" class="pagelink">
      <img class="logo logo_white_galerie" src="../img/white_logo.png" alt="logo du site" />
      <img class="logo logo_black_galerie" src="../img/black_logo.png" alt="logo du site" />
    </a>

    <ul class="menu">
      <li><a class="links" href="../index.html">Accueil</a></li>
      <li>
        <a class="links" href="../developpement_web.html">Développement Web | Design</a>
      </li>
      <li><a class="links" href="../photo_video.html">Photos | Videos</a></li>
      <li><a class="links" href="../a_propos.html">About Me</a></li>
      <li class="li_contact">
        <a class="links" id="contact" href="../contact.php">Contact</a>
      </li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
    </div>
  </header>

  <ul class="menu_mobile_black">
    <li><a class="links barba-link" href="../index.html">Accueil</a></li>
    <li>
      <a class="links barba-link" href="../developpement_web.html">Développement Web | Design</a>
    </li>
    <li><a class="links" href="../photo_video.html">Photos | Videos</a></li>
    <li><a class="links" href="../a_propos.html">About Me</a></li>
    <li class="li_contact">
      <a class="links" id="contact" href="../contact.php">Contact</a>
    </li>
  </ul>

  <div class="home_footer">
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
  </div>
  <section class="container_cards_admin">
    <section class="container_cards_admin">



      <div class="container_cards">
        <?php
        $co = connexionBD();
        $req = 'SELECT * FROM night_portrait';
        try {
          $resultat = $co->prepare($req);
          $resultat->execute();
        } catch (PDOException $e) {
          echo '<p>Erreur : ' . $e->getMessage() . '</p>';
          die();
        }
        if ($resultat !== false) {
          while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/by_night/portrait/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_by_night_portrait_modif.php?id=' . $id . '">Modifier</a>';
            echo '<div class="supprimer suppression-photo">Supprimer</div>';
            echo '</div>';
            echo '</div>';
          }
        }

        ?>
      </div>

      <div class="confirmation" style="display: none;">
        <div class="pupUp">
          <h1>Es-tu sur de vouloir supprimer cette photo ?</h1>
          <div class="interaction">
            <button class="non" onclick="document.querySelector('.confirmation').style.display = 'none';">Non</button>
            <a href="admin_by_night_portrait_suppr.php?id=<?php echo $id; ?>" class="oui">Oui</a>
          </div>
        </div>
      </div>

      <?php
      deconnexionBD($co);
      ?>
      <script>
        const suppressionPhotos = document.querySelectorAll('.suppression-photo');

        suppressionPhotos.forEach((suppressionPhoto) => {
          suppressionPhoto.addEventListener('click', (event) => {

            document.querySelector('.confirmation').style.display = 'flex';
          });
        });
      </script>


      <a class="retour" href="./admin_by_night.php">Retour</a>
    </section>
  </section>
</body>
<script src="../js/generateColor.js"></script>
<script type="module" src="../js/app.js"></script>

</html>