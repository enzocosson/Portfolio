export function scrollMagicGalerie() {
  const pathCol1 = {
    curviness: 1.25,
    values: [{  transform: "translateY(-40vh)",}],
  };
  const pathCol2 = {
    curviness: 1.25,
    values: [{  transform: "translateY(-30vh)",}],
  };
  const pathCol3 = {
    curviness: 1.25,
    values: [{  transform: "translateY(-50vh)",}],
  };
  const pathCol4 = {
    curviness: 1.25,
    values: [{  transform: "translateY(-20vh)",}],
  };
  const pathMiniatures = {
    curviness: 1.25,
    values: [
      {
        top: "0%",
      },
    ],
  };

  const galerie = new TimelineMax()
    .add(
      TweenMax.to(".col1", 1, {
        bezier: pathCol1,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".col2", 1, {
        bezier: pathCol2,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".col3", 1, {
        bezier: pathCol3,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".col4", 1, {
        bezier: pathCol4,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".miniatures", 1, {
        bezier: pathMiniatures,
        ease: Power1.easeInOut,
      }),
      "=-1"
    );
  const Controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene({
    triggerElement: ".galerie_web_page",
    duration: 3500,
    triggerHook: 0,
  })
    .setTween(galerie)
    .addTo(Controller);

  // --------------------------------------------

  const pathSlider = {
    curviness: 1.25,
    values: [{  transform: "translateX(-200vw)",}],
  };

  const slider = new TimelineMax()
    .add(
      TweenMax.to(".slider_galerie", 1, {
        bezier: pathSlider,
        ease: Power1.easeInOut,
      }),
      "-=1"
    );
  const Controller2 = new ScrollMagic.Controller();

  const scene2 = new ScrollMagic.Scene({
    triggerElement: ".container_slider_galerie",
    duration: 3000,
    triggerHook: 1.5,
  })
    .setTween(slider)
    // .setPin(".container_slider_galerie")
    .addTo(Controller2);



}