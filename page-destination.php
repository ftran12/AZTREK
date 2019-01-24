<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$destination = getOneEntity("destination", $id);
$sejours = getAllSejoursByPays($id);

getHeader("Accueil", "Aztrek")
?>


    <header class="page-header">
        <?php getMenu(); ?>
    </header>

    <h1>Destination : <?= $destination["titre"]; ?></h1>

    <section class="container section-destinations">
        <h2>Nos Séjours au <?= $destination["titre"]; ?></h2>

        <?php if (count($sejours) > 0) : ?>
            <div class="destinations-content">

                <?php foreach ($sejours as $sejour) : ?>
                    <article class="sejour-teasing">
                        <h3 class="circuit-name"><?= $sejour["titre"]; ?></h3>
                        <a href="page-sejour.php?id=<?= $sejour["id"]; ?>"><img src="uploads/<?= $sejour["image"]; ?>"
                                                                                alt="Sejour">
                        </a>
                    </article>
                <?php endforeach; ?>

            </div>
        <?php else: ?>
            <h4 class="special">Pas de séjour actuellement, patience...</h4>
        <?php endif; ?>


    </section>


<?php getFooter(); ?>