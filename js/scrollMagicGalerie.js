function scrollMagicGalerie() {
  // --------------------------------------------

  const pathLanscape = {
    curviness: 1.25,
    values: [{ width: "80%", height: "80%" }],
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
    )
    .add(
      TweenMax.to(".container_galerie_bottom .miniatures", 1, {
        bezier: pathMinia,
        ease: Power1.easeInOut,
      }),
      "-=1"
    );
  const Controller4 = new ScrollMagic.Controller();

  const scene4 = new ScrollMagic.Scene({
    triggerElement: ".container_galerie_bottom",
    duration: 1000,
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
  const Controller5 = new ScrollMagic.Controller();

  const scene5 = new ScrollMagic.Scene({
    triggerElement: ".autres_projets",
    duration: 2000,
    triggerHook: 0.5,
  })
    .setTween(suggestion)
    .addTo(Controller5);
}

scrollMagicGalerie();
