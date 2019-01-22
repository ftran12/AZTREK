<?php

/**
 * @param int $id
 * @return array
 */
function getOneSejour(int $id): array
{
    global $connection;
    $query = "
    SELECT
        sejour.*,
        destination.titre AS destination,
        difficulte.libelle AS difficulte
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

