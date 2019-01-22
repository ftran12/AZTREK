<?php

//function insertDestination(string $titre)
//{
 //   global $connection;

//    $query = "INSERT INTO  destination(titre) VALUE  (:titre)";

 //   $stmt = $connection->prepare($query);
 //   $stmt->bindParam(":titre", $titre);
 //   $stmt->execute();//



//}

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