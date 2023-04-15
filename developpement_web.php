<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Développement web</title>
  <meta name="description" content="Découvrez mes projets de développement web passionnants dans mon portfolio en ligne. Explorez mes réalisations en matière de conception de sites web.">
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
  <?php
  require 'loader.php';
  require 'container_colors.php';
  require 'feedback.php';
  require 'header.php';
  ?>

  <main>
    <div class="transition_slide"></div>
    <section class="developpement_web_page">
      <div class="myProject">
        <img class="myProject_img_white" src="./img/myProject_absolute.svg" alt="texte de décoration" />
        <img class="myProject_img_black" src="./img/myProject_absolute_black.svg" alt="texte de décoration" />
      </div>

      <div class="home_side_right">
        <p>
          <span class="pages_number pages_number_center">01</span>
          <span class="pages_number pages_number_next">02</span>
          <span class="pages_number pages_number_next">03</span>
          <span class="pages_number pages_number_next">04</span>
          <span class="pages_number pages_number_next">05</span>
          <span class="pages_number pages_number_next">06</span>
          / 06
        </p>
      </div>

      <div class="container_title">
        <h1 class="title title_center title_imovix">IMOVIX</h1>
        <h1 class="title title_next title_book">BOOK</h1>
        <h1 class="title title_next title_dji">SPIDER-JS</h1>
        <h1 class="title title_next title_soda">SCHOOL</h1>
        <h1 class="title title_next title_dior">SODA</h1>
        <h1 class="title title_next title_drugOptimal">ART</h1>
      </div>

      <div class="carrousel_container carrousel_title_stroke_center">
        <div class="container_slider_anim">
          <h2 class="slider">IMOVIXIMOVIXIMOVIXIMOVIX</h2>
          <h2 class="slider">IMOVIXIMOVIXIMOVIXIMOVIX</h2>
        </div>
      </div>

      <div class="carrousel_container carrousel_title_stroke_next">
        <div class="container_slider_anim">
          <h2 class="slider">BOOKBOOKBOOKBOOK</h2>
          <h2 class="slider">BOOKBOOKBOOKBOOK</h2>
        </div>
      </div>

      <div class="carrousel_container carrousel_title_stroke_next">
        <div class="container_slider_anim">
          <h2 class="slider">SPIDERTHREEJSSPIDERTHREEJS</h2>
          <h2 class="slider">SPIDERTHREEJSSPIDERTHREEJS</h2>
        </div>
      </div>

      <div class="carrousel_container carrousel_title_stroke_next">
        <div class="container_slider_anim">
          <h2 class="slider">SCHOOLSCHOOL</h2>
          <h2 class="slider">SCHOOLSCHOOL</h2>
        </div>
      </div>

      <div class="carrousel_container carrousel_title_stroke_next">
        <div class="container_slider_anim">
          <h2 class="slider">SODASODASODASODA</h2>
          <h2 class="slider">SODASODASODASODA</h2>
        </div>
      </div>

      <div class="carrousel_container carrousel_title_stroke_next" _next>
        <div class="container_slider_anim">
          <h2 class="slider">ARTARTARTART</h2>
          <h2 class="slider">ARTARTARTART</h2>
        </div>
      </div>

      <img class="imac imac_center imac_imovix" src="./img/mockup/imac_imovix2.webp" alt="imac sur le site imovix" />
      <img class="imac imac_next imac_book" src="./img/mockup/imac_book.webp" alt="imac sur le site book" />
      <img class="imac imac_next imac_dji" src="./img/mockup/imac_spiderThreeJs.webp" alt="imac sur le site dji" />
      <img class="imac imac_next imac_soda2" src="./img/mockup/school.webp" alt="imac sur le site school" />
      <img class="imac imac_next imac_dior" src="./img/mockup/imac_soda.webp" alt="imac sur le site soda" />
      <img class="imac imac_next imac_drugOptimal" src="./img/mockup/imac_art.webp" alt="imac sur le site art" />

      <div class="description">
        <div class="presentation_site slide">
          <h2 class="is-splited">
            <p>Parcourez mes projets créatifs</p>
          </h2>
        </div>

        <div>
          <small class="techno techno_center techno_imovix"><span>TECHNOLOGIE</span> : HTML, SCSS, JS, PHP</small>
          <small class="techno techno_next techno_book"><span>TECHNOLOGIE</span> : HTML, SCSS, JS</small>
          <small class="techno techno_next techno_dji"><span>TECHNOLOGIE</span> : THREE JS</small>
          <small class="techno techno_next techno_soda"><span>TECHNOLOGIE</span> : HTML, SCSS, JS</small>
          <small class="techno techno_next techno_dior"><span>TECHNOLOGIE</span> : HTML, SCSS</small>
          <small class="techno techno_next techno_drugOptimal"><span>TECHNOLOGIE</span> : HTML, SCSS, JS</small>

          <div class="interaction">
            <button type="button" onclick="goToPrevSlide()" class="prev">
              PRECEDENT
            </button>
            <button type="button" onclick="visiteAnimation(event)" class="visite" data-slide-index="1">
              VISITER
            </button>
            <button type="button" onclick="goToNextSlide()" class="next">
              SUIVANT
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="tous_mes_projets">
      <h2>TOUS MES PROJETS</h2>

      <div class="interaction">
        <button type="button" class="btn_techno btn_tous active" data-filter="Tous">
          TOUS
        </button>

        <button type="button" class="btn_techno btn_html" data-filter="html">
          HTML / CSS / JS
        </button>

        <button type="button" class="btn_techno btn_threejs" data-filter="threejs">
          THREE JS
        </button>

        <button type="button" class="btn_techno btn_php" data-filter="php">
          PHP / MYSQL
        </button>
      </div>

      <div class="container_cards">
        <a href="/imovix">
          <div class="card php">
            <img class="card_img" src="./img/cards/card_imovix.webp" alt="site imovix" />
            <span class="hover_bg"></span>
            <h3>IMOVIX</h3>
          </div>
        </a>
        <a href="/book">
          <div class="card html">
            <img class="card_img" src="./img/cards/cards_book.webp" alt="site book" />
            <span class="hover_bg"></span>
            <h3>BOOK</h3>
          </div>
        </a>
        <a href="/spider-man-threejs">
          <div class="card threejs">
            <img class="card_img" src="./img/cards/spider_js.webp" alt="site spider-man three js" />
            <span class="hover_bg"></span>
            <h3>SPIDER-JS</h3>
          </div>
        </a>
        <a href="/galerie-art">
          <div class="card html">
            <img class="card_img" src="./img/cards/school.webp" alt="site school" />
            <span class="hover_bg"></span>
            <h3>SCHOOL</h3>
          </div>
        </a>
        <a href="/galerie-art">
          <div class="card html">
            <img class="card_img" src="./img/cards/cards_art3.webp" alt="site galerie d'art" />
            <span class="hover_bg"></span>
            <h3>ART</h3>
          </div>
        </a>
        <a href="/custom-air">
          <div class="card html">
            <img class="card_img" src="./img/cards/cards_custom_air.webp" alt="site custom air" />
            <span class="hover_bg"></span>
            <h3>CUSTOM AIR</h3>
          </div>
        </a>
        <!-- <a href="https://mmi21e03.mmi-troyes.fr/tech">
            <div class="card html">
              <img
                class="card_img"
                src="./img/cards/cards_dji.webp"
                alt="site dji"
              />
              <span class="hover_bg"></span>
              <h3>DJI</h3>
            </div>
          </a> -->
        <a href="/soda">
          <div class="card html">
            <img class="card_img" src="./img/cards/cards_soda.webp" alt="site soda" />
            <span class="hover_bg"></span>
            <h3>SODA</h3>
          </div>
        </a>
        <!-- <a href="https://mmi21e03.mmi-troyes.fr/dior">
            <div class="card html">
              <img
                class="card_img"
                src="./img/cards/cards_dior.webp"
                alt="site dior"
              />
              <span class="hover_bg"></span>
              <h3>DIOR</h3>
            </div>
          </a> -->
        <!-- <a href="https://mmi21e03.mmi-troyes.fr/drugOptimal">
            <div class="card html">
              <img
                class="card_img"
                src="./img/cards/cards_drugoptimal.webp"
                alt="site drug optimal"
              />
              <span class="hover_bg"></span>
              <h3>DRUGOPTIMAL</h3>
            </div>
          </a> -->
        <a href="https://mmi21e03.mmi-troyes.fr/flashfood" class="flashfood" target="_blank">
          <div class="card html">
            <img class="card_img" src="./img/cards/cards_flashfood.webp" alt="site flashfood" />
            <span class="hover_bg"></span>
            <h3>FLASHFOOD</h3>
          </div>
        </a>
        <!-- <a href="https://mmi21e03.mmi-troyes.fr/tech">
            <div class="card html">
              <img
                class="card_img"
                src="./img/cards/cards_gopro.webp"
                alt="site gopro"
              />
              <span class="hover_bg"></span>
              <h3>GOPRO</h3>
            </div>
          </a> -->
      </div>
    </section>
    <section class="maj">
      <p>
        Cette section du site sera régulièrement mise à jour au fur et à
        mesure de mes projets en cours.
      </p>
    </section>



  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".btn_techno").click(function() {
        const value = $(this).attr("data-filter");
        if (value == "Tous") {
          $(".card").show("1000");
        } else {
          $(".card")
            .not("." + value)
            .hide("1000");
          $(".card")
            .filter("." + value)
            .show("1000");
        }
      });
    });
  </script>
</body>


<script>
  window.addEventListener("load", function() {
    document.body.classList.add("body_loaded");
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php require 'footer.php'; ?>
<script src="./js/filter.js"></script>
<script src="./js/dev_scrollreveal.js"></script>
<!-- --------------page-script------------------ -->

<script>
  const prev = document.querySelector(".prev");
  const next = document.querySelector(".next");
  const visite = document.querySelector(".visite");

  const imac = document.querySelectorAll(".imac");
  const title = document.querySelectorAll(".container_title .title");
  const techno = document.querySelectorAll(".techno");
  const pages_number = document.querySelectorAll(".pages_number");
  const carrousel_container = document.querySelectorAll(".carrousel_container");

  // -----------------------------
  let currentSlideIndex = 1;

  function goToPrevSlide() {
    updateSlideIndex(currentSlideIndex - 1);
    currentSlideIndex--;
  }

  function goToNextSlide() {
    updateSlideIndex(currentSlideIndex + 1);
    currentSlideIndex++;
  }


  function updateSlideIndex(index) {
    const visitButton = document.querySelector(".visite");
    visitButton.setAttribute("data-slide-index", index);
  }

  let timeline = 0;
  var numImac = imac.length;
  console.log(title[timeline]);
  next.addEventListener("click", () => {
    next.disabled = true;

    setTimeout(function() {
      next.disabled = false;
    }, 1000);

    if (timeline < numImac - 1) {
      timeline++;
      prev.disabled = false;
    } else {
      next.disabled = true;
    }

    if (timeline >= 0) {

      title[timeline - 1].classList.add("title_prev");
      title[timeline - 1].classList.remove("title_next");
      title[timeline].classList.add("title_center");

      imac[timeline - 1].classList.add("imac_prev");
      imac[timeline - 1].classList.remove("imac_next");
      imac[timeline].classList.add("imac_center");

      techno[timeline - 1].classList.add("techno_prev");
      techno[timeline - 1].classList.remove("techno_next");
      techno[timeline].classList.add("techno_center");

      pages_number[timeline - 1].classList.add("pages_number_prev");
      pages_number[timeline - 1].classList.remove("pages_number_next");
      pages_number[timeline].classList.add("pages_number_center");

      carrousel_container[timeline - 1].classList.add(
        "carrousel_title_stroke_prev"
      );
      carrousel_container[timeline - 1].classList.remove(
        "carrousel_title_stroke_next"
      );
      carrousel_container[timeline].classList.add(
        "carrousel_title_stroke_center"
      );
    }
  });


  prev.addEventListener("click", () => {
    prev.disabled = true;

    setTimeout(function() {
      prev.disabled = false;
    }, 1000);

    if (timeline > 0) {
      timeline--;
      next.disabled = false;
      imac[timeline].classList.remove("imac_prev");
      imac[timeline].classList.add("imac_next");
      imac[timeline + 1].classList.remove("imac_center");
      imac[timeline + 1].classList.add("imac_next");

      title[timeline].classList.remove("title_prev");
      title[timeline].classList.add("title_next");
      title[timeline + 1].classList.remove("title_center");
      title[timeline + 1].classList.add("title_next");

      techno[timeline].classList.remove("techno_prev");
      techno[timeline].classList.add("techno_next");
      techno[timeline + 1].classList.remove("techno_center");
      techno[timeline + 1].classList.add("techno_next");

      pages_number[timeline].classList.remove("pages_number_prev");
      pages_number[timeline].classList.add("pages_number_next");
      pages_number[timeline + 1].classList.remove("pages_number_center");
      pages_number[timeline + 1].classList.add("pages_number_next");

      carrousel_container[timeline].classList.remove(
        "carrousel_title_stroke_prev"
      );
      carrousel_container[timeline].classList.add(
        "carrousel_title_stroke_next"
      );
      carrousel_container[timeline + 1].classList.remove(
        "carrousel_title_stroke_center"
      );
      carrousel_container[timeline + 1].classList.add(
        "carrousel_title_stroke_next"
      );
    } else {
      prev.disabled = true;
    }
  });



  function visiteAnimation(event) {
    const button = event.target;
    const slideIndex = button.getAttribute("data-slide-index");
    const header = document.querySelector(".header");
    const imacs = document.querySelectorAll(".imac");
    home_footer = document.querySelector(".home_footer");

    header.classList.add("header_active_visited");
    home_footer.classList.add("home_footer_active_visited");

    const transitionSlide = document.querySelector(".transition_slide");
    setTimeout(function() {
      transitionSlide.classList.add("transition_slide_active");
    }, 200);

    for (let i = 0; i < imacs.length; i++) {
      if (imacs[i].classList.contains("imac_center")) {
        imacs[i].classList.add("imac_center_active");
      }
    }

    let url = "";
    if (slideIndex === "1") {
      url = "/imovix";
    } else if (slideIndex === "2") {
      url = "/book";
    } else if (slideIndex === "3") {
      url = "/spider-man-threejs";
    } else if (slideIndex === "4") {
      url = "/school";
    } else if (slideIndex === "5") {
      url = "/soda";
    } else if (slideIndex === "6") {
      url = "/art";
    } else if (slideIndex === "7") {
      url = "flashfood.html";
    } else if (slideIndex === "8") {
      url = "gopro.html";
    }

    setTimeout(function() {
      window.location = url;
    }, 1500);
  }
  // -----------------------------
</script>

</html>