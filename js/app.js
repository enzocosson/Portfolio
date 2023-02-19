import { initBarba } from "./barba.js";
import { loader } from "./loader.js";
import { initScrollMagic } from "./libScrollMagic.js";
import { carrousel } from "./carrousel.js";
import { filter } from "./filter.js";
import { devScrollReveal } from "./dev_scrollreveal.js";
import { darkModeIndex, darkModeSiteContact, darkModeGalerie } from "./darkMode.js";
import { darkModeDev } from "./darkMode.js";
import { darkModeSite } from "./darkMode.js";
import { scrollMagicImovix } from "./scrollMagicImovix.js";
import { scrollMagicBook } from "./scrollMagicBook.js";
import { scrollMagicSoda } from "./scrollMagicSoda.js";
import { scrollMagicArt } from "./scrollMagicArt.js";
import { scrollMagicSpider } from "./scrollMagicSpider.js";
import { scrollMagicCustomAir } from "./scrollMagicCustomAir.js";
import { scrollMagicSchool } from "./scrollMagicSchool.js";
import { scrollMagicGalerie } from "./scrollMagicGalerie.js";

function getURL() {
  return console.log(window.location.href);
}

var url = window.location.href;

getURL();

switch (url) {
  case "http://192.168.1.70:5500/":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
  case "http://192.168.1.70:5500/index.html":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
  case "http://10.152.22.39:5500/":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
  case "http://10.152.22.39:5500/index.html":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
    case "http://192.168.1.77:5500/":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
  case "http://192.168.1.77:5500/index.html":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
  case "https://www.enzo-cosson.fr/index.html":
    loader();
    darkModeIndex();
    initScrollMagic();
    break;
  // -----------
  case "http://192.168.1.70:5500/developpement_web.html":
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    break;
  case "http://10.152.22.39:5500/developpement_web.html":
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    break;
     case "http://192.168.1.77:5500/developpement_web.html":
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    break;
  case "https://www.enzo-cosson.fr/developpement_web.html":
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    break;
                       // -----------
  case "http://192.168.1.70:5500/photo_video.html":
    darkModeSite();
    break;
  case "http://10.152.22.39:5500/photo_video.html":
    darkModeSite();
    break;
     case "http://192.168.1.77:5500/photo_video.html":
    darkModeSite();
    break;
  case "https://www.enzo-cosson.fr/photo_video.html":
    darkModeSite();
    break;

                         // -----------
  case "http://192.168.1.70:5500/photo.html":
    darkModeSite();
    break;
  case "http://10.152.22.39:5500/photo.html":
    darkModeSite();
    break;
     case "http://192.168.1.77:5500/photo.html":
    darkModeSite();
    break;
  case "https://www.enzo-cosson.fr/photo.html":
    darkModeSite();
    break;

                             // -----------
  case "http://192.168.1.70:5500/mountain.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
  case "http://10.152.22.39:5500/mountain.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
     case "http://192.168.1.77:5500/mountain.html":
      darkModeGalerie();
      scrollMagicGalerie();
    break;
  case "https://www.enzo-cosson.fr/mountain.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;

                                 // -----------
  case "http://192.168.1.70:5500/tropical.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
  case "http://10.152.22.39:5500/tropical.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
     case "http://192.168.1.77:5500/tropical.html":
      darkModeGalerie();
      scrollMagicGalerie();
    break;
  case "https://www.enzo-cosson.fr/tropical.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;

                                 // -----------
  case "http://192.168.1.70:5500/golden_hour.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
  case "http://10.152.22.39:5500/golden_hour.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
     case "http://192.168.1.77:5500/golden_hour.html":
      darkModeGalerie();
      scrollMagicGalerie();
    break;
  case "https://www.enzo-cosson.fr/golden_hour.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;

                                 // -----------
  case "http://192.168.1.70:5500/by_night.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
  case "http://10.152.22.39:5500/by_night.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
     case "http://192.168.1.77:5500/by_night.html":
      darkModeGalerie();
      scrollMagicGalerie();
    break;
  case "https://www.enzo-cosson.fr/by_night.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;

    // -----------
    case "http://192.168.1.70:5500/my_dog.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
  case "http://10.152.22.39:5500/my_dog.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
      case "http://192.168.1.77:5500/my_dog.html":
      darkModeGalerie();
      scrollMagicGalerie();
    break;
  case "https://www.enzo-cosson.fr/my_dog.html":
    darkModeGalerie();
    scrollMagicGalerie();
    break;
                              

                         // -----------
  case "http://192.168.1.70:5500/video.html":
    darkModeSite();
    break;
  case "http://10.152.22.39:5500/video.html":
    darkModeSite();
    break;
     case "http://192.168.1.77:5500/video.html":
    darkModeSite();
    break;
  case "https://www.enzo-cosson.fr/video.html":
    darkModeSite();
    break;
                   // -----------
  case "http://192.168.1.70:5500/a_propos.html":
    darkModeSite();
    break;
  case "http://10.152.22.39:5500/a_propos.html":
    darkModeSite();
    break;
     case "http://192.168.1.77:5500/a_propos.html":
    darkModeSite();
    break;
  case "https://www.enzo-cosson.fr/a_propos.html":
    darkModeSite();
    break;

                       // -----------
  case "http://192.168.1.70:5500/contact.html":
    darkModeSiteContact();
    break;
  case "http://10.152.22.39:5500/contact.html":
    darkModeSiteContact();
    break;
     case "http://192.168.1.77:5500/contact.html":
    darkModeSiteContact();
    break;
  case "https://www.enzo-cosson.fr/contact.html":
    darkModeSiteContact();
    break;

  // -----------
  case "http://192.168.1.70:5500/imovix.html":
    darkModeSite();
    scrollMagicImovix();
    break;
  case "http://10.152.22.39:5500/imovix.html":
    darkModeSite();
    scrollMagicImovix();
    break;
     case "http://192.168.1.77:5500/imovix.html":
    darkModeSite();
    scrollMagicImovix();
    break;
  case "https://www.enzo-cosson.fr/imovix.html":
    darkModeSite();
    scrollMagicImovix();
    break;

      // -----------
  case "http://192.168.1.70:5500/book.html":
    darkModeSite();
    scrollMagicBook();
    break;
  case "http://10.152.22.39:5500/book.html":
    darkModeSite();
    scrollMagicBook();
    break;
     case "http://192.168.1.77:5500/book.html":
    darkModeSite();
    scrollMagicBook();
    break;
  case "https://www.enzo-cosson.fr/book.html":
    darkModeSite();
    scrollMagicBook();
    break;

    
      // -----------
  case "http://192.168.1.70:5500/soda.html":
    darkModeSite();
    scrollMagicSoda();
    break;
  case "http://10.152.22.39:5500/soda.html":
    darkModeSite();
    scrollMagicSoda();
    break;
     case "http://192.168.1.77:5500/soda.html":
    darkModeSite();
    scrollMagicSoda();
    break;
  case "https://www.enzo-cosson.fr/soda.html":
    darkModeSite();
    scrollMagicSoda();
    break;

        
      // -----------
  case "http://192.168.1.70:5500/art.html":
    darkModeSite();
    scrollMagicArt();
    break;
  case "http://10.152.22.39:5500/art.html":
    darkModeSite();
    scrollMagicArt();
    break;
     case "http://192.168.1.77:5500/art.html":
    darkModeSite();
    scrollMagicArt();
    break;
  case "https://www.enzo-cosson.fr/art.html":
    darkModeSite();
    scrollMagicArt();
    break;

       // -----------
  case "http://192.168.1.70:5500/spider_threejs.html":
    darkModeSite();
    scrollMagicSpider();
    break;
  case "http://10.152.22.39:5500/spider_threejs.html":
    darkModeSite();
    scrollMagicSpider();
    break;
     case "http://192.168.1.77:5500/spider_threejs.html":
    darkModeSite();
    scrollMagicSpider();
    break;
  case "https://www.enzo-cosson.fr/spider_threejs.html":
    darkModeSite();
    scrollMagicSpider();
    break;

           // -----------
  case "http://192.168.1.70:5500/custom_air.html":
    darkModeSite();
    scrollMagicCustomAir();
    break;
  case "http://10.152.22.39:5500/custom_air.html":
    darkModeSite();
    scrollMagicCustomAir();
    break;
     case "http://192.168.1.77:5500/custom_air.html":
    darkModeSite();
    scrollMagicCustomAir();
    break;
  case "https://www.enzo-cosson.fr/custom_air.html":
    darkModeSite();
    scrollMagicCustomAir();
    break;

               // -----------
  case "http://192.168.1.70:5500/school.html":
    darkModeSite();
    scrollMagicSchool();
    break;
  case "http://10.152.22.39:5500/school.html":
    darkModeSite();
    scrollMagicSchool();
    break;
     case "http://192.168.1.77:5500/school.html":
    darkModeSite();
    scrollMagicSchool();
    break;
  case "https://www.enzo-cosson.fr/school.html":
    darkModeSite();
    scrollMagicSchool();
    break;



  default:
    console.log("erreur d'url");
    break;
}
