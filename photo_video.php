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
  <title>Portfolio | Photo & Vidéo</title>
  <meta name="description" content="Découvrez mes réalisations photographiques et vidéographiques dans mon portfolio en ligne. De la photographie de paysage aux portraits en passant par la production vidéo, explorez mon travail créatif et laissez-vous inspirer par mes compétences techniques et artistiques">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="./css/styles.css" />
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
  <section class="photo_video_web_page">
    <div class="container_photo">
      <a class="couverture" href="/photo">
        <h2 class="couverture_titre">PHOTO</h2>
        <img src="./img/photo_video/photo_couverture.webp" alt="couverture de la thématique photo" />
      </a>
    </div>
    <div class="container_video">
      <a class="couverture" href="/video">
        <h2 class="couverture_titre">VIDEO</h2>
        <img src="./img/photo_video/video_couverture2.webp" alt="couverture de la thématique video" />
      </a>
    </div>
  </section>

</body>
<?php require 'footer.php'; ?>
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>

<script type="module" src="./js/app.js"></script>

</html>