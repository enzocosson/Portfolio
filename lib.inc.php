<?php
session_start();
require 'secret_mdp.php';


function connexionBD()
{
    $mabd = null;
    try {
        $mabd = new PDO('mysql:host=localhost;port=3306;dbname=mmi21e03;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        print 'Erreur : ' . $e->getMessage() . '<br />';
        die();
    }
    return $mabd;
}


function sendMessage($co, $prenom, $nom, $email, $theme, $message)
{
    $date = date('Y-m-d'); // format de date: AAAA-MM-JJ
    $heure = date('H:i:s'); // format d'heure: HH:MM:SS

    // Validation des données d'entrée utilisateur
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erreur_email'] = "<p class='erreur'>Adresse email invalide</p>";
        header('location:contact.php');
        return;
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $prenom)) {
        $_SESSION['erreur_prenom'] = "<p class='erreur'>Le prénom doit contenir uniquement des lettres et des espaces</p>";
        header('location:contact.php');
        return;
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $nom)) {
        $_SESSION['erreur_nom'] = "<p class='erreur'>Le nom doit contenir uniquement des lettres et des espaces</p>";
        header('location:contact.php');
        return;
    }
    if (strlen($message) > 1000) {
        $_SESSION['erreur_message'] = "<p class='erreur'>Le message est trop long</p>";
        header('location:contact.php');
        return;
    }

    $req = 'INSERT INTO portfolio (prenom, nom, email, theme, message, date, heure) 
            VALUES (:prenom, :nom, :email, :theme, :message, :date, :heure)';

    try {
        $resultat = $co->prepare($req);
        $resultat->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $resultat->bindParam(':nom', $nom, PDO::PARAM_STR);
        $resultat->bindParam(':email', $email, PDO::PARAM_STR);
        $resultat->bindParam(':theme', $theme, PDO::PARAM_STR);
        $resultat->bindParam(':message', $message, PDO::PARAM_STR);
        $resultat->bindParam(':date', $date, PDO::PARAM_STR);
        $resultat->bindParam(':heure', $heure, PDO::PARAM_STR);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $_SESSION['prenom_user'] = htmlspecialchars($prenom);
        header('location:validation.php');
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        header('location:contact.php');
        die();
    }
}





function deconnexionBD(&$mabd)
{
    return $mabd = null;
}
