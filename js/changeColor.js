const generateColor = () => {
  var r = document.querySelector(":root");

  var listeCouleurs = new Array(
    "a2d2ff",
    "deaaff",
    "ffadad",
    "ffd6a5",
    "a2d2ff",
    "ff99c8"
  );

  console.log(listeCouleurs);
  let randomColor = Math.floor(Math.random() * listeCouleurs.length);
  var rValue = listeCouleurs[randomColor];

  r.style.setProperty("--green", "#" + rValue);
};
