export function burgerMenuToggle() {
  const menu = document.querySelector(".menu_mobile");
  const burger = document.querySelector(".burger");

  burger.addEventListener("click", () => {
    menu.classList.toggle("menu_mobile_active");
    burger.classList.toggle("burger_active");
  });
}
