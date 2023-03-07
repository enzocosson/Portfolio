export function onPlayButtonVideo() {
    const play = document.querySelector(".play");
    const couverture = document.querySelector(".couverture");
    const iframe = document.querySelector("iframe");
  
    play.addEventListener("click", () => {
      couverture.classList.add("couverture_active");
      iframe.src = "https://www.youtube.com/embed/mAo0UBh1jPQ?autoplay=1";
    });
  }