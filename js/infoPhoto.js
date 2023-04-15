function infoPhoto() {
  var cursorDiv = document.querySelector(".cursor_follow");
  var infoInfo = document.querySelectorAll(".info_photo");
  var container_img = document.querySelectorAll(".container_img");

  infoInfo.forEach(function (info, i) {
    info.addEventListener("click", function () {
      container_img[i].classList.toggle("container_img_active");
    });

    info.addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    info.addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  });
}
infoPhoto();
