export function initScrollMagic() {
  const pathGreenCircle = {
    curviness: 1.25,
    values: [
      { width: "200vw", height: "200vw", borderRadius: "50%" },
      { width: "200vw", height: "200vw", borderRadius: "0%" },
    ],
  };
  const pathGreenWhite = {
    curviness: 1.25,
    values: [
      { width: "200vw", height: "200vw", borderRadius: "50%" },
      { width: "200vw", height: "200vw", borderRadius: "0%" },
    ],
  };
  const pathGreenCircle2 = {
    curviness: 1.25,
    values: [
      { width: "200vw", height: "200vw", borderRadius: "50%" },
      { width: "200vw", height: "200vw", borderRadius: "0%" },
    ],
  };
  const pathGreenWhite2 = {
    curviness: 1.25,
    values: [
      { width: "200vw", height: "200vw", borderRadius: "50%" },
      { width: "200vw", height: "200vw", borderRadius: "0%" },
    ],
  };
  const pathTextAbs = {
    curviness: 1.25,
    values: [{ top: "90%" }, { top: "10%" }],
  };
  const pathIphone1 = {
    curviness: 1.25,
    values: [
      {
        top: "-10%",
        left: "60%",
        transform: "perspective(1000px) translate(-50%, -50%) rotateX(35deg)",
      },
    ],
  };
  const pathIphone2 = {
    curviness: 1.25,
    values: [
      {
        top: "-10%",
        left: "60%",
        transform: "perspective(1000px) translate(-50%, -50%) rotateX(35deg)",
      },
    ],
  };
  const pathIphone3 = {
    curviness: 1.25,
    values: [
      {
        top: "-10%",
        left: "60%",
        transform: "perspective(1000px) translate(-50%, -50%) rotateX(35deg)",
      },
    ],
  };
  const pathH3Text = {
    curviness: 1.25,
    values: [
      {
        letterSpacing: "5vw",
        fontSize: "50vw",
      },
    ],
  };

  const works = new TimelineMax()
    .add(
      TweenMax.to(".green_circle", 1, {
        bezier: pathGreenCircle,
        ease: Power1.easeOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".white_circle", 1, {
        bezier: pathGreenWhite,
        ease: Power1.easeOut,
      }),
      "-=0.8"
    )
    .add(
      TweenMax.to(".right_text_absolute", 1, {
        bezier: pathTextAbs,
        ease: Power1.easeInOut,
      }),
      "-=2"
    )
    .add(
      TweenMax.to(".iphone1", 1, {
        bezier: pathIphone1,
        ease: Power1.easeOut,
      }),
      "-=2"
    )
    .add(
      TweenMax.to(".iphone2", 1, {
        bezier: pathIphone2,
        ease: Power1.easeOut,
      }),
      "-=1.8"
    )
    .add(
      TweenMax.to(".iphone3", 1, {
        bezier: pathIphone3,
        ease: Power1.easeOut,
      }),
      "-=1.6"
    )
    .add(
      TweenMax.to(".h3_text", 1, {
        bezier: pathH3Text,
        ease: Power1.easeOut,
      }),
      "-=1.1"
    );

  const Controller = new ScrollMagic.Controller();

  const scene = new ScrollMagic.Scene({
    triggerElement: ".works",
    duration: 3000,
    triggerHook: 0.5,
  })
    .setTween(works)
    .addTo(Controller);

  // ------------------------------------------------------------

  const pathfirstH3Text = {
    curviness: 1.25,
    values: [{ left: "-50%" }],
  };
  const pathlastH3Text = {
    curviness: 1.25,
    values: [{ left: "100%" }],
  };
  const pathImacSoda = {
    curviness: 1.25,
    values: [{ top: "-30%", transform: "rotate(-20deg)" }],
  };
  const soda = new TimelineMax()
    .add(
      TweenMax.to(".first_translate", 1, {
        bezier: pathfirstH3Text,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".last_translate", 1, {
        bezier: pathlastH3Text,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".imac_soda", 1, {
        bezier: pathImacSoda,
        ease: Power1.easeOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".imac_soda_black", 1, {
        bezier: pathImacSoda,
        ease: Power1.easeOut,
      }),
      "-=1"
    );

  const Controller2 = new ScrollMagic.Controller();

  const sceneSoda = new ScrollMagic.Scene({
    triggerElement: ".soda",
    duration: 3000,
    triggerHook: 1,
  })
    .setTween(soda)

    .addTo(Controller2);

  // ------------------------------------------------------------
  // const r = document.querySelector(":root");
  // const pathConcept = {
  //   curviness: 1.25,
  //   values: [{ backgroundColor: "var(--green)" }],
  // };

  const pathIpadImovix = {
    curviness: 1.25,
    values: [
      {
        top: "0%",
      },
    ],
  };
  const pathIpadImovix2 = {
    curviness: 1.25,
    values: [
      {
        top: "10%",
      },
    ],
  };
  const pathIpadImovix3 = {
    curviness: 1.25,
    values: [
      {
        top: "20%",
      },
    ],
  };
  const pathIpadImovix4 = {
    curviness: 1.25,
    values: [
      {
        top: "20%",
      },
    ],
  };
  const pathWhiteRectangle = {
    curviness: 1.25,
    values: [
      {
        transform: "scale(1)",
        borderRadius: "0px",
      },
    ],
  };
  const pathTitreSkills = {
    curviness: 1.25,
    values: [{ fontSize: "17vw", opacity: 1 }],
  };
  const pathBgTitreSkills = {
    curviness: 1.25,
    values: [{ fontSize: "40vw", opacity: 1 }],
  };
  const concept = new TimelineMax()

    .add(
      TweenMax.to(".ipad_imovix", 1, {
        bezier: pathIpadImovix,
        ease: Power1.easeOut,
      }),
      "-=2"
    )
    .add(
      TweenMax.to(".ipad_spiderman", 1, {
        bezier: pathIpadImovix2,
        ease: Power1.easeOut,
      }),
      "-=1.7"
    )
    .add(
      TweenMax.to(".ipad_myList", 1, {
        bezier: pathIpadImovix3,
        ease: Power1.easeOut,
      }),
      "-=0.75"
    )
    .add(
      TweenMax.to(".ipad_log", 1, {
        bezier: pathIpadImovix4,
        ease: Power1.easeOut,
      }),
      "-=0.8"
    )

    .add(
      TweenMax.to(".whiteRectangle", 1, {
        bezier: pathWhiteRectangle,
        ease: Power1.easeInOut,
      }),
      "-=1"
    )
    .add(
      TweenMax.to(".titre_skills", 1, {
        bezier: pathTitreSkills,
        ease: Power1.easeInOut,
      }),
      "=-0.3"
    )
    .add(
      TweenMax.to(".bg_titre_skills", 1, {
        bezier: pathBgTitreSkills,
        ease: Power1.easeInOut,
      }),
      "=-0.9"
    );
  const Controller3 = new ScrollMagic.Controller();

  const sceneConcept = new ScrollMagic.Scene({
    triggerElement: ".concept",
    duration: 3500,
    triggerHook: 0.4,
  })
    .setTween(concept)

    .addTo(Controller3);

  // ------------------------------------------------------------

  const pathH1 = {
    curviness: 1.25,
    values: [
      { fontSize: "20vw", opacity: 1, top: "50%" },
      { fontSize: "6vw", opacity: 0, top: "10%" },
    ],
  };
  const pathH1Bg = {
    curviness: 1.25,
    values: [
      { left: "50%", opacity: 1 },
      { left: "150%", opacity: 0 },
    ],
  };

  const skills = new TimelineMax()
    .add(
      TweenMax.to(".skills_html", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".skills_html_bg", 0.4, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_css", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_css_bg", 0.4, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_scss", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_scss_bg", 0.4, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_js", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_js_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_reactJs", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_reactJs_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_threeJs", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_threeJs_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_php", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_php_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_mysql", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_mysql_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_git", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_git_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    )
    .add(
      TweenMax.to(".skills_figma", 1, {
        bezier: pathH1,
        ease: Power1.easeInOut,
      }),
      "=-0.8"
    )
    .add(
      TweenMax.to(".skills_figma_bg", 0.3, {
        bezier: pathH1Bg,
        ease: Power1.easeInOut,
      }),
      "=-0.67"
    );
  const Controller4 = new ScrollMagic.Controller();

  const sceneSkills = new ScrollMagic.Scene({
    triggerElement: ".skills",
    duration: 3000,
    triggerHook: 0,
  })
    .setTween(skills)
    .setPin(".skills")
    .addTo(Controller4);

  // ------------------------------------------------------------

  const pathTransitionCircle = {
    curviness: 1.25,
    values: [{ width: "25vw", height: "20vw", borderRadius: "500vw" }],
  };

  const transition = new TimelineMax().add(
    TweenMax.to(".transition_circle", 1, {
      bezier: pathTransitionCircle,
      ease: Power1.easeInOut,
    }),
    "=0.5"
  );
  const Controller5 = new ScrollMagic.Controller();

  const sceneTransition = new ScrollMagic.Scene({
    triggerElement: ".transition_green",
    duration: 1000,
    triggerHook: 1,
  })
    .setTween(transition)
    .addTo(Controller2);

  // ------------------------------------------------------------
  const pathGreenStrokeCircleMain = {
    curviness: 1.25,
    values: [{ opacity: 1, top: "50%", width: "20vw", height: "20vw" }],
  };
  const pathGreenStrokeCircle = {
    curviness: 1.25,
    values: [{ opacity: 1, top: "50%", width: "20vw", height: "20vw" }],
  };
  const pathTransitionTitle = {
    curviness: 1.25,
    values: [{ opacity: 1, letterSpacing: "0vw" }],
  };

  const seeMore = new TimelineMax()
    .add(
      TweenMax.to(".stroke_green_circle1", 1, {
        bezier: pathGreenStrokeCircleMain,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".stroke_green_circle2", 1, {
        bezier: pathGreenStrokeCircle,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    )
    .add(
      TweenMax.to(".stroke_green_circle3", 1, {
        bezier: pathGreenStrokeCircle,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    )
    .add(
      TweenMax.to(".stroke_green_circle4", 1, {
        bezier: pathGreenStrokeCircle,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    )
    .add(
      TweenMax.to(".transition_title", 1, {
        bezier: pathTransitionTitle,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    );
  const Controller6 = new ScrollMagic.Controller();

  const sceneSeeMore = new ScrollMagic.Scene({
    triggerElement: ".see_more",
    duration: 2000,
    triggerHook: 0,
  })
    .setTween(seeMore)
    .setPin(".see_more")
    .addTo(Controller2);

  // ------------------------------------------------------------

  const pathTitle = {
    curviness: 1.25,
    values: [
      {
        opacity: 1,
        fontSize: "10vw",
      },
    ],
  };
  const pathTitleFront = {
    curviness: 1.25,
    values: [
      {
        opacity: 1,
        fontSize: "10vw",
        color: "transparent",
      },
    ],
  };
  const pathBgPhoto = {
    curviness: 1.25,
    values: [
      {
        width: "100%",
        borderRadius: "0vw",
      },
    ],
  };

  const photoVideoTop = new TimelineMax()
    .add(
      TweenMax.to(".photoVideoTop__title_front", 1, {
        bezier: pathTitleFront,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".photoVideoTop__title", 1, {
        bezier: pathTitle,
        ease: Power1.easeInOut,
      }),
      "-=0.7"
    )

    .add(
      TweenMax.to(".container_photoVideoTop_img", 1, {
        bezier: pathBgPhoto,
        ease: Power1.easeInOut,
      })
    );
  const Controller7 = new ScrollMagic.Controller();

  const scenePhotoVideoTop = new ScrollMagic.Scene({
    triggerElement: ".photoVideoTop",
    duration: 3000,
    triggerHook: 0,
  })
    .setTween(photoVideoTop)
    .setPin(".photoVideoTop")
    .addTo(Controller2);

  // ------------------------------------------------------------

  const pathFeed3 = {
    curviness: 1.25,
    values: [
      {
        transform: "translateY(-100vh)",
      },
    ],
  };
  const pathFeed2 = {
    curviness: 1.25,
    values: [
      {
        transform: "translateY(-50vh)",
      },
    ],
  };
  const pathFeed1 = {
    curviness: 1.25,
    values: [
      {
        transform: "translateY(-30vh)",
      },
    ],
  };
  const pathMiniatures = {
    curviness: 1.25,
    values: [
      {
        top: "0%",
      },
    ],
  };
  const pathTravel = {
    curviness: 1.25,
    values: [
      {
        transform: "translateY(0vh)",
        webkitTextFillColor: "transparent",
      },
    ],
  };
  const pathTravelImg = {
    curviness: 1.25,
    values: [
      {
        height: "0%",
      },
    ],
  };
  const feed = new TimelineMax()
    .add(
      TweenMax.to(".col3", 1, {
        bezier: pathFeed3,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".col2", 1, {
        bezier: pathFeed2,
        ease: Power1.easeInOut,
      }),
      "=-1"
    )
    .add(
      TweenMax.to(".col4", 1, {
        bezier: pathFeed2,
        ease: Power1.easeInOut,
      }),
      "=-1"
    )
    .add(
      TweenMax.to(".miniatures", 1, {
        bezier: pathMiniatures,
        ease: Power1.easeInOut,
      }),
      "=-1"
    );
  const Controller8 = new ScrollMagic.Controller();

  const sceneWild = new ScrollMagic.Scene({
    triggerElement: ".feed",
    duration: 4000,
    triggerHook: 0.2,
  })
    .setTween(feed)

    .addTo(Controller8);

  // ------------------------------------------------------------
  const pathCircleAlbum = {
    curviness: 1.25,
    values: [{ opacity: 1, top: "50%", width: "20vw", height: "20vw" }],
  };

  const pathCircleAlbum2 = {
    curviness: 1.25,
    values: [{ opacity: 1, top: "50%", width: "20vw", height: "20vw" }],
  };

  const pathTransitionTitleAlbum = {
    curviness: 1.25,
    values: [{ opacity: 1, letterSpacing: "0vw" }],
  };

  const seeMoreAlbum = new TimelineMax()
    .add(
      TweenMax.to(".album_stroke_green_circle1", 1, {
        bezier: pathCircleAlbum,
        ease: Power1.easeInOut,
      })
    )
    .add(
      TweenMax.to(".album_stroke_green_circle2", 1, {
        bezier: pathCircleAlbum2,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    )
    .add(
      TweenMax.to(".album_stroke_green_circle3", 1, {
        bezier: pathCircleAlbum2,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    )
    .add(
      TweenMax.to(".album_stroke_green_circle4", 1, {
        bezier: pathCircleAlbum2,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    )
    .add(
      TweenMax.to(".album_transition_title", 1, {
        bezier: pathTransitionTitleAlbum,
        ease: Power1.easeInOut,
      }),
      "-=0.9"
    );
  const Controller9 = new ScrollMagic.Controller();

  const sceneSeeMoreAlbum = new ScrollMagic.Scene({
    triggerElement: ".see_more_album",
    duration: 2000,
    triggerHook: 0,
  })
    .setTween(seeMoreAlbum)
    .setPin(".see_more_album")
    .addTo(Controller9);

  // ------------------------------
}
