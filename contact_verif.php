<?php
require 'lib.inc.php';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$theme = $_POST['theme'];

$co = connexionBD();
sendMessage($co, $prenom, $nom, $email, $theme, $message);
deconnexionBD($co);
