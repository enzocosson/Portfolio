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


  <section class="container_formulaire">

    <div class="confirmation" style="display: none;">
      <div class="pupUp">
        <h1>Es-tu sur de vouloir modifier cette photo ?</h1>
        <div class="interaction">
          <button class="non" onclick="document.querySelector('.confirmation').style.display = 'none'; return false;">Non</button>
          <button class="oui" onclick="document.querySelector('.confirmation').style.display = 'none'; document.querySelector('#form_modif').submit(); return true;">Oui</button>
        </div>
      </div>
    </div>

    <?php
    $co = connexionBD();


    if (isset($_GET['id'])) {

      $id = $_GET['id'];


      $req = "SELECT * FROM night_fullimage WHERE photo_id = $id";
      $resultat = $co->prepare($req);
      $resultat->execute([$id]);


      if ($resultat->rowCount() == 1) {

        $row = $resultat->fetch(PDO::FETCH_ASSOC);
        $filename = $row['photo_src'];
        $alt = $row['photo_alt'];


        echo '<form id="form_modif" method="post" onsubmit="return confirmerModification()" action="by_night_fullimage_modif_traitement.php" >';
        echo '<input type="hidden" name="id" value="' . $id . '" />';

        echo '<div class="label_input">';
        echo '<label>Photo :</label>';
        echo '<input type="text" name="filename" value="' . $filename . '" />';
        echo '</div>';

        echo '<br />';

        echo '<div class="label_input">';
        echo '<label>Alt :</label>';
        echo '<input type="text" name="alt" value="' . $alt . '" />';
        echo '</div>';


        echo '<div class="interaction">';
        echo '<a class="retour" href="./admin_by_night_fullimage.php">Retour</a>';
        echo '<input class="envoyer" type="submit" value="Modifier"/>';

        echo '</div>';

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



  </section>
  <script>
    function confirmerModification() {
      document.querySelector('.confirmation').style.display = "flex";
      return false;
    }
  </script>


</body>
<script src="../js/generateColor.js"></script>
<script type="module" src="../js/app.js"></script>

</html>