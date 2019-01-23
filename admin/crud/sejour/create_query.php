<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$duree = $_POST['duree'];
$prix_indicatif = $_POST['prix_indicatif'];
$description = $_POST['description'];
$difficulte_id = $_POST['difficute_id'];
$destination_id = $_POST['destination_id'];


// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertRecette($titre, $filename, $duree,  $prix_indicatif, $description,
    $difficulte_id, $destination_id);

header('Location: index.php');

