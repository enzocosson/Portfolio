<?php
require '././lib.inc.php';

$co = connexionBD();

$filename = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$file_parts = explode('.', $_FILES['photo']['name']);
$file_ext = strtolower(end($file_parts));


$alt = $_POST['alt'];


$new_filename = uniqid('', true) . '.' . $file_ext;
$destination = '././img/photo/tropical/fullimage/' . $new_filename;

if (move_uploaded_file($file_tmp, $destination)) {
    $req = 'INSERT INTO tropical_fullimage (photo_src, photo_alt) VALUES (:src, :alt)';

    try {
        $resultat = $co->prepare($req);
        $resultat->execute(array(
            ':src' => $new_filename,
            ':alt' => $alt,

        ));
        $_SESSION['success_message'] = "La photo a été ajoutée avec succès !";
        header('Location: admin_tropical_fullimage_ajout.php');
        exit();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();

        header('Location: admin_tropical_fullimage_ajout.php');
    }
} else {
    echo '<p>Erreur lors du téléchargement de la photo.</p>';
    die();
}

deconnexionBD($co);
