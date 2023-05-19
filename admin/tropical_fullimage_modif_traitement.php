<?php

require './lib.inc.php';

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $filename = $_POST['filename'];
    $alt = $_POST['alt'];

    $co = connexionBD();

    $req = "UPDATE tropical_fullimage SET photo_src = ?, photo_alt = ? WHERE photo_id = ?";
    $stmt = $co->prepare($req);
    $stmt->execute([$filename, $alt, $id]);

    deconnexionBD($co);

    header("Location: admin_tropical_fullimage_modif.php?id=$id");

    exit;
} else {
    echo '<p>Aucune photo à modifier.</p>';
}
