export function transitionPages() {
  const links = document.querySelectorAll(
    "a:not(.rth, .flashfood, .bdd_redirection, .bdd_redirection_top, .logo_reseaux a, .reseau a)"
  );
  const transitionLeave = document.querySelector(".transition_leave");

  window.addEventListener("popstate", (event) => {
    transitionLeave.classList.remove("transition_leave_active");

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
