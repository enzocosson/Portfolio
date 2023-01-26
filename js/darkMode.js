const darkMode = document.querySelector(".darkMode");
const logo_dark_modeOn = document.querySelector(".logo_dark_modeOn");
const logo_dark_modeOff = document.querySelector(".logo_dark_modeOff");

darkMode.addEventListener("click", () => {
  logo_dark_modeOn.classList.toggle("logo_dark_modeOn_active");
  logo_dark_modeOff.classList.toggle("logo_dark_modeOff_active");
  var r = document.querySelector(":root");
  const social_img_white = document.querySelector(".social_img_white");
  const social_img_black = document.querySelector(".social_img_black");
  const logo_white = document.querySelector(".logo_white");
  const logo_black = document.querySelector(".logo_black");
  const bg_interaction = document.querySelector(".bg_interaction");
  const imac_soda = document.querySelector(".imac_soda");
  const imac_soda_black = document.querySelector(".imac_soda_black");

  if (logo_dark_modeOn.classList.contains("logo_dark_modeOn_active")) {
    r.style.setProperty("--white", "#232323");
    r.style.setProperty("--black", "#fcfcfc");
    imac_soda.classList.add("imac_soda_active");
    imac_soda_black.classList.add("imac_soda_black_active");
    social_img_white.classList.add("social_img_white_active");
    social_img_black.classList.add("social_img_black_active");
    logo_white.classList.add("logo_white_active");
    logo_black.classList.add("logo_black_active");
    bg_interaction.classList.add("bg_interaction_active");
  } else {
    r.style.setProperty("--white", "#fcfcfc");
    r.style.setProperty("--black", "#232323");
    imac_soda.classList.remove("imac_soda_active");
    imac_soda_black.classList.remove("imac_soda_black_active");
    social_img_white.classList.remove("social_img_white_active");
    social_img_black.classList.remove("social_img_black_active");
    logo_white.classList.remove("logo_white_active");
    logo_black.classList.remove("logo_black_active");
    bg_interaction.classList.remove("bg_interaction_active");
  }
});
