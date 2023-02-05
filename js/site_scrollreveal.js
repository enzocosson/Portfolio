export function siteScrollReveal() {
  window.sr = ScrollReveal();

  sr.reveal(".presentation_site_bottom", {
    interval: 100,
    duration: 2000,
    origin: "top",
    distance: "-50vh",
  });
}
