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
  <link rel="canonical" href="https://www.enzo-cosson.fr/video/" />
  <title>Portfolio | Vidéo</title>
  <meta name="description" content="Découvrez une sélection de vidéos captivantes dans mon portfolio en ligne. Explorez des univers visuels variés, allant des vidéos de voyage aux vidéos promotionnelles. Laissez-vous inspirer par mes réalisations et découvrez de nouvelles idées pour votre prochain projet vidéo.">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="/img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="/css/styles.css" />
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
  <section class="video_web_page">
    <h1 class="titre">Thématiques</h1>

    <a href="/guadeloupe" class="theme_video">
      <h2 class="theme_titre">GUADELOUPE</h2>
      <img src="/img/video/guadeloupe.webp" class="theme_img" alt="cascade" />
      <video class="guadeloupe_video_hover" autoplay loop muted playsinline>
        <source src="/mp4/hover/guadeloupe_hover.mp4" type="video/mp4" />
      </video>
    </a>
    <a href="/dream-by-kenzo" class="theme_video">
      <h2 class="theme_titre">DREAM BY KENZO</h2>
      <img src="/img/video/kenzo.webp" class="theme_img" alt="packshot pub parfum" />
      <video class="auvergne_video_hover" autoplay loop muted playsinline>
        <source src="/mp4/hover/kenzo_hover.mp4" type="video/mp4" />
      </video>
    </a>
    <a href="/auvergne" class="theme_video">
      <h2 class="theme_titre">AUVERGNE</h2>
      <img src="/img/video/auvergne.webp" class="theme_img" alt="paysage d'auvergne" />
      <video class="auvergne_video_hover" autoplay loop muted playsinline>
        <source src="/mp4/hover/auvergne_hover.mp4" type="video/mp4" />
      </video>
    </a>
  </section>
  <script>
    window.sr = ScrollReveal();

    sr.reveal(".theme_video", {
      duration: 1000,
      origin: "center",
      scale: 0.85,
      reset: true,
    });
  </script>



</body>
<?php require 'footer.php'; ?>
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>


</html>