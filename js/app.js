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

const works = new TimelineLite()
  .add(
    TweenLite.to(".green_circle", 1, {
      bezier: pathGreenCircle,
      ease: Power1.easeOut,
    }),
    "-=1"
  )
  .add(
    TweenLite.to(".white_circle", 1, {
      bezier: pathGreenWhite,
      ease: Power1.easeOut,
    }),
    "-=0.8"
  )
  .add(
    TweenLite.to(".right_text_absolute", 1, {
      bezier: pathTextAbs,
      ease: Power1.easeInOut,
    }),
    "-=2"
  )
  .add(
    TweenLite.to(".iphone1", 1, {
      bezier: pathIphone1,
      ease: Power1.easeOut,
    }),
    "-=2"
  )
  .add(
    TweenLite.to(".iphone2", 1, {
      bezier: pathIphone2,
      ease: Power1.easeOut,
    }),
    "-=1.8"
  )
  .add(
    TweenLite.to(".iphone3", 1, {
      bezier: pathIphone3,
      ease: Power1.easeOut,
    }),
    "-=1.6"
  )
  .add(
    TweenLite.to(".h3_text", 1, {
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
  // .addIndicators()
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
const soda = new TimelineLite()
  .add(
    TweenLite.to(".first_translate", 1, {
      bezier: pathfirstH3Text,
      ease: Power1.easeInOut,
    }),
    "-=1"
  )
  .add(
    TweenLite.to(".last_translate", 1, {
      bezier: pathlastH3Text,
      ease: Power1.easeInOut,
    }),
    "-=1"
  )
  .add(
    TweenLite.to(".imac_soda", 1, {
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
  .addIndicators()
  .addTo(Controller2);

// ------------------------------------------------------------

const pathConcept = {
  curviness: 1.25,
  values: [{ backgroundColor: "#70e8cb" }],
};
// const pathImacGopro = {
//   curviness: 1.25,
//   values: [{ width: "70vw", top: "20%" }],
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
  values: [{ fontSize: "50vw", opacity: 1 }],
};
const concept = new TimelineLite()

  .add(
    TweenLite.to(".ipad_imovix", 1, {
      bezier: pathIpadImovix,
      ease: Power1.easeOut,
    }),
    "-=2"
  )
  .add(
    TweenLite.to(".ipad_spiderman", 1, {
      bezier: pathIpadImovix2,
      ease: Power1.easeOut,
    }),
    "-=1.7"
  )
  .add(
    TweenLite.to(".ipad_myList", 1, {
      bezier: pathIpadImovix3,
      ease: Power1.easeOut,
    }),
    "-=0.75"
  )
  .add(
    TweenLite.to(".ipad_log", 1, {
      bezier: pathIpadImovix4,
      ease: Power1.easeOut,
    }),
    "-=0.8"
  )
  .add(
    TweenLite.to(".concept", 1, {
      bezier: pathConcept,
      ease: Power1.easeInOut,
    }),
    "-=2"
  )
  .add(
    TweenLite.to(".whiteRectangle", 1, {
      bezier: pathWhiteRectangle,
      ease: Power1.easeInOut,
    }),
    "-=1.5"
  )
  .add(
    TweenLite.to(".titre_skills", 1, {
      bezier: pathTitreSkills,
      ease: Power1.easeInOut,
    }),
    "=-1.2"
  )
  .add(
    TweenLite.to(".bg_titre_skills", 1, {
      bezier: pathBgTitreSkills,
      ease: Power1.easeInOut,
    }),
    "=-1"
  );
const Controller3 = new ScrollMagic.Controller();

const sceneConcept = new ScrollMagic.Scene({
  triggerElement: ".concept",
  duration: 3000,
  triggerHook: 0.4,
})
  .setTween(concept)
  .addIndicators()
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

const skills = new TimelineLite()
  .add(
    TweenLite.to(".skills_html", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to(".skills_html_bg", 0.4, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_css", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_css_bg", 0.4, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_scss", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_scss_bg", 0.4, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_js", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_js_bg", 0.3, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_reactJs", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_reactJs_bg", 0.3, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_threeJs", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_threeJs_bg", 0.3, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_php", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_php_bg", 0.3, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_mysql", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_mysql_bg", 0.3, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_git", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_git_bg", 0.3, {
      bezier: pathH1Bg,
      ease: Power1.easeInOut,
    }),
    "=-0.67"
  )
  .add(
    TweenLite.to(".skills_figma", 1, {
      bezier: pathH1,
      ease: Power1.easeInOut,
    }),
    "=-0.8"
  )
  .add(
    TweenLite.to(".skills_figma_bg", 0.3, {
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
  .addIndicators()
  .setPin(".skills")
  .addTo(Controller4);

// ------------------------------------------------------------

const pathTransitionCircle = {
  curviness: 1.25,
  values: [{ width: "25vw", height: "20vw", borderRadius: "500vw" }],
};

const transition = new TimelineLite().add(
  TweenLite.to(".transition_circle", 1, {
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
  .addIndicators()
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

const seeMore = new TimelineLite()
  .add(
    TweenLite.to(".stroke_green_circle1", 1, {
      bezier: pathGreenStrokeCircleMain,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to(".stroke_green_circle2", 1, {
      bezier: pathGreenStrokeCircle,
      ease: Power1.easeInOut,
    }),
    "-=0.9"
  )
  .add(
    TweenLite.to(".stroke_green_circle3", 1, {
      bezier: pathGreenStrokeCircle,
      ease: Power1.easeInOut,
    }),
    "-=0.9"
  )
  .add(
    TweenLite.to(".stroke_green_circle4", 1, {
      bezier: pathGreenStrokeCircle,
      ease: Power1.easeInOut,
    }),
    "-=0.9"
  )
  .add(
    TweenLite.to(".transition_title", 1, {
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
  .addIndicators()
  .setPin(".see_more")
  .addTo(Controller2);

// ------------------------------------------------------------
