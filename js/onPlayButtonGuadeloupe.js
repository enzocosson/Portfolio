function onPlayButtonVideoGuadeloupe() {
  const play_guadeloupe = document.querySelector(".play_guadeloupe");
  const couverture = document.querySelector(".couverture");
  const video_guadeloupe = document.querySelector(".video_guadeloupe");

  play_guadeloupe.addEventListener("click", () => {
    couverture.classList.add("couverture_active");
    video_guadeloupe.src =
      "https://www.youtube.com/embed/InO2JlZUKEU?autoplay=1";
  });
}
onPlayButtonVideoGuadeloupe();
