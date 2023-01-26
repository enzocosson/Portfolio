// function to activate title_dev_web_front and title_dev_web_back when the mouse is over the button btn_photo
const home = document.querySelector(".home");
const title_dev_web_front = document.querySelector(".title_dev_web_front");
const title_dev_web_back = document.querySelector(".title_dev_web_back");

const title_photo_video_front = document.querySelector(
  ".title_photo_video_front"
);
const title_photo_video_back = document.querySelector(
  ".title_photo_video_back"
);
const title_portfolio = document.querySelector(".title_portfolio");

const btn_dev = document.querySelector(".btn_dev");
const btn_photo = document.querySelector(".btn_photo");

btn_dev.addEventListener("mouseover", () => {
  title_dev_web_front.classList.add("title_dev_web_front_active");
  title_dev_web_back.classList.add("title_dev_web_back_active");

  title_portfolio.classList.add("title_portfolio_active");
  home.classList.add("home_active");
});

btn_dev.addEventListener("mouseout", () => {
  title_dev_web_front.classList.remove("title_dev_web_front_active");
  title_dev_web_back.classList.remove("title_dev_web_back_active");

  title_portfolio.classList.remove("title_portfolio_active");
  home.classList.remove("home_active");
});

btn_photo.addEventListener("mouseover", () => {
  title_photo_video_front.classList.add("title_photo_video_front_active");
  title_photo_video_back.classList.add("title_photo_video_back_active");

  title_portfolio.classList.add("title_portfolio_active");
  home.classList.add("home_active");
});

btn_photo.addEventListener("mouseout", () => {
  title_photo_video_front.classList.remove("title_photo_video_front_active");
  title_photo_video_back.classList.remove("title_photo_video_back_active");

  title_portfolio.classList.remove("title_portfolio_active");
  home.classList.remove("home_active");
});
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
