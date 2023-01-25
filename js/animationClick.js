let dpi = window.devicePixelRatio || 1;

window.onload = function () {
  const pagelinks = document.querySelectorAll(".pagelink");

  // Créer un canvas
  let canvas = document.createElement("canvas");
  canvas.style =
    "position: fixed;\n              top: 0;\n              left: 0;\n              width: 100vw;\n              height: 100vh;\n              z-index: 2000;\n              pointer-events: none;";
  document.body.appendChild(canvas);

  // Récupérer le contexte du canvas
  let context = canvas.getContext("2d");

  // Initialiser les dimensions du canvas
  let width = (context.canvas.width = window.innerWidth);
  let height = (context.canvas.height = window.innerHeight);

  // Initialiser la couleur de fond et les valeurs de l'animation
  let backgroundColor = "#FFAAFF";
  let delay = 1.2;
  let animationComplete = false;

  Animation = { value: 1 };
  exitAnimation = { value: 1 };

  // Cette fonction s'exécute lorsque l'utilisateur clique sur un lien
  function animateLink(e) {
    e.preventDefault();
    let link = this.getAttribute("href");

    // Initialiser le fond et les valeurs de l'animation
    backgroundColor = "#E5E3DC";
    Animation.value = 1;
    exitAnimation.value = 1;
    animationComplete = false;

    // Rediriger l'utilisateur vers la page une fois l'animation terminée
    setTimeout(function () {
      document.location.href = link;
    }, delay * 1000);

    // Animer le canvas
    TweenLite.to(exitAnimation, delay, {
      value: 0,
      ease: Power4.easeInOut,
      onComplete: function () {
        animationComplete = true;
      },
    });
  }

  // Cette fonction s'exécute à chaque frame
  RAF.subscribe("overlayUpdate", function () {
    // Effacer le canvas
    context.clearRect(0, 0, width, height);

    // Dessiner un carré sur toute la largeur et la hauteur du canvas
    context.beginPath();
    context.fillStyle = backgroundColor;
    context.rect(0, 0, width, height);
    if (animationComplete) context.fill();
    context.closePath();

    // Dessiner les lignes de l'animation
    context.beginPath();
    context.moveTo(0, height * Animation.value);
    context.quadraticCurveTo(
      width / 2,
      height * Animation.value + 300 * Math.sin(Animation.value * Math.PI),
      width,
      height * Animation.value
    );
    context.lineTo(width, height * exitAnimation.value);
    context.quadraticCurveTo(
      width / 2,
      height * exitAnimation.value +
        -300 * Math.sin(exitAnimation.value * Math.PI),
      0,
      height * exitAnimation.value
    );
    context.line;

    To(0, 0);
    context.closePath();

    // Remplir les lignes avec une couleur
    context.fillStyle = "#0D0D0D";
    context.fill();
  });

  // Ajouter un évènement sur chaque lien
  pagelinks.forEach((link) => {
    link.addEventListener("click", animateLink);
  });
};
