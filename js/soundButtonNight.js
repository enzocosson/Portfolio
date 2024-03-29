function soundButtonNight() {
  var cursorDiv = document.querySelector(".cursor_follow");
  var soundButton = document.querySelectorAll(".sound_button");
  const nightSound = document.querySelector(".night_sound");

  for (var i = 0; i < soundButton.length; i++) {
    soundButton[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    soundButton[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });

    soundButton[i].addEventListener("click", function () {
      this.classList.toggle("sound_button_muted");
      if (nightSound.paused) {
        nightSound.play();
        soundButton.classList.add("playing");
      } else {
        nightSound.pause();
        soundButton.classList.remove("playing");
      }
    });
  }
}
soundButtonNight();
