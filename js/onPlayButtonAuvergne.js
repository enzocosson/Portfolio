function onPlayButtonVideoAuvergne() {
  const play_auvergne = document.querySelector(".play_auvergne");
  const couverture = document.querySelector(".couverture");
  const video_auvergne = document.querySelector(".video_auvergne");

  play_auvergne.addEventListener("click", () => {
    couverture.classList.add("couverture_active");
    video_auvergne.src = "https://www.youtube.com/embed/a-VOREJWetA?autoplay=1";
  });
}
onPlayButtonVideoAuvergne();
