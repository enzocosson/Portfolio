const loader = document.querySelector(".loader");

window.addEventListener("load", () => {
  loader.classList.add("loader_finish");
});

// Function to generate random color
const generateColor = () => {
  var r = document.querySelector(":root");

  var listeCouleurs = new Array(
    "a2d2ff",
    "deaaff",
    "ffadad",
    "ffd6a5",
    "a2d2ff",
    "ff99c8"
  );

  console.log(listeCouleurs);
  let randomColor = Math.floor(Math.random() * listeCouleurs.length);
  var rValue = listeCouleurs[randomColor];

  r.style.setProperty("--green", "#" + rValue);
};

// Function to generate a dark mode

const darkMode = () => {
  var r = document.querySelector(":root");

  r.style.setProperty("--white", "#232323");
  r.style.setProperty("--black", "#fcfcfc");
};

// Function to animate the mouse move

function mouseMove() {
  const home = document.querySelector(".home");

  const me = document.querySelector(".me");
  const title_portfolio = document.querySelector(".title_portfolio");
  const title_name_front = document.querySelector(".title_name_front");
  const title_name_back = document.querySelector(".title_name_back");

  home.addEventListener("mousemove", (e) => {
    var valueX = (e.clientX * -1) / 10;
    var valueY = (e.clientY * -1) / 10;

    me.style.transform =
      "translate(-35%, -45%) translate3d(" + valueX + "px," + valueY + "px,0)";
  });

  home.addEventListener("mousemove", (e) => {
    var valueX = (e.clientX * -1) / 20;
    var valueY = (e.clientY * -1) / 20;

    title_portfolio.style.transform =
      "translateX(5%) translate3d(" + valueX + "px," + valueY + "px,0)";
  });

  home.addEventListener("mousemove", (e) => {
    var valueX = (e.clientX * -1) / 5;
    var valueY = (e.clientY * -1) / 5;

    title_name_front.style.transform =
      "translate(-39%, -45%) rotate(353deg) translate3d(" +
      valueX +
      "px," +
      valueY +
      "px,0)";
  });

  home.addEventListener("mousemove", (e) => {
    var valueX = (e.clientX * -1) / 5;
    var valueY = (e.clientY * -1) / 5;

    title_name_back.style.transform =
      "translate(-39%, -45%) rotate(353deg) translate3d(" +
      valueX +
      "px," +
      valueY +
      "px,0)";
  });
}
mouseMove();

// Function to change title

function changeTitle() {
  const me = document.querySelector(".me");
  const title_portfolio = document.querySelector(".title_portfolio");
  const title_name_front = document.querySelector(".title_name_front");
  const title_name_back = document.querySelector(".title_name_back");
  const title_small = document.querySelector(".title_small");
  const title_small2 = document.querySelector(".title_small2");

  me.addEventListener("mouseover", () => {
    title_name_front.classList.add("title_name_front_active");
    title_name_back.classList.add("title_name_back_active");
    title_portfolio.classList.add("title_portfolio_active");
    title_small.classList.add("title_small_active");
    title_small2.classList.add("title_small2_active");
  });

  me.addEventListener("mouseout", () => {
    title_name_front.classList.remove("title_name_front_active");
    title_name_back.classList.remove("title_name_back_active");
    title_portfolio.classList.remove("title_portfolio_active");
    title_small.classList.remove("title_small_active");
    title_small2.classList.remove("title_small2_active");
  });
}
changeTitle();
