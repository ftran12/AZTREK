<?php
require_once "model/database.php";
require_once "functions.php";


$id = $_GET["id"];
$sejour = getOneSejour($id);


getHeader("Accueil", "Aztrek")
?>


    <body class="home-1">
    <header class="page-header">

        <?php getMenu(); ?>
    </header>

    <h1><?= $sejour["titre"]; ?></h1>

        <section class="container section-sejours">

            <article class="voyage-sejour-detail">
                <header class="header-article-sejour">
                    <div class="nuitees"><a href="#"><i class="far fa-calendar-alt"></i></a> <?= $sejour["duree"]; ?></div>
                    <div class="tarif"><a href="#"><i class="fas fa-euro-sign"></i></a>  à partir <?= $sejour["prix_indicatif"]; ?>€</div>
                    <div class="niveau"><a href="#"><i class="fas fa-signal"></i></a><?= $sejour["difficulte"]; ?>/5</div>
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
                <th>Du</th>
                <th>Au</th>
                <th>Prix</th>
                <th>Départ Assuré<br> à partir de</th>
                <th>Description de l'exemple</th>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
            <tr>
                <td>01/02/2019</td>
                <td>15/02/2019</td>
                <td>3090€</td>
                <td>Assuré</td>
                <td><a href="#">S'INSCRIRE</a></td>
            </tr>
        </table>

<?php getFooter(); ?>