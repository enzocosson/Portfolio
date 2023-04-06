<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Photo & Vidéo</title>
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