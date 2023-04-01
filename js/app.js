import { loader } from "./loader.js";
import { initScrollMagic } from "./libScrollMagic.js";
import { carrousel } from "./carrousel.js";
import { filter } from "./filter.js";
import { devScrollReveal } from "./dev_scrollreveal.js";
// import {
//   darkModeIndex,
//   darkModeSiteContact,
//   darkModeGalerie,
// } from "./darkMode.js";
import { scrollMagicImovix } from "./scrollMagicImovix.js";
import { scrollMagicBook } from "./scrollMagicBook.js";
import { scrollMagicSoda } from "./scrollMagicSoda.js";
import { scrollMagicArt } from "./scrollMagicArt.js";
import { scrollMagicSpider } from "./scrollMagicSpider.js";
import { scrollMagicCustomAir } from "./scrollMagicCustomAir.js";
import { scrollMagicSchool } from "./scrollMagicSchool.js";
import { scrollMagicGalerie } from "./scrollMagicGalerie.js";
import { cursorFollow } from "./cursorFollow.js";
import { burgerMenuToggle } from "./burgerMenu.js";
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
import { revealAnimtaion } from "./revealAnimation.js";

// getURL------------------------------------------------------------

function getURL() {
  return console.log(window.location.href);
}

var url = window.location.href;

getURL();

switch (url) {
  // -----------

  case "https://www.enzo-cosson.fr/admin/":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    // feedback();
    break;

  case "https://www.enzo-cosson.fr/admin/index.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/index.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_mountain.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_mountain.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_mountain_portrait.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_mountain_portrait.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_mountain_paysage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_mountain_paysage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_mountain_fullimage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_mountain_fullimage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_tropical.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_tropical.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_tropical_portrait.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_tropical_portrait.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_tropical_paysage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_tropical_paysage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_tropical_fullimage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_tropical_fullimage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_gold.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_gold.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_gold_portrait.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_gold_portrait.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_gold_paysage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_gold_paysage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_gold_fullimage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_gold_fullimage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_by_night.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_by_night.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_by_night_portrait.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_by_night_portrait.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_by_night_paysage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_by_night_paysage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "https://www.enzo-cosson.fr/admin/admin_by_night_fullimage.php":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/admin/admin_bynight_fullimage.php#rth":
    loader();
    // darkModeDev();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------

  case "https://www.enzo-cosson.fr/":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "https://www.enzo-cosson.fr/#works":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "https://www.enzo-cosson.fr/#rth":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "http://192.168.1.75:5500/accueil#works":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;

  case "http://192.168.1.77:5500/":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "http://192.168.1.77:5500/accueil":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "http://192.168.1.77:5500/accueil#works":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "http://192.168.1.77:5500/accueil#rth":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "https://www.enzo-cosson.fr/accueil":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "https://www.enzo-cosson.fr/accueil#rth":
    loader();
    // darkModeIndex();
    initScrollMagic();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  // -----------

  case "http://192.168.1.75:5500/developpement-web":
    loader();
    // darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "http://10.152.21.50:5500/developpement-web":
    loader();
    // darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "http://192.168.1.77:5500/developpement-web":
    loader();
    // darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "https://www.enzo-cosson.fr/developpement-web":
    loader();
    // darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  case "https://www.enzo-cosson.fr/developpement-web#rth":
    loader();
    // darkModeDev();
    carrousel();
    filter();
    devScrollReveal();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    revealAnimtaion();
    break;
  // -----------
  case "http://192.168.1.75:5500/photo-video":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/photo-video":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/photo-video":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo-video":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo-video#rth":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/photo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/photo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/photo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/photo#rth":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  case "http://192.168.1.75:5500/mountain":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/mountain":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/mountain":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/mountain":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;

  case "https://www.enzo-cosson.fr/mountain#rth":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonMountain();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/tropical#rth":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  //-------

  case "http://192.168.1.75:5500/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/tropical":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/tropical#rth":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/gold":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/gold":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/gold":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/gold":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;

  case "https://www.enzo-cosson.fr/gold#rth":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    infoPhoto();
    transitionPages();

    break;
  // -----------

  // -----------
  case "http://192.168.1.75:5500/by-night":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/by-night":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/by-night":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/by-night":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/by-night#rth":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonNight();
    infoPhoto();
    transitionPages();

    break;
  // -----------
  case "http://192.168.1.75:5500/my_dog.html":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    transitionPages();

    break;
  case "http://10.152.21.50:5500/my_dog.html":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    transitionPages();

    break;
  case "http://192.168.1.77:5500/my_dog.html":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    transitionPages();

    break;
  case "https://www.enzo-cosson.fr/my_dog.html":
    loader();
    // darkModeGalerie();
    scrollMagicGalerie();
    cursorFollow();
    burgerMenuToggle();
    soundButtonTropical();
    transitionPages();

    break;

  // -----------
  case "http://192.168.1.75:5500/video":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/video":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/video":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/video":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/video#rth":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/guadeloupe":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/guadeloupe":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/guadeloupe":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/guadeloupe":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/guadeloupe#rth":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoGuadeloupe();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/auvergne":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/auvergne":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/auvergne":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/auvergne":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/auvergne#rth":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoAuvergne();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/dream-by-kenzo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/dream-by-kenzo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/dream-by-kenzo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/dream-by-kenzo":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/dream-by-kenzo#rth":
    loader();
    // darkModeGalerie();
    cursorFollow();
    burgerMenuToggle();
    onPlayButtonVideoKenzo();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/a-propos":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/a-propos":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/a-propos":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/a-propos":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/a-propos#rth":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/a-propos#presentation":
    loader();
    darkModeSite();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/contact":
    loader();
    // darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/contact":
    loader();
    // darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/contact":
    loader();
    // darkModeSiteContact();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/contact":
    loader();
    // darkModeSiteContact();
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
  case "http://192.168.1.75:5500/imovix":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/imovix":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/imovix":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/imovix":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/imovix#rth":
    loader();
    darkModeSite();
    scrollMagicImovix();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/book":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/book":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/book":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/book":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/book#rth":
    loader();
    darkModeSite();
    scrollMagicBook();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/soda":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/soda":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/soda":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/soda":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/soda#rth":
    loader();
    darkModeSite();
    scrollMagicSoda();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/galerie-art":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/galerie-art":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/galerie-art":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/galerie-art":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/galerie-art#rth":
    loader();
    darkModeSite();
    scrollMagicArt();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/spider-man-threejs":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/spider-man-threejs":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/spider-man-threejs":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/spider-man-threejs":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/spider-man-threejs#rth":
    loader();
    darkModeSite();
    scrollMagicSpider();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  // -----------
  case "http://192.168.1.75:5500/custom-air":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/custom-air":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/custom-air":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/custom-air":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;

  case "https://www.enzo-cosson.fr/custom-air#rth":
    loader();
    darkModeSite();
    scrollMagicCustomAir();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  // -----------
  case "http://192.168.1.75:5500/school":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://10.152.21.50:5500/school":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "http://192.168.1.77:5500/school":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/school":
    loader();
    darkModeSite();
    scrollMagicSchool();
    cursorFollow();
    burgerMenuToggle();
    transitionPages();
    break;
  case "https://www.enzo-cosson.fr/school#rth":
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
