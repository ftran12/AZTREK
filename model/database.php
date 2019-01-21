<?php
require_once __DIR__ . "/../config/parameters.php";
// /var/www/dcpro10/php/cookingchef/model

try {
    $connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
    die;
}

// Chargement des fonctions dans le dossier "tables"
$files = glob(__DIR__ . "/tables/*.php");
foreach ($files as $filepath) {
    require_once $filepath;
}


function getOneEntity(string $table, int $id): array
{

    global $connection;

    $query = "SELECT * FROM $table
    WHERE id = :id";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

//    fetch tout court car on ne recupere qu'une seule donnée
    return $stmt->fetch();

}


function deleteEntity(string $table, int $id)
{
    global $connection;

    $query = "DELETE FROM $table
    WHERE id = :id";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $exception) {
        return $exception;
    }
    return null;

}

function getAllEntities(string $table)
{

    global $connection;

    $query = "SELECT * FROM $table";


    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();

}







