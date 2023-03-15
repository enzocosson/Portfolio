import { loader } from "./loader.js";
import { initScrollMagic } from "./libScrollMagic.js";
import { carrousel } from "./carrousel.js";
import { filter } from "./filter.js";
import { devScrollReveal } from "./dev_scrollreveal.js";
import {
  darkModeIndex,
  darkModeSiteContact,
  darkModeGalerie,
} from "./darkMode.js";
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
import { cursorFollow } from "./cursorFollow.js";
import { burgerMenuToggle, burgerMenuBlackToggle } from "./burgerMenu.js";
import {
  onPlayButtonVideoGuadeloupe,
  onPlayButtonVideoAuvergne,
  onPlayButtonVideoKenzo,
} from "./onPlayButtonVideo.js";
import {
  soundButtonTropical,
  soundButtonMountain,
  soundButtonNight,
} from "./soundButton.js";
import { infoPhoto } from "./infoPhoto.js";
import { transitionPages } from "./transitionPages.js";

function getURL() {
  return console.log(window.location.href);
}

var url = window.location.href;

getURL();

switch (url) {
  case "https://www.enzo-cosson.fr/":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/#works":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/#rth":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.75:5500/index.html#works":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  case "http://192.168.1.77:5500/":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/index.html":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/index.html#works":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/index.html#rth":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/index.html":
    loader();
    darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------

  case "http://192.168.1.75:5500/developpement_web.html":
    loader();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/developpement_web.html":
    loader();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/developpement_web.html":
    loader();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/developpement_web.html":
    loader();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/developpement_web.html#rth":
    loader();
    darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/photo_video.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/photo_video.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/photo_video.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo_video.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo_video.html#rth":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/photo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/photo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/photo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo.html#rth":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;

  // -----------
  // case "http://192.168.1.75:5500/mountain.php":
  //   loader();
  //   darkModeGalerie();
  //   scrollMagicGalerie();
  //   cursorFollow();
  //   burgerMenuToggle();
  //   soundButtonMountain();
  //   infoPhoto();
  //   transitionPages();

  //   break;
  // case "http://10.152.21.50:5500/mountain.php":
  //   loader();
  //   darkModeGalerie();
  //   scrollMagicGalerie();
  //   cursorFollow();
  //   burgerMenuBlackToggle();
  //   soundButtonMountain();
  //   infoPhoto();
  //   transitionPages();

  //   break;
  // case "http://192.168.1.77:5500/mountain.php":
  //   loader();
  //   darkModeGalerie();
  //   scrollMagicGalerie();
  //   cursorFollow();
  //   burgerMenuBlackToggle();
  //   soundButtonMountain();
  //   infoPhoto();
  //   transitionPages();

  //   break;
  // case "https://www.enzo-cosson.fr/mountain.php":
  //   loader();
  //   darkModeGalerie();
  //   scrollMagicGalerie();
  //   cursorFollow();
  //   burgerMenuBlackToggle();
  //   soundButtonMountain();
  //   infoPhoto();
  //   transitionPages();

  //   break;

  // -----------
  case "http://192.168.1.75:5500/mountain.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/mountain.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/mountain.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/mountain.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  //-------

  case "http://192.168.1.75:5500/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/tropical.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/gold.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/gold.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/gold.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/gold.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/golden_hour.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/golden_hour.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/golden_hour.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/golden_hour.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/by_night.php":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/my_dog.html":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/my_dog.html":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/my_dog.html":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/my_dog.html":
    loader();
    darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    soundButtonTropical();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/video.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/video.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/video.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/video.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/guadeloupe.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/guadeloupe.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/guadeloupe.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/guadeloupe.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/auvergne.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/auvergne.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/auvergne.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/auvergne.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/dream-by-kenzo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/dream-by-kenzo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/dream-by-kenzo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/dream-by-kenzo.html":
    loader();
    darkModeGalerie();
    cursorFollow();
    burgerMenuBlackToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/a_propos.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/a_propos.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/a_propos.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/a_propos.html":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/a_propos.html#rth":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/a_propos.html#presentation":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/contact.php":
    loader();
    darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/contact.php":
    loader();
    darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/contact.php":
    loader();
    darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/contact.php":
    loader();
    darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/validation.php":
    cursorFollow();
    break;
  case "http://10.152.21.50:5500/validation.php":
    cursorFollow();
    break;
  case "http://192.168.1.77:5500/validation.php":
    cursorFollow();
    break;
  case "https://www.enzo-cosson.fr/validation.php":
    cursorFollow();
    break;

  // -----------
  case "http://192.168.1.75:5500/imovix.html":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/imovix.html":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/imovix.html":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/imovix.html":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/book.html":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/book.html":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/book.html":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/book.html":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/soda.html":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/soda.html":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/soda.html":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/soda.html":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/art.html":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/art.html":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/art.html":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/art.html":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/spider_threejs.html":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/spider_threejs.html":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/spider_threejs.html":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/spider_threejs.html":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/custom_air.html":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/custom_air.html":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/custom_air.html":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/custom_air.html":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/school.html":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/school.html":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/school.html":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/school.html":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  default:
    console.log("erreur d'url");
    break;
}
