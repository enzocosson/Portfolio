<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Photo - My Dog</title>
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

  <section class="galerie_web_page">
    <h1>My Dog</h1>

    <div class="container_galerie_top">
      <div class="galerie_first">
        <div class="col col1">
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
        </div>

        <div class="col col2">
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
        </div>

        <div class="col col3">
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
        </div>

        <div class="col col4">
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
          <div class="container_img">
            <img class="miniatures" src="./img/photo/" alt="" />
          </div>
        </div>
      </div>
      <p class="texte_galerie">
        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
        voluptates veritatis ipsam quisquam aspernatur. Repudiandae labore
        ullam maiores aspernatur accusantium!"
      </p>
      <div class="galerie_large">
        <div class="container_img_100">
          <img src="./img/photo/" alt="" class="miniatures" />
        </div>

        <div class="container_img_flex">
          <div class="container_img_50">
            <img src="./img/photo/" alt="" class="miniatures" />
          </div>
          <div class="container_img_50">
            <img src="./img/photo/" alt="" class="miniatures" />
          </div>
        </div>

        <div class="container_img_100">
          <img src="./img/photo/" alt="" class="miniatures" />
        </div>
      </div>

      <p class="texte_galerie2">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores
        quia facere distinctio expedita corporis, nam consectetur pariatur
        exercitationem tempore
      </p>
    </div>

    <div class="container_slider_galerie">
      <h1 class="travel_back">TRAVEL</h1>
      <div class="slider_galerie_top">
        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>
      </div>

      <div class="slider_galerie_bottom">
        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>

        <div class="container_img">
          <img class="miniatures_slider" src="./img/photo/" alt="" />
        </div>
      </div>
      <h1 class="travel_front">TRAVEL</h1>
    </div>

    <div class="container_galerie_bottom">
      <div class="container_img">
        <img src="./img/photo/" alt="" class="miniatures" />
      </div>
    </div>

    <div class="autres_projets">
      <h2>Autres Projets</h2>

      <div class="suggestion">
        <div class="suggestion_top">
          <a href="/mountain" class="container_miniatures">
            <h3 class="titre_minia">MOUNTAIN</h3>
            <img src="./img/photo/theme/resize75/mountain.png" alt="paysage de montagne" class="miniatures" />
          </a>
          <a href="/tropical" class="container_miniatures">
            <h3 class="titre_minia">TROPICAL</h3>
            <img src="./img/photo/theme/resize75/waterwall.jpg" alt="paysage tropical" class="miniatures" />
          </a>
        </div>

        <div class="suggestion_bottom">
          <a href="/gold" class="container_miniatures">
            <h3 class="titre_minia">GOLD</h3>
            <img src="./img/photo/theme/resize75/gold.jpg" alt="couché de soleil avec un jeune dans la forêt" class="miniatures" />
          </a>
          <a href="/by-night" class="container_miniatures">
            <h3 class="titre_minia">BY NIGHT</h3>
            <img src="./img/photo/theme/resize75/stars.jpg" alt="ciel étoilé sous un palmier" class="miniatures" />
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
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/BezierPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js" integrity="sha512-ht40uOoiTef4nKq0THVzjIGh3VS108J577LVVgNXnQLXza3doXjoM3owin2vd+Hm6w88k12RIrePIVY2WNzz6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js" integrity="sha512-8Wy4KH0O+AuzjMm1w5QfZ5j5/y8Q/kcUktK9mPUVaUoBvh3QPUZB822W/vy7ULqri3yR8daH3F58+Y8Z08qzeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js" integrity="sha512-lJDBw/vKlGO8aIZB8/6CY4lV+EMAL3qzViHid6wXjH/uDrqUl+uvfCROHXAEL0T/bgdAQHSuE68vRlcFHUdrUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js" integrity="sha512-RvUydNGlqYJapy0t4AH8hDv/It+zKsv4wOQGb+iOnEfa6NnF2fzjXgRy+FDjSpMfC3sjokNUzsfYZaZ8QAwIxg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js" integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/generateColor.js"></script>
<script src="./js/feedback.js"></script>
<script type="module" src="./js/app.js"></script>

</html>