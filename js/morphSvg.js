// Définir la forme SVG initiale
var initialShape = MorphSVGPlugin.pathDataToBezier("M0,0C0,40,40,40,40,0");

// Définir la forme finale
var finalShape = MorphSVGPlugin.pathDataToBezier(
  "M0,0C0,20,20,20,20,0C20,-20,0,-20,0,0"
);
var headerElement = document.querySelector(".header");
var headerPath = MorphSVGPlugin.convertToPath(headerElement);

// Créer l'animation
function createAnimation() {
  var tl = gsap.timeline({ repeat: -1, yoyo: true });
  tl.to(".header", { duration: 1, morphSVG: { shape: finalShape } });
  return tl;
}

// var menuTl = new TimelineMax();
// menuTl.to(".header", 1, { morphSVG: finalShape }, { ease: Power2.easeOut });
// menuTl.reverse();
