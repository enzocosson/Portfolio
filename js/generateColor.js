// Function to generate random color
// const generateColor = () => {
//   var r = document.querySelector(":root");

//   var listeCouleurs = new Array(
//     "",
//     "a2d2ff",
//     "deaaff",
//     "ffadad",
//     "ffd6a5",
//     "a2d2ff",
//     "ff99c8",
//     "7a7a7a"
//   );

//   console.log(listeCouleurs);
//   let randomColor = Math.floor(Math.random() * listeCouleurs.length);
//   var rValue = listeCouleurs[randomColor];

//   r.style.setProperty("--green", "#" + rValue);
// };

const container_colors = document.querySelector(".container_colors");
const bg_colors = document.querySelector(".bg_colors");

function generateColors() {
  container_colors.classList.toggle("container_colors_active");
}
function colorVert() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#98f5e1");
}
function colorBleu() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#a0c4ff");
}
function colorViolet() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#bdb2ff");
}
function colorOrange() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#ffd6a5");
}
function colorRose() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#ffc6ff");
}
function colorJaune() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#ffd97d");
}
function colorTurquoise() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#9bf6ff");
}
function colorRouge() {
  var r = document.querySelector(":root");
  r.style.setProperty("--green", "#ffadad");
}

function tapOnScreen() {
  bg_colors.addEventListener("click", () => {
    if (container_colors.classList.contains("container_colors_active")) {
      container_colors.classList.remove("container_colors_active");
    }
  });
}

tapOnScreen();
