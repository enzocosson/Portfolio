<!DOCTYPE html>
<html lang="en">
<?php
session_start();
header("Refresh: 2;URL=/accueil");
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Portfolio | Validation</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <div class="cursor_follow"></div>


    <section class="validation_feedback">
        <div class="validation__container">
            <h1 class="validation__title">Merci pour votre commentaire <?php echo $_SESSION['prenom_user'] ?> !</h1>
            <p class="validation__redirection">Redirection dans un instant...</p>
        </div>
        <div class="loading_redirection"></div>
    </section>

</body>

<script type="module" src="./js/app.js"></script>

</html>