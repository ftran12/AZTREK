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
                <div class="nuitees"><a href="#"><i class="far fa-calendar-alt"></i></a> <?= $sejour["duree"]; ?> jours</div>
                <div class="tarif"><a href="#"><i class="fas fa-euro-sign"></i></a> à
                    partir <?= $sejour["prix_indicatif"]; ?>€*
                </div>
                <div class="niveau"><a href="#"><i class="fas fa-signal"></i></a> <?= $sejour["difficulte_libelle"]; ?>
                    (niveau <?= $sejour["difficulte_niveau"]; ?>/5)
                </div>
            </header>

            <div class="img-wrapper">
                <img src="uploads/<?= $sejour["image"]; ?>" alt="voyage au Mexique">
            </div>
            <div class="descr-voyage">
                <p><?= $sejour["description"]; ?></p>

        </article>
    </section>

<?php if (count($departs) > 0) : ?>
    <table class="sejour_dispo">
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
                <?php if ($depart["places"] > 2): ?>
                    <td><?= $depart["places"]; ?></td>
                    <?php elseif ($depart["places"] <= 2 & $depart["places"] > 0): ?>
                        <td>Plus que <?= $depart["places"]; ?> places</td>
                 <?php else : ;?>
                    <td>__</td>
            <?php endif; ?>
        <?php if ($depart["places"] > 0): ?>
                <td ><a class="btn" href="#">S'INSCRIRE</a></td>
        <?php else : ;?>
            <td ><a href="#">COMPLET</a></td>
        <?php endif; ?>
            </tr>
            <?php endforeach; ?>
    </table>
<?php else: ?>
    <h4 class="special">Plus de séjour disponible pour cette destination</h4>
<?php endif; ?>

<?php getFooter(); ?>