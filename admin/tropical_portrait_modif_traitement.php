<?php

require '../lib.inc.php';

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $filename = $_POST['filename'];
    $alt = $_POST['alt'];
    $iso = $_POST['iso'];
    $f_stop = $_POST['f_stop'];
    $shutter_speed = $_POST['shutter_speed'];
    $focal_length = $_POST['focal_length'];

    $co = connexionBD();

    $req = "UPDATE tropical_portrait SET photo_src = ?, photo_alt = ?, photo_iso = ?, photo_ouverture = ?, photo_duree = ?, photo_focale = ? WHERE photo_id = ?";
    $stmt = $co->prepare($req);
    $stmt->execute([$filename, $alt, $iso, $f_stop, $shutter_speed, $focal_length, $id]);

    deconnexionBD($co);

    header("Location: admin_tropical_portrait_modif.php?id=$id");

    exit;
} else {
    echo '<p>Aucune photo à modifier.</p>';
}
