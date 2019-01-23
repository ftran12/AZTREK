<?php
require_once "model/database.php";
require_once "functions.php";


$id = $_GET["id"];
$sejour = getOneSejour($id);
$destination = getOneEntity("destination", $id);
$departs = getAllDepartBySejour($id);


getHeader("Accueil", "Aztrek")
?>
    <body class="home-1">
<header class="page-header">

    <?php getMenu(); ?>
</header>
<h2>Destination : <?= $destination["titre"]; ?></h2>
<h1><?= $sejour["titre"]; ?></h1>

<section class="container section-sejours">

    <article class="voyage-sejour-detail">
        <header class="header-article-sejour">
            <div class="nuitees"><a href="#"><i class="far fa-calendar-alt"></i></a> <?= $sejour["duree"]; ?></div>
            <div class="tarif"><a href="#"><i class="fas fa-euro-sign"></i></a> à
                partir <?= $sejour["prix_indicatif"]; ?>€
            </div>
            <div class="niveau"><a href="#"><i class="fas fa-signal"></i></a> <?= $sejour["difficulte_libelle"]; ?> (niveau <?= $sejour["difficulte_niveau"]; ?>/5)</div>
        </header>

        <div class="img-wrapper">
            <img src="uploads/<?= $sejour["image"]; ?>" alt="voyage au Mexique">
        </div>
        <div class="descr-voyage">
            <p><?= $sejour["description"]; ?></p>


    </article>
</section>

<table>
    <tr>
        <th>Date de départ</th>
        <th>Date de retour</th>
        <th>Prix</th>
        <th>Places restantes</th>
        <th>Réservez dès maintenant</th>
    </tr>
    <?php foreach ($departs as $depart) : ?>
    <tr>
            <td><?= $depart["date_depart_format"]; ?></td>
            <td><?= $depart["date_retour_format"]; ?></td>
            <td><?= $depart["prix"]; ?> €</td>
            <td>14</td>
            <td><a href="#">S'INSCRIRE</a></td>

    </tr>
 <?php endforeach; ?>

</table>

<?php getFooter(); ?>