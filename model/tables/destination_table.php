<?php


function getAllSejoursByPays(int $id)
{
    global $connection;

    $query = "
    SELECT *
    FROM destination 
    INNER JOIN sejour ON destination.id = sejour.destination_id
    WHERE destination.id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();

}

function insertDestination(string $titre, string $image)
{
    global $connection;

    $query = "INSERT INTO destination (titre, image) VALUES (:titre, :image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}

function updateDestination(int $id, string $titre, string $image)
{
    global $connection;
    $query = "UPDATE destination SET titre = :titre, image = :image
    WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}