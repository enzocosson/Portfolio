export function cursorFollow() {
    var cursorDiv = document.querySelector(".cursor_follow");
  
    document.addEventListener("mousemove", function(e) {
      cursorDiv.style.left = e.clientX + "px";
      cursorDiv.style.top = e.clientY + "px";
    });
  
    // Ajouter un événement de survol sur tous les liens
    var li = document.querySelectorAll("li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("mouseover", function() {
        cursorDiv.style.width = "60px";
        cursorDiv.style.height = "60px";
        cursorDiv.style.backgroundColor = "transparent"
        cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--green) inset";
      });
      
      // Réinitialiser la taille du curseur lorsque l'utilisateur sort du lien
      li[i].addEventListener("mouseout", function() {
        cursorDiv.style.width = "20px";
        cursorDiv.style.height = "20px";
        cursorDiv.style.backgroundColor = "var(--white)"
        cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--green)";
      });
    }

    var button = document.querySelectorAll("button");
    for (var i = 0; i < button.length; i++) {
      button[i].addEventListener("mouseover", function() {
        cursorDiv.style.width = "60px";
        cursorDiv.style.height = "60px";
        cursorDiv.style.backgroundColor = "transparent"
        cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--green) inset";
      });
      
      // Réinitialiser la taille du curseur lorsque l'utilisateur sort du lien
      button[i].addEventListener("mouseout", function() {
        cursorDiv.style.width = "20px";
        cursorDiv.style.height = "20px";
        cursorDiv.style.backgroundColor = "var(--white)"
        cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--green)";
      });
    }

    var a = document.querySelectorAll("a");
    for (var i = 0; i < a.length; i++) {
      a[i].addEventListener("mouseover", function() {
        cursorDiv.style.width = "60px";
        cursorDiv.style.height = "60px";
        cursorDiv.style.backgroundColor = "transparent"
        cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--green) inset";
      });
      
      // Réinitialiser la taille du curseur lorsque l'utilisateur sort du lien
      a[i].addEventListener("mouseout", function() {
        cursorDiv.style.width = "20px";
        cursorDiv.style.height = "20px";
        cursorDiv.style.backgroundColor = "var(--white)"
        cursorDiv.style.boxShadow = "0px 0px 15px 0px var(--green)";
      });
    }

  
  }
  