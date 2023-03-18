export function transitionPages() {
  const links = document.querySelectorAll("a:not(.rth)");
  const transitionLeave = document.querySelector(".transition_leave");

  // Ajoutez un écouteur d'événements à l'objet window pour l'événement "popstate"
  window.addEventListener("popstate", (event) => {
    // Réinitialisez la classe CSS qui déclenche l'animation
    transitionLeave.classList.remove("transition_leave_active");
    // Rechargez la page précédente en utilisant l'URL de l'état précédent
    window.location.replace(event.state.url);
  });

  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();

      transitionLeave.classList.add("transition_leave_active");

      setTimeout(() => {
        history.replaceState({ url: window.location.href }, "");
        history.pushState(null, "", link.href);
        window.location.replace(link.href);
      }, 600);
    });
  });
}
