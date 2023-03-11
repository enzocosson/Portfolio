<!DOCTYPE html>
<html lang="en">
<?php
session_start();
header("Refresh: 4;URL=index.html");
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Portfolio | Validation</title>
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <div class="cursor_follow"></div>


    <section class="validation">
        <div class="validation__container">
            <h1 class="validation__title">Merci pour votre message <?php echo $_SESSION['prenom_user'] ?> !</h1>
            <p class="validation__text">Je vous répondrai dans les plus brefs délais.</p>
            <p class="validation__redirection">Redirection dans un instant...</p>
        </div>
        <div class="loading_redirection"></div>
    </section>

</body>
<script src="./js/generateColor.js"></script>
<script type="module" src="./js/app.js"></script>

</html>