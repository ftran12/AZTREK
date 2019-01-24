<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneEntity("sejour", $id);
$titre = $_POST['titre'];
$duree = $_POST['duree'];
$description = $_POST['description'];
$difficulte_id = $_POST['difficulte_id'];
$destination_id = $_POST['destination_id'];
$prix_indicatif = $_POST['prix_indicatif'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejour($id, $titre, $duree, $filename, $description, $difficulte_id, $destination_id, $prix_indicatif );

header('Location: index.php');
