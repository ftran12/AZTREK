<?php
require_once "model/database.php";
require_once "functions.php";



getHeader("Accueil", "Aztrek")
?>


    <body class="home-1">
    <header class="page-header">

        <?php getMenu(); ?>
    </header>

    <main>

        <h1>Trésors de Yucatan</h1>

    <h1><?= $sejour["titre"]; ?></h1>

        <section class="container section-sejours">

            <article class="voyage-sejour-detail">
                <header class="header-article-sejour">
                    <div class="nuitees"><a href="#"><i class="far fa-calendar-alt"></i></a> 7 nuits</div>
                    <div class="tarif"><a href="#"><i class="fas fa-euro-sign"></i></a> à partir de 2299€</div>
                    <div class="niveau"><a href="#"><i class="fas fa-signal"></i></a> 3/5</div>
                </header>

                <div class="img-wrapper">
                    <img src="images/voyage_mexique.jpg" alt="voyage au Mexique">
                </div>
                <div class="descr-voyage">
                    <h3> Sur les traces des mayas au Mexique</h3>
                    <p>Le Yucatán est le berceau du monde maya, imprégné encore aujourd'hui de la grandeur passée de ce
                        peuple si
                        fascinant. Nous découvrons, en douze jours, l'essence de la région, entre terre et mer, nature
                        et culture.
                        Ambiance explorateur dans la jungle et face aux sites mayas, coloniale dans les villes colorées,
                        détente
                        lors des baignades dans les cenotes (puits à ciel ouvert typiques) et sur l'île d'Holbox... Avec
                        peu de
                        transferts, ce voyage permet une belle immersion dans la culture yucatèque, au travers
                        d'activités variées
                        et de visites communautaires.</p>
                    <p>Venez découvrir l'origine des mayas, un voyage sur la Riviera Maya fera le bonheur des amateurs
                        de
                        plongée.
                        Au large de ses côtes s’étend la seconde plus grande barrière de corail au monde, où des
                        milliers de
                        poissons
                        tropicaux, raies et autres requins-baleines ont élu domicile. Des sites sont dédiés à cette
                        activité
                        comme le
                        village d’Akumal, refuge des tortues de mer, ou le parc éco-touristique de Xel-Ha. Entre mer et
                        forêt
                        tropicale,
                        la Riviera Maya est une terre de loisirs et d’aventure. Durant votre séjour sur la Riviera Maya,
                        laissez-vous tenter
                        par la visite de l’une de ses grottes (Aktun Chen) avant de vous baigner dans l’eau profonde
                        d’un cénote.
                    </p>


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