<?php

function getUtilisateurByEmailMotDePasse(string $email, string $password)
{

    global $connection;
    $query = "
    SELECT * FROM utilisateur
    WHERE email = :email
    AND mot_de_passe = SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();


}

function insertUtilisateur(string $nom, string $prenom, string $pseudo, string $email, string $mot_de_passe) {
    global $connection;

    $query = "
    INSERT INTO utilisateur (nom, prenom, pseudo, email, mot_de_passe, admin)
    VALUES (:nom, :prenom, :pseudo, :email, SHA1(:mot_de_passe), 0)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":pseudo", $pseudo);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $mot_de_passe);
    $stmt->execute();

    return $stmt->execute();

}