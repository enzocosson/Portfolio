const container_colors = document.querySelector(".container_colors");
const bg_colors = document.querySelector(".bg_colors");
var r = document.querySelector(":root");

function generateColors() {
  container_colors.classList.toggle("container_colors_active");
}

function colorVert() {
  r.style.setProperty("--primary-color", "#2e2e2e");
}
function colorBleu() {
  r.style.setProperty("--primary-color", "#bdb2ff");
}
function colorViolet() {
  r.style.setProperty("--primary-color", "#a0c4ff");
}
function colorOrange() {
  r.style.setProperty("--primary-color", "#41f0d0");
}
function colorRose() {
  r.style.setProperty("--primary-color", "#ffc6ff");
}
function colorJaune() {
  r.style.setProperty("--primary-color", "#ffee93");
}
function colorTurquoise() {
  r.style.setProperty("--primary-color", "#ffd6a5");
}
function colorRouge() {
  r.style.setProperty("--primary-color", "#ffadad");
}

function tapOnScreen() {
  bg_colors.addEventListener("click", () => {
    if (container_colors.classList.contains("container_colors_active")) {
      container_colors.classList.remove("container_colors_active");
    }
  });
}

tapOnScreen();
