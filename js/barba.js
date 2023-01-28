barba.init({
  transitions: [
    {
      name: "opacity-transition",
      leave(data) {
        // Use gsap to animate the opacity of the current container to 0
        return gsap.to(data.current.container, {
          opacity: 0,
        });
      },
      enter(data) {
        // Use gsap to animate the opacity of the next container from 0 to 1
        return gsap.from(data.next.container, {
          opacity: 0,
        });
      },
      // You can add other function like before, after and once
    },
  ],
});
