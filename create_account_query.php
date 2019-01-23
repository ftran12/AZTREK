<?php
require_once "model/database.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];

$result = insertUtilisateur($nom, $prenom, $pseudo, $email, $mot_de_passe);

if($result) {
    header("Location: admin/");
}
else{
    header("location: create_account.php");
}



