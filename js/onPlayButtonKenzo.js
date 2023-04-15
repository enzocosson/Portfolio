function onPlayButtonVideoKenzo() {
  const play_kenzo = document.querySelector(".play_kenzo");
  const couverture = document.querySelector(".couverture");
  const video_kenzo = document.querySelector(".video_kenzo");

  play_kenzo.addEventListener("click", () => {
    couverture.classList.add("couverture_active");
    video_kenzo.src = "https://www.youtube.com/embed/mAo0UBh1jPQ?autoplay=1";
  });
}
onPlayButtonVideoKenzo();
