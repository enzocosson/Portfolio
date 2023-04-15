function scrollMagicSchool() {
  const pathImac = {
    curviness: 1.25,
    values: [{ top: "250%", width: "5vw" }],
  };
  const pathBgTitle = {
    curviness: 1.25,
    values: [
      {
        top: "150%",
        fontSize: "0vw",
        opacity: 0,
      },
    ],
  };

  const site = new TimelineMax()
    .add(
      TweenMax.to(".imac", 1, {
        bezier: pathImac,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".bg_title", 1, {
        bezier: pathBgTitle,
        ease: Power1.easeInOut,
      }),
      "-=1"
    );
  const Controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene({
    triggerElement: ".presentation_site",
    duration: 2000,
    triggerHook: 0.2,
  })
    .setTween(site)
    .addTo(Controller);

  // --------------------------------------------
  const pathRect = {
    curviness: 1.25,
    values: [
      {
        top: "50%",
        width: "100%",
        height: "100%",
        borderRadius: "0vw",
      },
    ],
  };
  const pathSchoolImac = {
    curviness: 1.25,
    values: [
      { left: "50%", width: "40%" },
      { left: "70%", width: "40%" },
    ],
  };

  const pathTextInfo = {
    curviness: 1.25,
    values: [{ marginLeft: "0", opacity: "1" }],
  };

  const pathWhiteCircle = {
    curviness: 1.25,
    values: [
      {
        borderRadius: "0vw 0vw 0vw 0vw",
        width: "100%",
        height: "100%",

        top: "100%",
      },
      {
        borderRadius: "0vw 0vw 0vw 0vw",
        width: "100%",
        height: "50%",
        top: "25%",
      },
    ],
  };
  const pathFrontEnd = {
    curviness: 1.25,
    values: [{ opacity: "1" }],
  };

  const pathRectAnimation = {
    curviness: 1.25,
    values: [{ height: "50vh" }],
  };
  const pathSchoolImacIllu = {
    curviness: 1.25,
    values: [{ opacity: "0.2" }],
  };

  const more = new TimelineMax()

    .add(
      TweenMax.to(".green_rect", 1, {
        bezier: pathRect,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".imac_school2", 2, {
        bezier: pathSchoolImac,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".more_info_titre", 1, {
        bezier: pathTextInfo,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".description_paragraphe", 1, {
        bezier: pathTextInfo,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".avion_illu", 1, {
        bezier: pathSchoolImacIllu,
        ease: Power1.easeInOut,
      }),
      "-=2.5"
    )
    .add(
      TweenMax.to(".white_circle_bottom", 2, {
        bezier: pathWhiteCircle,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".front_end_title", 1, {
        bezier: pathFrontEnd,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".rect1", 1, {
        bezier: pathRectAnimation,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".rect2", 1, {
        bezier: pathRectAnimation,
        ease: Power1.easeInOut,
      }),
      "-=0.8"
    );
  const Controller2 = new ScrollMagic.Controller();

  const scene2 = new ScrollMagic.Scene({
    triggerElement: ".more_info",
    duration: 5000,
    triggerHook: 0,
  })
    .setTween(more)
    .setPin(".more_info")
    .addTo(Controller2);

  //------------------------------------------------------------

  const container_illu = {
    curviness: 1.25,
    values: [{ width: "90%", height: "90%" }],
  };
  const titre_bdd = {
    curviness: 1.25,
    values: [{ opacity: "1" }, { opacity: "0" }],
  };
  const frontground = {
    curviness: 1.25,
    values: [{ height: "0%" }],
  };
  const titre_bdd_bg = {
    curviness: 1.25,
    values: [{ fontSize: "30vw", color: "transparent" }],
  };
  const imovix_catalogue = {
    curviness: 1.25,
    values: [{ width: "100%", height: "100%" }],
  };

  const bdd = new TimelineMax()
    .add(
      TweenMax.to(".titre_bdd_bg", 1, {
        bezier: titre_bdd_bg,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".container_illu", 1, {
        bezier: container_illu,
        ease: Power1.easeInOut,
      }),
      "-=0.1"
    )

    .add(
      TweenMax.to(".titre_bdd", 1, {
        bezier: titre_bdd,
        ease: Power1.easeInOut,
      }),
      "-=0.2"
    )
    .add(
      TweenMax.to(".frontground", 1, {
        bezier: frontground,
        ease: Power1.easeInOut,
      }),
      "-=0.5"
    )
    .add(
      TweenMax.to(".imovix_catalogue", 1, {
        bezier: imovix_catalogue,
        ease: Power1.easeInOut,
      }),
      "-=0.5"
    )
    .add(
      TweenMax.to(".paragraphe_bdd", 1, {
        bezier: titre_bdd,
        ease: Power1.easeInOut,
      }),
      "-=0.5"
    );
  const Controller3 = new ScrollMagic.Controller();

  const scene3 = new ScrollMagic.Scene({
    triggerElement: ".bdd",
    duration: 3000,
    triggerHook: 0,
  })
    .setTween(bdd)
    .setPin(".bdd")
    .addTo(Controller3);
  // --------------------------------------------
}
scrollMagicSchool();
