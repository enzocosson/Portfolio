export function scrollMagicGalerie() {
  const pathCol1 = {
    curviness: 1.25,
    values: [{  transform: "translateY(-30vh)",}],
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
        bezier: pathCol1,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".col3", 1, {
        bezier: pathCol1,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".col4", 1, {
        bezier: pathCol1,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".galerie_first .miniatures", 1, {
        bezier: pathMiniatures,
        ease: Power1.easeInOut,
      }),
      "=-1"
    )
;
  const Controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene({
    triggerElement: ".galerie_first",
    duration: 4000,
    triggerHook: 0.5,
  })
    .setTween(galerie)
    .addTo(Controller);

  // --------------------------------------------

  const pathCol2 = {
    curviness: 1.25,
    values: [{  transform: "translateY(-50vh)",}],
  };

  const pathMiniatures2 = {
    curviness: 1.25,
    values: [
      {
        top: "0%",
      },
    ],
  };

  const galerie2 = new TimelineMax()
    .add(
      TweenMax.to(".container_img_100", 1, {
        bezier: pathCol2,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".container_img_50", 1, {
        bezier: pathCol2,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".galerie_large .miniatures", 1, {
        bezier: pathMiniatures,
        ease: Power1.easeInOut,
      }),
      "=-1"
    );
  const Controller3 = new ScrollMagic.Controller();

  const scene2 = new ScrollMagic.Scene({
    triggerElement: ".galerie_large",
    duration: 3000,
    triggerHook: 0.5,
  })
    .setTween(galerie2)
    .addTo(Controller3);

  // --------------------------------------------

  const pathSliderTop = {
    curviness: 1.25,
    values: [{  transform: "translateX(-136vw)",}],
  };
  const pathSliderBottom = {
    curviness: 1.25,
    values: [{  transform: "translateX(136vw)",}],
  };
  const slider = new TimelineMax()
    .add(
      TweenMax.to(".slider_galerie_top", 1, {
        bezier: pathSliderTop,
        ease: Power1.easeInOut,
      }),
      "-=1"
    ).add(
      TweenMax.to(".slider_galerie_bottom", 1, {
        bezier: pathSliderBottom,
        ease: Power1.easeInOut,
      }),
      "-=1"
    );
  const Controller2 = new ScrollMagic.Controller();

  const scene3 = new ScrollMagic.Scene({
    triggerElement: ".container_slider_galerie",
    duration: 3000,
    triggerHook: 0,
  })
    .setTween(slider)
    .setPin(".container_slider_galerie")
    .addTo(Controller2);



  // --------------------------------------------

  const pathLanscape = {
    curviness: 1.25,
    values: [{  width: "80%", height: "80%"}],
  };
  const pathMinia = {
    curviness: 1.25,
    values: [
      {
        top: "0%",
      },
    ],
  };
  
  const landscape = new TimelineMax()
    .add(
      TweenMax.to(".container_galerie_bottom .container_img", 1, {
        bezier: pathLanscape,
        ease: Power1.easeInOut,
      })
    ).add(
      TweenMax.to(".container_galerie_bottom .miniatures", 1, {
        bezier: pathMinia,
        ease: Power1.easeInOut,
      }),
      "-=1"
    );
  const Controller4 = new ScrollMagic.Controller();

  const scene4= new ScrollMagic.Scene({
    triggerElement: ".container_galerie_bottom",
    duration: 3000,
    triggerHook: 0,
  })
    .setTween(landscape)
    .setPin(".container_galerie_bottom")
    .addTo(Controller4);




  // --------------------------------------------

  const pathSuggestion = {
    curviness: 1.25,
    values: [
      {
        top: "0%",
      },
    ],
  };
  
  const suggestion = new TimelineMax().add(
      TweenMax.to(".autres_projets .miniatures", 1, {
        bezier: pathSuggestion,
        ease: Power1.easeInOut,
      }),
      "-=1"
    );
  const Controller5= new ScrollMagic.Controller();

  const scene5 = new ScrollMagic.Scene({
    triggerElement: ".autres_projets",
    duration: 2000,
    triggerHook: 0.5,
  })
    .setTween(suggestion)
    .addTo(Controller5);
}