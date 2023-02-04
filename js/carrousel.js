export function carrousel() {
  const prev = document.querySelector(".prev");
  const next = document.querySelector(".next");
  const visite = document.querySelector(".visite");

  const imac_imovix = document.querySelector(".imac_imovix");
  const imac_book = document.querySelector(".imac_book");
  const imac_dji = document.querySelector(".imac_dji");
  const imac_soda = document.querySelector(".imac_soda");
  const imac_dior = document.querySelector(".imac_dior");
  const imac_drugOptimal = document.querySelector(".imac_drugOptimal");
  const imac_flashFood = document.querySelector(".imac_flashFood");
  const imac_gopro = document.querySelector(".imac_gopro");

  const imac = document.querySelectorAll(".imac");
  const title = document.querySelectorAll(".title");
  const techno = document.querySelectorAll(".techno");
  const pages_number = document.querySelectorAll(".pages_number");
  const carrousel_container = document.querySelectorAll(".carrousel_container");

  // carrousel infinite

  let timeline = 0;
  var numImac = imac.length;
  var numTitle = title.length;
  var numTechno = techno.length;
  var numPages_number = pages_number.length;
  var numSlider = carrousel_container.length;

  next.addEventListener("click", () => {
    next.disabled = true;

    setTimeout(function () {
      next.disabled = false;
    }, 1000);

    if (timeline < numImac - 1) {
      timeline++;
      prev.disabled = false;
      imac[timeline - 1].classList.add("imac_prev");
      imac[timeline - 1].classList.remove("imac_next");
      imac[timeline].classList.add("imac_center");

      title[timeline - 1].classList.add("title_prev");
      title[timeline - 1].classList.remove("title_next");
      title[timeline].classList.add("title_center");

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
    } else {
      next.disabled = true;
    }
  });

  prev.addEventListener("click", () => {
    prev.disabled = true;

    setTimeout(function () {
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
}
