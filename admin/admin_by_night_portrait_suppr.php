<?php
require '../lib.inc.php';
$co = connexionBD();
if (isset($_GET['id']) && !empty($_GET['id'])) {

    $req = 'DELETE FROM night_portrait WHERE photo_id = ?';

    try {
        $stmt = $co->prepare($req);
        $stmt->execute(array($_GET['id']));
        header('Location: admin_by_night_portrait.php');
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "L'identifiant de la photo n'a pas été spécifié.";
}

deconnexionBD($co);
