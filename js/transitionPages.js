export function transitionPages() {
  const links = document.querySelectorAll("a");
  const transitionLeave = document.querySelector(".transition_leave");

  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();

      transitionLeave.classList.add("transition_leave_active");

      setTimeout(() => {
        window.location.href = link.href;
      }, 600);
    });
  });
}
