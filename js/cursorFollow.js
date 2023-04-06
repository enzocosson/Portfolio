export function cursorFollow() {
  var cursorDiv = document.querySelector(".cursor_follow");

  document.addEventListener("mousemove", function (e) {
    cursorDiv.style.left = e.clientX + "px";
    cursorDiv.style.top = e.clientY + "px";
  });

  var li = document.querySelectorAll("li");
  for (var i = 0; i < li.length; i++) {
    li[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    li[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  }

  var button = document.querySelectorAll("button");
  for (var i = 0; i < button.length; i++) {
    button[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    button[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  }

  var a = document.querySelectorAll("a");
  for (var i = 0; i < a.length; i++) {
    a[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    a[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  }

  var play = document.querySelectorAll(".play");
  for (var i = 0; i < play.length; i++) {
    play[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    play[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  }

  var option_contact = document.querySelectorAll(".option_contact");
  for (var i = 0; i < option_contact.length; i++) {
    option_contact[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    option_contact[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  }

  var envoyer = document.querySelectorAll(".envoyer");
  for (var i = 0; i < envoyer.length; i++) {
    envoyer[i].addEventListener("mouseover", function () {
      cursorDiv.style.width = "60px";
      cursorDiv.style.height = "60px";
      cursorDiv.style.backgroundColor = "transparent";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color) inset";
    });

    envoyer[i].addEventListener("mouseout", function () {
      cursorDiv.style.width = "20px";
      cursorDiv.style.height = "20px";
      cursorDiv.style.backgroundColor = "var(--white)";
      cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--primary-color)";
    });
  }
}
