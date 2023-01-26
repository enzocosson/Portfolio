const loader = document.querySelector(".loader");

window.addEventListener("load", () => {
  loader.classList.add("loader_finish");
});

// Function to generate random color
const generateColor = () => {
  var r = document.querySelector(":root");

  var listeCouleurs = new Array(
    "70e8cb",
    "a2d2ff",
    "deaaff",
    "ffadad",
    "ffd6a5",
    "a2d2ff",
    "ff99c8",
    "7a7a7a"
  );

  console.log(listeCouleurs);
  let randomColor = Math.floor(Math.random() * listeCouleurs.length);
  var rValue = listeCouleurs[randomColor];

  r.style.setProperty("--green", "#" + rValue);
};
