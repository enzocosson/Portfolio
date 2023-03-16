<?php
require '../lib.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Photo - Mountain</title>
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


  <section class="container_cards_admin">
    <div class="container_cards">
      <?php
      $co = connexionBD();


      if (isset($_GET['id'])) {

        $id = $_GET['id'];


        $req = "SELECT * FROM mountain_portrait WHERE photo_id = $id";
        $resultat = $co->prepare($req);
        $resultat->execute([$id]);


        if ($resultat->rowCount() == 1) {

          $row = $resultat->fetch(PDO::FETCH_ASSOC);
          $filename = $row['photo_src'];
          $alt = $row['photo_alt'];
          $iso = $row['photo_iso'];
          $f_stop = $row['photo_ouverture'];
          $shutter_speed = $row['photo_duree'];
          $focal_length = $row['photo_focale'];


          echo '<form method="post" action="traitement_modifier_photo.php">';
          echo '<input type="hidden" name="id" value="' . $id . '" />';
          echo '<label>Photo :</label>';
          echo '<input type="text" name="filename" value="' . $filename . '" />';
          echo '<br />';
          echo '<label>Alt :</label>';
          echo '<input type="text" name="alt" value="' . $alt . '" />';
          echo '<br />';
          echo '<label>ISO :</label>';
          echo '<input type="text" name="iso" value="' . $iso . '" />';
          echo '<br />';
          echo '<label>Ouverture :</label>';
          echo '<input type="text" name="f_stop" value="' . $f_stop . '" />';
          echo '<br />';
          echo '<label>Durée :</label>';
          echo '<input type="text" name="shutter_speed" value="' . $shutter_speed . '" />';
          echo '<br />';
          echo '<label>Focale :</label>';
          echo '<input type="text" name="focal_length" value="' . $focal_length . '" />';
          echo '<br />';
          echo '<input type="submit" value="Modifier" />';
          echo '</form>';
        } else {

          echo '<p>La photo demandée n\'existe pas.</p>';
        }
      } else {
        // Si l'identifiant de la photo n'est pas présent dans l'URL, afficher un message d'erreur
        echo '<p>Aucune photo à modifier.</p>';
      }


      deconnexionBD($co);
      ?>
    </div>
    <a class="retour" href="./admin_mountain.php">Retour</a>
  </section>
</body>
<script src="../js/generateColor.js"></script>
<script type="module" src="../js/app.js"></script>

</html>