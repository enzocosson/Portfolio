<?php
require 'lib.inc.php';
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
  <title>Portfolio | Photo - Mountain</title>
  <meta name="description" content="Découvrez la beauté de la montagne à travers les yeux d'un photographe passionné. Explorez ma collection de photos, capturant la majesté de la nature et l'essence de l'aventure en montagne. Laissez-vous inspirer par ma passion pour la photographie et notre amour de la nature sauvage.">

  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="./css/styles.css" />
  <script src="https://unpkg.com/scrollreveal"></script>
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
  <?php
  require 'loader.php';
  require 'container_colors.php';
  require 'feedback.php';
  require 'header.php';
  ?>

  <div class="container_sound_button">
    <div class="sound_button">
      <svg class="sound_off" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 8C12 6.42667 11.0933 5.07556 9.77778 4.41778V6.38222L11.9556 8.56C11.9822 8.38222 12 8.19556 12 8ZM14.2222 8C14.2222 8.83556 14.0444 9.61778 13.7422 10.3467L15.0844 11.6889C15.6711 10.5867 16 9.33333 16 8C16 4.19556 13.3422 1.01333 9.77778 0.204444V2.03556C12.3467 2.8 14.2222 5.18222 14.2222 8ZM1.12889 0L0 1.12889L4.20444 5.33333H0V10.6667H3.55556L8 15.1111V9.12889L11.7778 12.9067C11.1822 13.3689 10.5156 13.7333 9.77778 13.9556V15.7867C11.0044 15.5111 12.1156 14.9422 13.0578 14.1778L14.8711 16L16 14.8711L8 6.87111L1.12889 0ZM8 0.888889L6.14222 2.74667L8 4.60444V0.888889Z" fill="#FCFCFC" />
      </svg>
      <svg class="sound_on" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 4.93444V10.0656H3.55556L8 14.3415V0.658495L3.55556 4.93444H0ZM12 7.5C12 5.98632 11.0933 4.68643 9.77778 4.05359V10.9379C11.0933 10.3136 12 9.01368 12 7.5ZM9.77778 0V1.76169C12.3467 2.49715 14.2222 4.78905 14.2222 7.5C14.2222 10.2109 12.3467 12.5028 9.77778 13.2383V15C13.3422 14.2218 16 11.1602 16 7.5C16 3.83979 13.3422 0.778221 9.77778 0Z" fill="#FCFCFC" />
      </svg>
    </div>
  </div>

  <audio class="sound mountain_sound" autoplay loop src="./audio/mountain_sound.mp3"></audio>

  <section class="galerie_web_page">
    <h1>Mountain</h1>

    <div class="container_galerie_top">

      <div class="galerie_portrait">
        <?php
        $co = connexionBD();
        echo mountainPortrait($co);
        ?>
      </div>

      <div class="galerie_paysage">
        <?php
        echo mountainPaysage($co);
        ?>
      </div>
      <script>
        window.sr = ScrollReveal();

        sr.reveal(".container_img", {
          duration: 1200,
          origin: "center",
          scale: 0.85,
          reset: true,
        });
      </script>
    </div>

    <div class="container_galerie_bottom">
      <?php
      echo mountainFullImage($co);
      deconnexionBD($co);
      ?>

    </div>

    <div class="autres_projets">
      <h2>Autres Projets</h2>

      <div class="suggestion">
        <div class="suggestion_top">
          <a href="/tropical" class="container_miniatures">
            <h3 class="titre_minia">TROPICAL</h3>
            <img src="./img/photo/theme/resize75/waterwall.jpg" alt="paysage tropical" class="miniatures" />
          </a>
          <a href="/gold" class="container_miniatures">
            <h3 class="titre_minia">GOLD</h3>
            <img src="./img/photo/theme/resize75/gold.jpg" alt="couché de soleil avec un jeune dans la forêt" class="miniatures" />
          </a>
        </div>

        <div class="suggestion_bottom">
          <a href="/by-night" class="container_miniatures">
            <h3 class="titre_minia">BY NIGHT</h3>
            <img src="./img/photo/theme/resize75/stars.jpg" alt="ciel étoilé sous un palmier" class="miniatures" />
          </a>
          <!-- <a href="my_dog.html" class="container_miniatures">
              <h3 class="titre_minia">MY DOG</h3>
              <img
                src="./img/photo/theme/resize75/tipsy.jpg"
                alt="mon chien"
                class="miniatures"
              />
            </a> -->
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
        <div class="video">
          <h4>VIDEO</h4>
          <a href="/video">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="play">
              <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 17v-10l9 5.146-9 4.854z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php require 'footer.php'; ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/BezierPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js" integrity="sha512-ht40uOoiTef4nKq0THVzjIGh3VS108J577LVVgNXnQLXza3doXjoM3owin2vd+Hm6w88k12RIrePIVY2WNzz6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js" integrity="sha512-RvUydNGlqYJapy0t4AH8hDv/It+zKsv4wOQGb+iOnEfa6NnF2fzjXgRy+FDjSpMfC3sjokNUzsfYZaZ8QAwIxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js" integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="./js/scrollMagicGalerie.js"></script>
<script src="./js/infoPhoto.js"></script>
<script src="./js/soundButtonMountain.js"></script>

</html>