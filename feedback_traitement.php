<?php
require 'lib.inc.php';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$note = $_POST['note'];
$commentaire = $_POST['commentaire'];




$co = connexionBD();
sendFeedBack($co, $prenom, $nom, $email, $note, $commentaire);
deconnexionBD($co);
