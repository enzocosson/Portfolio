<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Photo</title>
  <meta name="description" content="Plongez dans l'univers de mes photographies et explorez une variété de sujets captivants, allant de la nature à l'architecture en passant par les portraits. Découvrez mon style artistique unique et laissez-vous transporter dans des moments figés à travers mes photographies.">
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

<body>
  <div class="cursor_follow"></div>
  <?php
  require 'loader.php';
  require 'container_colors.php';
  require 'feedback.php';
  require 'header.php';
  ?>
  <section class="photo_web_page">
    <h1 class="titre">Thématiques</h1>

    <a href="/mountain" class="theme">
      <h2 class="theme_titre">MOUNTAIN</h2>
      <img src="./img/photo/theme/resize/mountain.webp" class="theme_img mountain" alt="couverture de la thématique mountain" />
    </a>
    <a href="/tropical" class="theme">
      <h2 class="theme_titre">TROPICAL</h2>
      <img src="./img/photo/theme/resize/waterwall.webp" class="theme_img tropical" alt="couverture de la thématique tropical" />
    </a>
    <a href="/gold" class="theme">
      <h2 class="theme_titre">GOLD</h2>
      <img src="./img/photo/theme/resize/gold.webp" class="theme_img" alt="couverture de la thématique gold" />
    </a>
    <a href="/by-night" class="theme">
      <h2 class="theme_titre">BY NIGHT</h2>
      <img src="./img/photo/theme/resize/stars.webp" class="theme_img" alt="couverture de la thématique by night" />
    </a>
  </section>

  <script>
    window.sr = ScrollReveal();

    sr.reveal(".theme", {
      duration: 1000,
      origin: "center",
      scale: 0.85,
      reset: true,
    });
  </script>


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