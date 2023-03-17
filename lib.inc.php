<?php
session_start();
require 'secret_mdp.php';


function connexionBD()
{
    $mabd = null;
    try {
        $mabd = new PDO('mysql:host=localhost;port=3306;dbname=portfolio;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        print 'Erreur : ' . $e->getMessage() . '<br />';
        die();
    }
    return $mabd;
}
function deconnexionBD(&$mabd)
{
    return $mabd = null;
}

function sendMessage($co, $prenom, $nom, $email, $theme, $message)
{
    $date = date('Y-m-d'); // format de date: AAAA-MM-JJ
    $heure = date('H:i:s'); // format d'heure: HH:MM:SS

    // Validation des données d'entrée utilisateur
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['erreur_email'] = "<p class='erreur'>Adresse email invalide</p>";
        header('location:/contact');
        return;
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $prenom)) {
        $_SESSION['erreur_prenom'] = "<p class='erreur'>Le prénom doit contenir uniquement des lettres et des espaces</p>";
        header('location:/contact');
        return;
    }
    if (!preg_match("/^[a-zA-Z ]*$/", $nom)) {
        $_SESSION['erreur_nom'] = "<p class='erreur'>Le nom doit contenir uniquement des lettres et des espaces</p>";
        header('location:/contact');
        return;
    }
    if (strlen($message) > 1000) {
        $_SESSION['erreur_message'] = "<p class='erreur'>Le message est trop long</p>";
        header('location:/contact');
        return;
    }

    $req = 'INSERT INTO contact (prenom, nom, email, theme, message, date, heure) 
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
        header('location:/contact');
        die();
    }
}

// galerie mountain

function mountainPortrait($co)
{
    $req = 'SELECT * FROM mountain_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/mountain/portrait/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function mountainPaysage($co)
{
    $req = 'SELECT * FROM mountain_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/mountain/paysage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function mountainFullImage($co)
{
    $req = 'SELECT * FROM mountain_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/mountain/fullimage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

// galerie tropicale

function tropicalPortrait($co)
{
    $req = 'SELECT * FROM tropical_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/tropical/portrait/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function tropicalPaysage($co)
{
    $req = 'SELECT * FROM tropical_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/tropical/paysage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function tropicalFullImage($co)
{
    $req = 'SELECT * FROM mountain_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/tropical/fullimage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

// galerie gold

function goldPortrait($co)
{
    $req = 'SELECT * FROM gold_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        $count = 0;
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            $count++;
            if ($count > 27) {
                $focal_length = $focal_length . ' mm';
                $iso = 'ISO ' . $iso;
            }


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/gold/portrait/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . '</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function goldPaysage($co)
{
    $req = 'SELECT * FROM gold_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/gold/paysage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function goldFullImage($co)
{
    $req = 'SELECT * FROM mountain_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/gold/fullimage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

// galerie by night

function nightPortrait($co)
{
    $req = 'SELECT * FROM night_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/by_night/portrait/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function nightPaysage($co)
{
    $req = 'SELECT * FROM night_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/by_night/paysage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '<div class="parametres">';
            $output .= '<p>ISO ' . $iso . '</p>';
            $output .= '<p>' . $f_stop . '</p>';
            $output .= '<p>' . $shutter_speed . '</p>';
            $output .= '<p>' . $focal_length . ' mm</p>';
            $output .= '</div>';
            $output .= '<div class="info_photo">i</div>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}

function nightFullImage($co)
{
    $req = 'SELECT * FROM mountain_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $output = '';
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];


            $output .= '<div class="container_img">';
            $output .= '<img class="miniatures" src="./img/photo/by_night/fullimage/' . $filename . '" alt="' . $alt . '"/>';
            $output .= '</div>';
        }
        return $output;
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        die();
    }
}




function adminCards_mountainPaysage($co)
{
    $req = 'SELECT * FROM mountain_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/mountain/paysage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_mountain_paysage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_mountainFullimage($co)
{
    $req = 'SELECT * FROM mountain_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $id = $row['photo_id'];


            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/mountain/fullimage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_mountain_fullimage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}


function adminCards_tropicalPortrait($co)
{
    $req = 'SELECT * FROM tropical_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/tropical/portrait/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_tropical_portrait_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_tropicalPaysage($co)
{
    $req = 'SELECT * FROM tropical_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/tropical/paysage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_tropical_paysage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_tropicalFullimage($co)
{
    $req = 'SELECT * FROM tropical_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $id = $row['photo_id'];


            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/tropical/fullimage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_tropical_fullimage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_goldPortrait($co)
{
    $req = 'SELECT * FROM gold_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        $count = 0;
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {

            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            $count++;
            if ($count > 27) {
                $focal_length = $focal_length . ' mm';
                $iso = 'ISO ' . $iso;
            }

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/gold/portrait/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_gold_portrait_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_goldPaysage($co)
{
    $req = 'SELECT * FROM gold_paysage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/gold/paysage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_gold_paysage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_goldFullimage($co)
{
    $req = 'SELECT * FROM gold_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $id = $row['photo_id'];


            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/gold/fullimage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_gold_fullimage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}


function adminCards_by_nightPortrait($co)
{
    $req = 'SELECT * FROM night_portrait';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/by_night/portrait/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_by_night_portrait_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_by_nightPaysage($co)
{
    $req = 'SELECT * FROM night_paysage';

    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $iso = $row['photo_iso'];
            $f_stop = $row['photo_ouverture'];
            $shutter_speed = $row['photo_duree'];
            $focal_length = $row['photo_focale'];
            $id = $row['photo_id'];

            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/by_night/paysage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '<p class="setting_iso">ISO ' . $iso . '</p>';
            echo '<p class="setting_ouverture">' . $f_stop . '</p>';
            echo '<p class="setting_duree">' . $shutter_speed . '</p>';
            echo '<p class="setting_focale">' . $focal_length . ' mm</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_by_night_paysage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}

function adminCards_by_nightFullimage($co)
{
    $req = 'SELECT * FROM night_fullimage';
    try {
        $resultat = $co->prepare($req);
        $resultat->execute();
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat !== false) {
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $filename = $row['photo_src'];
            $alt = $row['photo_alt'];
            $id = $row['photo_id'];


            echo '<div class="cards">';
            echo '<div class="information_photo">';
            echo '<div class="container_img">';
            echo '<img src="../img/photo/by_night/fullimage/' . $filename . '" alt="' . $alt . '" class="img" />';
            echo '</div>';
            echo '<div class="container_settings">';
            echo '<p class="setting_alt">' . $alt . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="interaction_photo">';
            echo '<a class="modifier" href="admin_by_night_fullimage_modif.php?id=' . $id . '">Modifier</a>';
            echo '<a class="supprimer" href="admin_mountain_portrait_suppr.php?id=' . $id . '">Supprimer</a>';
            echo '</div>';
            echo '</div>';
        }
    }
}
