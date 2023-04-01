console.log("feedback.js is loaded");
const container_feedback = document.querySelector(".container_feedback");
const bg_colors_feedback = document.querySelector(".bg_colors_feedback");

var sound_click_colors = document.querySelector(".sound_click_colors");

function generateFeedback() {
  container_feedback.classList.toggle("container_feedback_active");
  sound_click_colors.play();
}

function closeFormFeedback() {
  document.querySelector(".btn_fermer").addEventListener("click", function () {
    container_feedback.classList.remove("container_feedback_active");
  });
}
closeFormFeedback();

function tapOnScreen() {
  bg_colors_feedback.addEventListener("click", () => {
    if (container_feedback.classList.contains("container_feedback_active")) {
      container_feedback.classList.remove("container_feedback_active");
    }
  });
  leave_colors_sound.play();
}
tapOnScreen();

function errorFeedback() {
  const form = document.querySelector(".form_feedback");
  const btn_envoyer = document.querySelector(".btn_envoyer");
  const radios = form.querySelectorAll("input[type=radio]");
  const errorMessage = document.querySelector(".error-message");

  btn_envoyer.addEventListener("click", (event) => {
    console.log("submit");
    let checked = false;
    radios.forEach((radio) => {
      if (radio.checked) {
        checked = true;
      }
    });
    if (!checked) {
      event.preventDefault();
      errorMessage.style.display = "block";
    }
  });
}
errorFeedback();
