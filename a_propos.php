<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | À Propos</title>
  <meta name="description" content="Découvrez qui se cache derrière le portfolio en ligne d'Enzo Cosson. Avec une passion pour la conception créative, l'art et la programmation, Enzo Cosson vous présente son parcours et ses compétences en tant qu'artiste multidisciplinaire. Explorez cette page pour en savoir plus sur son histoire, ses projets et sa philosophie de création.">
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
  <div class="cursor_follow"></div>
  <?php
  require 'loader.php';
  require 'container_colors.php';
  require 'feedback.php';
  require 'header.php';
  ?>

  <section class="a_propos_web_page">
    <span class="circle">
      <h1 class="title_back">A PROPOS</h1>
      <img class="pp" src="./img/a_propos/me.png" alt="photo de profil d'Enzo Cosson" />
      <h1 class="title_front">A PROPOS</h1>
    </span>
    <a href="#presentation" class="home_arrow"></a>
  </section>
  <section class="presentation" id="presentation">
    <p class="presentation_texte">
      Bonjour à tous, je m'appelle <span class="selection">Enzo Cosson</span>,
      j'ai 20 ans et je suis étudiant en BUT MMI à l'IUT de Troyes. Depuis
      plusieurs années, je suis passionné par le
      <span class="selection">Développement web</span>, plus particulièrement
      le
      <span class="selection">développement front-end et le web design</span>.
      J'aime travailler sur l'esthétique et l'ergonomie des sites web pour
      créer une expérience utilisateur optimale. En parallèle, j'ai une
      deuxième passion qui est la
      <span class="selection">photographie et la vidéo</span>. Je suis fasciné
      par la manière dont les images peuvent raconter des histoires et
      capturer des moments inoubliables.<br /><br />
      À travers ce site, je souhaite partager mes
      <span class="selection">créations</span> et mes
      <span class="selection">compétences</span>. Je suis constamment à la
      recherche de nouveaux projets et de nouvelles collaborations, alors
      n'hésitez pas à me contacter pour discuter de vos idées. <br /><br />
      <span class="selection">Merci</span> de votre visite et j'espère que
      vous apprécierez mes travaux autant que j'ai aimé les créer.
    </p>
  </section>



</body>
<?php require 'footer.php'; ?>
<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>
<script>
  window.sr = ScrollReveal();

  sr.reveal(".selection", {
    interval: 100,
    duration: 1500,
    origin: "bottom",
    distance: "50px",
  });
</script>
<script>
  const pp = document.querySelector(".pp");
  const title_back = document.querySelector(".title_back");
  const title_front = document.querySelector(".title_front");
  const circle = document.querySelector(".circle");

  const centerX = window.innerWidth / 2;
  const centerY = window.innerHeight / 2;

  document.addEventListener("mousemove", (e) => {
    let moveX = e.clientX - centerX;
    let moveY = e.clientY - centerY;

    pp.style.top = `${45 + moveY * 0.001}%`;
    pp.style.left = `${50 + moveX * 0.001}%`;

    title_back.style.top = `${75 + moveY * 0.005}%`;
    title_back.style.left = `${50 + moveX * 0.005}%`;

    title_front.style.top = `${75 + moveY * 0.005}%`;
    title_front.style.left = `${50 + moveX * 0.005}%`;

    circle.style.top = `${50 + moveY * 0.0005}%`;
    circle.style.left = `${50 + moveX * 0.0005}%`;
  });
</script>


</html>