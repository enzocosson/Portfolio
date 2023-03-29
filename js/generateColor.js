const container_colors = document.querySelector(".container_colors");
const bg_colors = document.querySelector(".bg_colors");
const r = document.querySelector(":root");
let isWhite = false;

function generateColors() {
  container_colors.classList.toggle("container_colors_active");
}

function setColorAndStoreData(color) {
  const isWhite = color === "#fcfcfc";
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
    localStorage.setItem("white", "#2e2e2e");
  } else {
    r.style.setProperty("--white", "#fcfcfc");
    localStorage.setItem("white", "#fcfcfc");
  }
  r.style.setProperty("--primary-color", color);
  localStorage.setItem("primaryColor", color);
}

function getStoredColor() {
  const storedColor = localStorage.getItem("primaryColor");
  if (storedColor) {
    r.style.setProperty("--primary-color", storedColor);
    isWhite = storedColor === "#fcfcfc";
    const storedWhite = localStorage.getItem("white");
    if (storedWhite) {
      r.style.setProperty("--white", storedWhite);
    }
  } else {
    isWhite = true;
  }
}

function colorVert() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#2e2e2e");
}
function colorBleu() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#bdb2ff");
}
function colorViolet() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#a0c4ff");
}
function colorOrange() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#41f0d0");
}
function colorRose() {
  setColorAndStoreData("#fcfcfc");
  isWhite = true;
}
function colorJaune() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#ffee93");
}
function colorTurquoise() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#ffd6a5");
}
function colorRouge() {
  if (isWhite) {
    r.style.setProperty("--white", "#2e2e2e");
  }
  setColorAndStoreData("#ffadad");
}

function tapOnScreen() {
  bg_colors.addEventListener("click", () => {
    if (container_colors.classList.contains("container_colors_active")) {
      container_colors.classList.remove("container_colors_active");
      const currentColor =
        getComputedStyle(r).getPropertyValue("--primary-color");
      localStorage.setItem("primaryColor", currentColor);
    }
  });
}

getStoredColor();

tapOnScreen();
