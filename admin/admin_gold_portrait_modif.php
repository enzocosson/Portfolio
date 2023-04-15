<?php
require '../lib.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Photo - Gold</title>
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

    <div class="information_photo">

      <?php
      $co = connexionBD();


      if (isset($_GET['id'])) {

        $id = $_GET['id'];


        $req = "SELECT * FROM gold_portrait WHERE photo_id = $id";
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


          echo '<form id="form_modif" method="post" onsubmit="return confirmerModification()" action="gold_portrait_modif_traitement.php" >';
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

          echo '<br />';

          echo '<div class="label_input">';
          echo '<label>ISO :</label>';
          echo '<input type="text" name="iso" value="' . $iso . '" />';
          echo '</div>';

          echo '<br />';

          echo '<div class="label_input">';
          echo '<label>Ouverture :</label>';
          echo '<input type="text" name="f_stop" value="' . $f_stop . '" />';
          echo '</div>';

          echo '<br />';

          echo '<div class="label_input">';
          echo '<label>Durée :</label>';
          echo '<input type="text" name="shutter_speed" value="' . $shutter_speed . '" />';
          echo '</div>';

          echo '<br />';

          echo '<div class="label_input">';
          echo '<label>Focale :</label>';
          echo '<input type="text" name="focal_length" value="' . $focal_length . '" />';
          echo '</div>';

          echo '<br />';

          echo '<div class="interaction">';
          echo '<a class="retour" href="./admin_gold_portrait.php">Retour</a>';
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
      ?>
      <div class="container_photo">
        <img src="../img/photo/gold/portrait/<?php echo $filename; ?>" alt="<?php echo $alt; ?>" />
      </div>

      <?php
      deconnexionBD($co);
      ?>
    </div>




  </section>
  <script>
    function confirmerModification() {
      document.querySelector('.confirmation').style.display = "flex";
      return false;
    }
  </script>


</body>
<?php require 'footer.php'; ?>

</html>