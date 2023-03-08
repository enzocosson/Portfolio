export function onPlayButtonVideoGuadeloupe() {
  const play_guadeloupe = document.querySelector(".play_guadeloupe");
  const couverture = document.querySelector(".couverture");
  const video_guadeloupe = document.querySelector(".video_guadeloupe");

  play_guadeloupe.addEventListener("click", () => {
    couverture.classList.add("couverture_active");
    video_guadeloupe.src = "?autoplay=1";
  });
}
export function onPlayButtonVideoAuvergne() {
  const play_auvergne = document.querySelector(".play_auvergne");
  const couverture = document.querySelector(".couverture");
  const video_auvergne = document.querySelector(".video_auvergne");

  play_auvergne.addEventListener("click", () => {
    couverture.classList.add("couverture_active");
    video_auvergne.src = "https://www.youtube.com/embed/a-VOREJWetA?autoplay=1";
  });
}
export function onPlayButtonVideoKenzo() {
  const play_kenzo = document.querySelector(".play_kenzo");
  const couverture = document.querySelector(".couverture");
  const video_kenzo = document.querySelector(".video_kenzo");

  play_kenzo.addEventListener("click", () => {
    couverture.classList.add("couverture_active");
    video_kenzo.src = "https://www.youtube.com/embed/mAo0UBh1jPQ?autoplay=1";
  });
}
