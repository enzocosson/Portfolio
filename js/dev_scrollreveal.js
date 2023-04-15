function devScrollReveal() {
  window.sr = ScrollReveal();

  sr.reveal(".card", {
    interval: 50,
    duration: 2000,
    origin: "top",
    distance: "30px",
  });
}

devScrollReveal();
