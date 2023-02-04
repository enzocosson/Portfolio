import { initBarba } from "./barba.js";
import { loader } from "./loader.js";
import { initScrollMagic } from "./libScrollMagic.js";
import { carrousel } from "./carrousel.js";
import { filter } from "./filter.js";
import { devScrollReveal } from "./dev_scrollreveal.js";
import { darkModeIndex } from "./darkMode.js";
import { darkModeDev } from "./darkMode.js";

function getURL() {
  return console.log(window.location.href);
}

var url = window.location.href;

getURL();

switch (url) {
  case "http://192.168.1.70:5500/":
    loader();
    darkModeIndex();
    // initBarba();
    initScrollMagic();
    break;
  case "http://192.168.1.70:5500/index.html":
    loader();
    darkModeIndex();
    // initBarba();
    initScrollMagic();
    break;
  case "https://www.enzo-cosson.fr/index.html":
    loader();
    darkModeIndex();
    // initBarba();
    initScrollMagic();
    break;
  case "http://192.168.1.70:5500/developpement_web.html":
    // initBarba();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    break;
  case "https://www.enzo-cosson.fr/developpement_web.html":
    // initBarba();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    break;

  default:
    console.log("erreur d'url");
    break;
}