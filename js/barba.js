export function initBarba() {
  const wipe = document.querySelector(".wipe-transition");
  const TLAnim = new TimelineMax();

  function delay(n) {
    return new Promise((done) => {
      setTimeout(() => {
        done();
      }, n);
    });
  }

  barba.init({
    sync: true,

    transitions: [
      {
        async leave() {
          const done = this.async();

          TLAnim.to(wipe, { top: "0%", ease: "power2.InOut", duration: 0.5 });

          await delay(1500);
          done();
        },
        enter() {
          TLAnim.to(wipe, {
            top: "100%",
            ease: "power2.in",
            duration: 0.5,
          }).set(wipe, { top: "-100%", ease: "power2.InOut" });
        },
      },
    ],
  });
}
