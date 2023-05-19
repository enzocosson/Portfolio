<?php
require '././lib.inc.php';

$co = connexionBD();

$filename = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$file_parts = explode('.', $_FILES['photo']['name']);
$file_ext = strtolower(end($file_parts));


$alt = $_POST['alt'];
$iso = $_POST['iso'];
$ouverture = $_POST['ouverture'];
$duree = $_POST['duree'];
$focale = $_POST['focale'];

$new_filename = uniqid('', true) . '.' . $file_ext;
$destination = '././img/photo/gold/paysage/' . $new_filename;

if (move_uploaded_file($file_tmp, $destination)) {
    $req = 'INSERT INTO gold_paysage (photo_src, photo_alt, photo_iso, photo_ouverture, photo_duree, photo_focale) VALUES (:src, :alt, :iso, :ouverture, :duree, :focale)';

    try {
        $resultat = $co->prepare($req);
        $resultat->execute(array(
            ':src' => $new_filename,
            ':alt' => $alt,
            ':iso' => $iso,
            ':ouverture' => $ouverture,
            ':duree' => $duree,
            ':focale' => $focale
        ));
        $_SESSION['success_message'] = "La photo a été ajoutée avec succès !";
        header('Location: admin_gold_paysage_ajout.php');
        exit();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();

        header('Location: admin_gold_paysage_ajout.php');
    }
} else {
    echo '<p>Erreur lors du téléchargement de la photo.</p>';
    die();
}

deconnexionBD($co);
