<?php
require '../lib.inc.php';
$co = connexionBD();
if (isset($_GET['id']) && !empty($_GET['id'])) {

    $req = 'DELETE FROM tropical_fullimage WHERE photo_id = ?';

    try {
        $stmt = $co->prepare($req);
        $stmt->execute(array($_GET['id']));
        header('Location: admin_tropical_fullimage.php');
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "L'identifiant de la photo n'a pas été spécifié.";
}

deconnexionBD($co);