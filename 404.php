<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Inconnue - 404</title>
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <div class="cursor_follow"></div>
    <div class="loader">
        <span class="deformation"></span>
        <div class="spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="transition_leave"></div>

    <section class="container_colors">
        <div class="bg_colors"></div>
        <div class="choix_couleurs">
            <button onclick="colorVert()" class="colors vert"></button>
            <button onclick="colorBleu()" class="colors bleu"></button>
            <button onclick="colorViolet()" class="colors violet"></button>
            <button onclick="colorOrange()" class="colors orange"></button>
            <button onclick="colorRose()" class="colors rose"></button>
            <button onclick="colorJaune()" class="colors jaune"></button>
            <button onclick="colorTurquoise()" class="colors turquoise"></button>
            <button onclick="colorRouge()" class="colors rouge"></button>
        </div>
    </section>

    <section class="container_feedback">
        <div class="bg_colors_feedback"></div>
        <div class="feedback">
            <form class="form_feedback" action="feedback_traitement.php" method="post">
                <h1 class="title">Votre avis compte !</h1>
                <p>
                    Vos commentaires m'aideront à comprendre comment les visiteurs
                    perçoivent mon travail et à trouver des moyens pour l'améliorer.
                    <br />
                    <span>Prénom</span>, <span>Nom</span> et <span>Email</span> sont
                    facultatifs
                </p>

                <div class="identite">
                    <div class="name">
                        <input type="text" placeholder="Prénom" name="prenom" id="prenom" />
                        <input type="text" placeholder="Nom" name="nom" id="nom" />
                    </div>
                    <input class="email" type="email" name="email" placeholder="Email" />
                </div>
                <div class="notation">
                    <input type="radio" name="note" id="option-1" value="1" required />
                    <input type="radio" name="note" id="option-2" value="2" required />
                    <input type="radio" name="note" id="option-3" value="3" required />
                    <input type="radio" name="note" id="option-4" value="4" required />
                    <input type="radio" name="note" id="option-5" value="5" required />
                    <input type="radio" name="note" id="option-6" value="6" required />
                    <input type="radio" name="note" id="option-7" value="7" required />
                    <input type="radio" name="note" id="option-8" value="8" required />
                    <input type="radio" name="note" id="option-9" value="9" required />
                    <input type="radio" name="note" id="option-10" value="10" required />

                    <label for="option-1" class="option option-1">
                        <span>1</span>
                    </label>
                    <label for="option-2" class="option option-2">
                        <span>2</span>
                    </label>
                    <label for="option-3" class="option option-3">
                        <span>3</span>
                    </label>
                    <label for="option-4" class="option option-4">
                        <span>4</span>
                    </label>
                    <label for="option-5" class="option option-5">
                        <span>5</span>
                    </label>
                    <label for="option-6" class="option option-6">
                        <span>6</span>
                    </label>
                    <label for="option-7" class="option option-7">
                        <span>7</span>
                    </label>
                    <label for="option-8" class="option option-8">
                        <span>8</span>
                    </label>
                    <label for="option-9" class="option option-9">
                        <span>9</span>
                    </label>
                    <label for="option-10" class="option option-10">
                        <span>10</span>
                    </label>
                </div>
                <p class="error-message">Merci de noter le site sur 10</p>
                <textarea class="message" name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Votre commentaire" required></textarea>
                <div class="interaction">
                    <div class="btn btn_fermer">Fermer</div>
                    <button class="btn btn_envoyer" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </section>

    <?php require 'header.php'; ?>

    <section class="not_found">
        <h1>On dirait que vous vous êtes égaré</h1>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player class="lottie" src="https://assets10.lottiefiles.com/private_files/lf30_k6fpeaa5.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
    </section>
</body>
<?php require 'footer.php'; ?>
<script src="./js/generateColor.js"></script>
<script src="./js/feedback.js"></script>
<script type="module" src="./js/app.js"></script>

</html>