<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$destination = getOneEntity("destination", $id);
$titre = $_POST['titre'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $destination["image"];
}

updateDestination($id, $titre, $filename);

header('Location: index.php');
