"use strict";

import { loader } from "./loader.js";
function getURL() {
  return console.log(window.location.href);
}
var url = window.location.href;
getURL();
switch (url) {
  case "http://192.168.1.75:5500/":
    (0, loader)();
    break;
  case "http://192.168.1.75:5500//":
    (0, loader)();
    break;
  case "https://www.enzo-cosson.fr//":
    (0, loader)();
    break;
  default:
    console.log("erreur d'url");
    break;
}
