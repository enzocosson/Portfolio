export function darkModeIndex() {
  const darkMode = document.querySelector(".darkMode");

  // Fonction pour définir la couleur et stocker les données localement
  function setColorAndStoreData(color, key) {
    r.style.setProperty(color, key);
    localStorage.setItem(color, key);
  }

  // Fonction pour récupérer les données de couleur stockées localement
  function getStoredColor(color, property) {
    const storedColor = localStorage.getItem(color);
    if (storedColor) {
      r.style.setProperty(property, storedColor);
    }
  }

  const r = document.querySelector(":root");
  const social_img_white = document.querySelector(".social_img_white");
  const social_img_black = document.querySelector(".social_img_black");
  const logo_white = document.querySelector(".logo_white");
  const logo_black = document.querySelector(".logo_black");
  const imac_soda = document.querySelector(".imac_soda");
  const imac_soda_black = document.querySelector(".imac_soda_black");

  // Appeler la fonction pour récupérer les données de couleur stockées localement
  getStoredColor("--white", "--white");
  getStoredColor("--black", "--black");

  darkMode.addEventListener("click", () => {
    darkMode.classList.toggle("darkMode_active");

    if (darkMode.classList.contains("darkMode_active")) {
      setColorAndStoreData("--white", "#232323");
      setColorAndStoreData("--black", "#fcfcfc");
      imac_soda.classList.add("imac_soda_active");
      imac_soda_black.classList.add("imac_soda_black_active");
      social_img_white.classList.add("social_img_white_active");
      social_img_black.classList.add("social_img_black_active");
      logo_white.classList.add("logo_white_active");
      logo_black.classList.add("logo_black_active");
    } else {
      setColorAndStoreData("--white", "#fcfcfc");
      setColorAndStoreData("--black", "#232323");
      imac_soda.classList.remove("imac_soda_active");
      imac_soda_black.classList.remove("imac_soda_black_active");
      social_img_white.classList.remove("social_img_white_active");
      social_img_black.classList.remove("social_img_black_active");
      logo_white.classList.remove("logo_white_active");
      logo_black.classList.remove("logo_black_active");
    }
  });
}

export function darkModeDev() {
  const darkMode = document.querySelector(".darkMode");
  const myProject_img_white = document.querySelector(".myProject_img_white");
  const myProject_img_black = document.querySelector(".myProject_img_black");
  const logo_white = document.querySelector(".logo_white");
  const logo_black = document.querySelector(".logo_black");

  // Fonction pour définir la couleur et stocker les données localement
  function setColorAndStoreData(color) {
    r.style.setProperty("--white", color.white);
    r.style.setProperty("--black", color.black);
    localStorage.setItem("colorMode", JSON.stringify(color));
  }

  // Fonction pour récupérer les données de couleur stockées localement
  function getStoredColor() {
    const storedColor = localStorage.getItem("colorMode");
    if (storedColor) {
      const parsedColor = JSON.parse(storedColor);
      r.style.setProperty("--white", parsedColor.white);
      r.style.setProperty("--black", parsedColor.black);
      if (parsedColor.darkModeActive) {
        darkMode.classList.add("darkMode_active");
        logo_white.classList.add("logo_white_active");
        logo_black.classList.add("logo_black_active");
        myProject_img_white.classList.add("myProject_img_white_active");
        myProject_img_black.classList.add("myProject_img_black_active");
      }
    }
  }

  darkMode.addEventListener("click", () => {
    var r = document.querySelector(":root");
    darkMode.classList.toggle("darkMode_active");

    if (darkMode.classList.contains("darkMode_active")) {
      const color = {
        white: "#232323",
        black: "#fcfcfc",
        darkModeActive: true,
      };
      setColorAndStoreData(color);
    } else {
      const color = {
        white: "#fcfcfc",
        black: "#232323",
        darkModeActive: false,
      };
      setColorAndStoreData(color);
    }
  });

  // Appeler la fonction pour récupérer les données de couleur stockées localement
  getStoredColor();
}

export function darkModeSite() {
  const darkMode = document.querySelector(".darkMode");
  const logo_white = document.querySelector(".logo_white");
  const logo_black = document.querySelector(".logo_black");

  darkMode.addEventListener("click", () => {
    var r = document.querySelector(":root");
    darkMode.classList.toggle("darkMode_active");

    if (darkMode.classList.contains("darkMode_active")) {
      r.style.setProperty("--white", "#232323");
      r.style.setProperty("--black", "#fcfcfc");
      logo_white.classList.add("logo_white_active");
      logo_black.classList.add("logo_black_active");
      localStorage.setItem("darkModeSite", "true");
    } else {
      r.style.setProperty("--white", "#fcfcfc");
      r.style.setProperty("--black", "#232323");
      logo_white.classList.remove("logo_white_active");
      logo_black.classList.remove("logo_black_active");
      localStorage.setItem("darkModeSite", "false");
    }
  });

  const darkModeSite = localStorage.getItem("darkModeSite");
  if (darkModeSite === "true") {
    darkMode.click();
  }
}

export function darkModeSiteContact() {
  const darkMode = document.querySelector(".darkMode");
  const logo_white = document.querySelector(".logo_white");
  const logo_black = document.querySelector(".logo_black");
  const word_contact_black = document.querySelector(".word_contact_black");

  darkMode.addEventListener("click", () => {
    var r = document.querySelector(":root");
    darkMode.classList.toggle("darkMode_active");

    if (darkMode.classList.contains("darkMode_active")) {
      r.style.setProperty("--white", "#232323");
      r.style.setProperty("--black", "#fcfcfc");
      logo_white.classList.add("logo_white_active");
      logo_black.classList.add("logo_black_active");
      word_contact_black.classList.add("word_contact_black_active");
      localStorage.setItem("darkModeSiteContact", "true");
    } else {
      r.style.setProperty("--white", "#fcfcfc");
      r.style.setProperty("--black", "#232323");
      logo_white.classList.remove("logo_white_active");
      logo_black.classList.remove("logo_black_active");
      word_contact_black.classList.remove("word_contact_black_active");
      localStorage.setItem("darkModeSiteContact", "false");
    }
  });

  const darkModeSiteContact = localStorage.getItem("darkModeSiteContact");
  if (darkModeSiteContact === "true") {
    darkMode.click();
  }
}

export function darkModeGalerie() {
  const darkMode = document.querySelector(".darkMode");
  const logo_white_galerie = document.querySelector(".logo_white_galerie");
  const logo_black_galerie = document.querySelector(".logo_black_galerie");

  darkMode.addEventListener("click", () => {
    var r = document.querySelector(":root");
    darkMode.classList.toggle("darkMode_active");

    if (darkMode.classList.contains("darkMode_active")) {
      r.style.setProperty("--white", "#232323");
      r.style.setProperty("--black", "#fcfcfc");
      logo_white_galerie.classList.add("logo_white_galerie_active");
      logo_black_galerie.classList.add("logo_black_galerie_active");
      localStorage.setItem("darkModeGalerie", "true");
    } else {
      r.style.setProperty("--white", "#fcfcfc");
      r.style.setProperty("--black", "#232323");
      logo_white_galerie.classList.remove("logo_white_galerie_active");
      logo_black_galerie.classList.remove("logo_black_galerie_active");
      localStorage.setItem("darkModeGalerie", "false");
    }
  });

  const darkModeGalerie = localStorage.getItem("darkModeGalerie");
  if (darkModeGalerie === "true") {
    darkMode.click();
  }
}
