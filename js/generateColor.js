const container_colors = document.querySelector(".container_colors");
const bg_colors = document.querySelector(".bg_colors");
const r = document.querySelector(":root");

function generateColors() {
  container_colors.classList.toggle("container_colors_active");
}

// Fonction pour définir la couleur et stocker les données localement
function setColorAndStoreData(color) {
  r.style.setProperty("--primary-color", color);
  localStorage.setItem("primaryColor", color);
}

// Fonction pour récupérer les données de couleur stockées localement
function getStoredColor() {
  const storedColor = localStorage.getItem("primaryColor");
  if (storedColor) {
    r.style.setProperty("--primary-color", storedColor);
  }
}

// Fonctions pour les couleurs
function colorVert() {
  setColorAndStoreData("#2e2e2e");
}
function colorBleu() {
  setColorAndStoreData("#bdb2ff");
}
function colorViolet() {
  setColorAndStoreData("#a0c4ff");
}
function colorOrange() {
  setColorAndStoreData("#41f0d0");
}
function colorRose() {
  setColorAndStoreData("#ffc6ff");
}
function colorJaune() {
  setColorAndStoreData("#ffee93");
}
function colorTurquoise() {
  setColorAndStoreData("#ffd6a5");
}
function colorRouge() {
  setColorAndStoreData("#ffadad");
}

// Fonction pour masquer la boîte de couleurs lorsqu'elle est active et stocker les données de couleur localement
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

// Appeler la fonction pour récupérer les données de couleur stockées localement
getStoredColor();

// Appeler la fonction pour masquer la boîte de couleurs lorsqu'elle est active et stocker les données de couleur localement
tapOnScreen();
