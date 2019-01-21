<?php
require_once __DIR__. "/../config/parameters.php";
require_once __DIR__. "/../model/database.php";
$destinations = getAllEntities("destination");
?>


<nav class="header-nav">

    <a class="burger" href="#sidr-main">
        <img src="./images/pictos/burger.png" alt=""> Menu
    </a>

    <div class="site-brand">
        <h2 class="site-title">Aztrek</h2>
        <a href="index.php"><img src="images/logo_aztrek_defonce.png" alt=""></a>
    </div>

    <div class="main-menu">
        <ul>
            <li>
                <a href="#">Destinations</a>
                <ul class="sub-menu">
                    <?php foreach ($destinations as $destination) : ?>
                    <li> <a href="page-destination.php?id=<?= $destination["id"]; ?>">
                            <?= $destination["titre"]; ?>
                        </a></li>
                    <?php endforeach; ?>

                </ul>
            </li>
            <li><a href="#">Voyages</a></li>
            <li><a href="#">Communauté</a></li>
            <li><a href="#">Aztrek</a></li>
        </ul>
    </div>

    <ul class="account">
        <li> <a href="#"><img src="images/pictos/user.png" alt="compte"></a></li>
        <li><a href="#"><img src="images/pictos/contact.png" alt="contact"></a></li>
    </ul>

</nav>