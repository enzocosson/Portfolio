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

// carrousel infinite

let timeline = 0;
var numImac = imac.length;
var numTitle = title.length;
var numTechno = techno.length;

next.addEventListener("click", () => {
  next.disabled = true;

  setTimeout(function () {
    next.disabled = false;
  }, 1000);

  if (timeline < numImac - 1) {
    timeline++;
    console.log(timeline);
    console.log([title[timeline - 1]]);
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
    console.log(timeline);
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
  } else {
    prev.disabled = true;
  }
});
