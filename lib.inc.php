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

    $req = 'INSERT INTO portfolio (prenom, nom, email, theme, message, date, heure) 
    VALUES ("' . $prenom . '","' . $nom . '","' . $email . '","' . $theme . '","' . $message . '","' . $date . '","' . $heure . '")';

    echo $req;
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }

    if ($resultat !== false) {
        $_SESSION['prenom_user'] = $prenom;
        echo $_SESSION['prenom_user'];

        // Envoi du mail
        $to = "enzolemercier@gmail.com";
        $subject = "Nouvelle inscription dans la base de données";
        $body = "Une nouvelle ligne a été insérée dans la base de données.\n\n";
        $body .= "Prénom : $prenom\n";
        $body .= "Nom : $nom\n";
        $body .= "Email : $email\n";
        $body .= "Thème : $theme\n";
        $body .= "Message : $message\n";
        $headers = "From: enzolemercier@gmail.com";
        mail($to, $subject, $body, $headers);

        // header('location:index.html');
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        // header('location:contact.php');
        die();
    }
}





function deconnexionBD(&$mabd)
{
    return $mabd = null;
}
