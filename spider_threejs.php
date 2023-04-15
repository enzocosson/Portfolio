<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Site - Spider-Man Three Js</title>
  <meta name="description" content="Je suis fier de vous présenter mon dernier projet, un site web entièrement développé en utilisant la technologie Three Js et inspiré du célèbre personnage de Spider-Man.">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <div class="cursor_follow"></div>
  <?php require 'loader.php'; ?>

  <div class="transition_slide_enter"></div>

  <?php require 'container_colors.php'; ?>

  <?php require 'feedback.php'; ?>

  <?php require 'header.php'; ?>

  <main>
    <section class="presentation_site">
      <h1 class="bg_title">SPIDER</h1>
      <img class="imac" src="./img/mockup/imac_spiderThreeJs.webp" alt="imac avec le site spider-man threejs" />

      <a class="bdd_redirection_top" href="https://mmi21e03.mmi-troyes.fr/threejs_spiderman/" target="_blank">Y accéder</a>
    </section>

    <div class="more_info">
      <h1>ANIMATION THREE JS</h1>
      <div class="green_rect"></div>
      <img src="./img/falling.png" alt="spiderman_falling" class="falling" />
      <div class="description_soda">
        <h2 class="more_info_titre">POURQUOI CE SITE ?</h2>
        <p class="description_paragraphe">
          J'avais depuis longtemps envie de commencer à utiliser Three js et
          je me suis donc lancé le défi de recréer une scène d'un film que
          j'adore (Spider-Man: Into the Spider-Verse), où Spider-Man tombe dû
          ciel avec les buildings en arrière-plan.
        </p>
      </div>
      <img src="./img/canette.png" alt="canette" class="canette_illu" />
      <div class="white_circle_bottom">
        <h2 class="front_end_title">UI</h2>
      </div>
      <div class="rect1"></div>
      <div class="rect2">
        <h2>UX</h2>
      </div>
    </div>

    <div class="bdd">
      <div class="container_illu">
        <div class="frontground"></div>

        <video class="imovix_catalogue" autoplay muted loop>
          <source src="./mp4/demo_spiderThreeJs.mp4" type="video/mp4" />
        </video>

        <div class="title">
          <h2 class="titre_bdd">DEMO</h2>
        </div>
      </div>

      <h2 class="titre_bdd_bg">DEMONSTRATION</h2>
    </div>

    <div class="bdd_more">
      <p class="bdd_text">
        "De mon point de vue, Three js représente l'avenir car c'est une
        bibliothèque Javascript open source qui facilite la création
        d'animations 3D et d'effets visuels sur le web. Ce genre d'effet
        visuel est de plus en plus tendance et demandé.”
      </p>
      <a class="bdd_redirection" href="https://mmi21e03.mmi-troyes.fr/threejs_spiderman/" target="_blank">Y accéder</a>
    </div>

    <div class="container_autres_sites">
      <div class="autres_sites_title">
        <h1>Autres Projets</h1>
      </div>
      <div class="autres_sites">
        <a href="/imovix" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/card_imovix.png" alt="site imovix" />
        </a>

        <a href="/book" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/cards_book.png" alt="site book" />
        </a>

        <a href="/school" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/school.png" alt="site school" />
        </a>

        <a href="/galerie-art" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/cards_art.png" alt="site de galerie d'art" />
        </a>

        <a href="/custom-air" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/cards_custom_air.png" alt="site custom air" />
        </a>

        <!-- <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="./img/cards/cards_dji.png"
              alt="site dji"
            />
          </a> -->

        <a href="/soda" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/cards_soda.png" alt="site soda" />
        </a>

        <!--    <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="./img/cards/cards_dior.png"
              alt="site dior"
            />
          </a> -->

        <!--   <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="./img/cards/cards_drugoptimal.png"
              alt="site drug optimal"
            />
          </a> -->

        <a href="" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="./img/cards/cards_flashfood.png" alt="site flashfood" />
        </a>

        <!--   <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="./img/cards/cards_gopro.png"
              alt="site gopro"
            />
          </a> -->
      </div>
    </div>

    <!-- ----------------------footer--------------------- -->




  </main>
</body>
<?php require 'footer.php'; ?>
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

<script src="./js/scrollMagicSpider.js"></script>

</html>