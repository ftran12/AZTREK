<?php
require_once "model/database.php";
require_once "functions.php";

$sejours = getAllSejour();

getHeader("Accueil", "Aztrek")
?>


    <header class="page-header">
        <?php getMenu(); ?>
    </header>


    <section class="container">
        <h1>Tous nos voyages</h1>
       <div>Tri par :
        <ul class="sub-menu">
            <li>Départ</li>
            <li>Disponibilité</li>
        </ul>
       </div>

        <?php foreach ($sejours AS $sejour) : ?>
            <article class="sejour-teasing">
                <h3 class="circuit-name"><?= $sejour["titre"]; ?></h3>
                <a href="page-sejour.php?id=<?= $sejour["id"]; ?>"><img src="uploads/<?= $sejour["image"]; ?>"
                                                                        alt="Sejour">
                </a>
            </article>
        <?php endforeach; ?>
    </section>

<?php getFooter(); ?>