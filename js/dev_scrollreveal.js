export function devScrollReveal() {
  window.sr = ScrollReveal();

  sr.reveal(".card", {
    interval: 100,
    duration: 2000,
    origin: "top",
    distance: "30px",
  });
}
