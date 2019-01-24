<?php


function getOneSejour(int $id): array
{
    global $connection;
    $query = "
    SELECT
        sejour.*,
        destination.titre AS destination,
        difficulte.libelle AS difficulte_libelle,
        difficulte.niveau AS difficulte_niveau,
        depart.date_depart AS date_depart
    FROM sejour
    INNER JOIN destination ON sejour.destination_id = destination.id 
    INNER JOIN difficulte ON sejour.difficulte_id = difficulte.id
    LEFT JOIN depart ON sejour.id = depart.sejour_id
    LEFT JOIN depart_has_utilisateur dhu on depart.id = dhu.depart_id 
    WHERE sejour.id = :id
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();

}

function getAllSejour()
{
    global $connection;

    $query = "SELECT * 
    FROM sejour";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchALL();


}

function insertSejour(string $titre, string $image,int $duree, string $description,
                      int $difficulte_id, int $destination_id,  int $prix_indicatif)
{
    global $connection;

    $query = "
    INSERT INTO sejour (titre, image, duree, description, difficulte_id, destination_id, prix_indicatif)
    VALUES (:titre, :image, :duree, :description, :difficulte_id, :destination_id, :prix_indicatif)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":destination_id", $destination_id);
    $stmt->bindParam(":prix_indicatif", $prix_indicatif);

    $stmt->execute();
}


function updateSejour(int $id, $titre){
    global $connection;
    $query = "UPDATE sejour SET titre = :titre WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam("titre", $titre);
    $stmt->execute();
}



