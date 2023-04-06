<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Vidéo - Guadeloupe</title>
  <meta name="description" content="Découvrez mon voyage inoubliable en Guadeloupe à travers cette vidéo captivante. Explorez les merveilles naturelles de cette île paradisiaque, ses plages immaculées, ses forêts luxuriantes et ses montagnes majestueuses. Suivez-moi dans cette aventure incroyable et laissez-vous emporter par la beauté de la Guadeloupe.">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="cursor_follow"></div>
  <?php
  require 'loader.php';
  require 'container_colors.php';
  require 'feedback.php';
  require 'header.php';
  ?>
  <section class="guadeloupe_web_page">
    <div class="container_video_100vh">
      <div class="video_container">
        <div class="couverture">
          <img src="./img/video/miniature.webp" class="couverture_img" alt="photo flou d'une cascade" />
          <div class="play play_guadeloupe">
            <p>PLAY</p>
          </div>
        </div>
        <iframe class="video_guadeloupe" src="https://www.youtube.com/embed/InO2JlZUKEU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; playsinline; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <h2><span>GUADELOUPE </span>- Enzo Cosson</h2>
    </div>
    <div class="description">
      <p>
        <span class="titre">Description :</span>
        <br /><br />Cette vidéo capture les moments les plus mémorables de mon
        voyage en Guadeloupe. Tournée avec mon Nikon D3300 et l'objectif
        Tamron 18-200mm f/3.5-6.3, cette vidéo présente les merveilles
        naturelles et les charmes culturels de cette île des Caraïbes d'une
        manière cinématographique captivante.
      </p>
      <p>
        <span class="titre">Musique : </span><a href="https://www.youtube.com/watch?v=Ni-5gxombQk">Michael FK & Liam Thomas - Hold Me</a>
      </p>
    </div>

    <div class="autres_projets">
      <h2>Autres Projets</h2>

      <div class="suggestion">
        <div class="suggestion_top">
          <a href="/auvergne" class="container_miniatures">
            <h3 class="titre_minia">AUVERGNE</h3>
            <img src="./img/video/auvergne.webp" alt="paysage d'auverge" class="miniatures" />
          </a>
          <a href="/dream-by-kenzo" class="container_miniatures">
            <h3 class="titre_minia">DREAM BY KENZO</h3>
            <img src="./img/video/kenzo.webp" alt="packshot d'une pub de parfum" class="miniatures" />
          </a>
        </div>
      </div>
    </div>

    <div class="information_supplementaire">
      <div class="container_information_supplementaire">
        <div class="setup">
          <h4>SETUP</h4>
          <div class="specialite">
            <div class="spe">
              <h5>Appareil</h5>
              <p>Nikon D3300</p>
            </div>

            <div class="spe">
              <h5>Objectif</h5>
              <p>Nikon 18-55mm f/3.5-5.6</p>
              <p>Tamron 50-200mm f/3.5-6.3</p>
            </div>

            <div class="spe">
              <h5>Logiciel</h5>
              <p>Adobe Lightroom Classic</p>
            </div>

            <div class="spe">
              <h5>Workstation</h5>
              <p>MSI Optix MAG272CQR WQHD-27”</p>
            </div>
          </div>
        </div>
        <div class="photo">
          <h4>PHOTO</h4>
          <a href="/photo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="illu_photo">
              <path d="M24 22h-24v-20h24v20zm-1-19h-22v18h22v-18zm-1 16h-19l4-7.492 3 3.048 5.013-7.556 6.987 12zm-11.848-2.865l-2.91-2.956-2.574 4.821h15.593l-5.303-9.108-4.806 7.243zm-4.652-11.135c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5zm0 1c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php require 'footer.php'; ?>

</body>
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>
<script src="./js/generateColor.js"></script>
<script src="./js/feedback.js"></script>
<script type="module" src="./js/app.js"></script>

</html>