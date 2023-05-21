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
  <link rel="canonical" href="https://www.enzo-cosson.fr/imovix/" />
  <title>Portfolio | Site - imovix</title>
  <meta name="description" content="Je suis fier de présenter mon projet de site de streaming fictif Imovix. Découvrez une expérience immersive et passionnante de streaming vidéo en ligne, avec une interface utilisateur élégante et facile à naviguer.">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="/img/favicon/site.webmanifest" />
  <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#00aba9" />
  <meta name="theme-color" content="#ffffff" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="/css/styles.css" />
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
  <?php require 'loader.php'; ?>

  <div class="transition_slide_enter"></div>

  <?php require 'container_colors.php'; ?>

  <?php require 'feedback.php'; ?>

  <?php require 'header.php'; ?>

  <main>
    <section class="presentation_site" data-namespace="imovix">
      <h1 class="bg_title">IMOVIX</h1>
      <img class="imac" src="/img/mockup/imac_imovix2.webp" alt="imac sur le site imovix" />

      <a class="bdd_redirection_top" href="https://mmi21e03.mmi-troyes.fr/imovix/" target="_blank">Y accéder</a>
    </section>

    <div class="more_info">
      <h1>SITE DE STREAMING</h1>
      <div class="green_rect"></div>
      <img src="/img/mockup/ipad_spiderman.webp" alt="ipad sur le site imovix" class="mockup_spiderman" />
      <div class="description">
        <h2 class="more_info_titre">POURQUOI CE SITE ?</h2>
        <p class="description_paragraphe">
          J'ai réalisé ce site de "streaming", ou plutût une librairie de
          divers films pour améliorer mes compétences en Développement web.
          J'ai alors utilisé HTML, CSS, Javascript, PHP et MySQL pour créer un
          site complet avec une interface conviviale pour les utilisateurs.
        </p>
      </div>
      <img src="/img/spiderman2.png" alt="spiderman_cartoon" class="spiderman_illu" />
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
        <!-- <p class="paragraphe_bdd">
            Gestion d’une base de donnée sql pour la bibliothèque, affichage,
            ajout a la liste, suppression de la liste.
          </p> -->

        <video class="imovix_catalogue" autoplay muted loop>
          <source src="/mp4/demo_imovix.mp4" type="video/mp4" />
        </video>

        <div class="title">
          <h2 class="titre_bdd">DEMO</h2>
        </div>
      </div>

      <h2 class="titre_bdd_bg">DEMONSTRATION</h2>
    </div>

    <div class="bdd_more">
      <p class="bdd_text">
        "Ce projet m'a permis de progresser de manière significative dans
        plusieurs domaines que ce soit en front-end, en back-end ou encore en
        développant mes compétences en matière de design.”
      </p>
      <a class="bdd_redirection" href="https://mmi21e03.mmi-troyes.fr/imovix/" target="_blank">Y accéder</a>
    </div>

    <div class="container_autres_sites">
      <div class="autres_sites_title">
        <h1>Autres Projets</h1>
      </div>
      <div class="autres_sites">
        <a href="/book" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/cards_book.png" alt="site book" />
        </a>

        <a href="/spider-man-threejs" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/spider_js.png" alt="site spider-man three js" />
        </a>

        <a href="/school" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/school.png" alt="site school" />
        </a>

        <a href="/galerie-art" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/cards_art.png" alt="site de galerie d'art" />
        </a>

        <a href="/custom-air" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/cards_custom_air.png" alt="site custom air" />
        </a>

        <!--  <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="/img/cards/cards_dji.png"
              alt="site dji"
            />
          </a> -->

        <a href="/soda" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/cards_soda.png" alt="site soda" />
        </a>

        <!--    <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="/img/cards/cards_dior.png"
              alt="site dior"
            />
          </a> -->

        <!--   <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="/img/cards/cards_drugoptimal.png"
              alt="site drug optimal"
            />
          </a> -->

        <a href="" class="autres_sites_cards">
          <img class="autres_sites_cards_img" src="/img/cards/cards_flashfood.png" alt="site flashfood" />
        </a>

        <!--   <a href="" class="autres_sites_cards">
            <img
              class="autres_sites_cards_img"
              src="/img/cards/cards_gopro.png"
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

<script src="/js/scrollMagicImovix.js"></script>

</html>