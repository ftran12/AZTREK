<?php
require_once "model/database.php";
require_once "functions.php";


$destination = getAllSejoursByPays($id);



getHeader("Accueil", "Aztrek")
?>


    <body class="home-1">
<header class="page-header">

    <?php getMenu(); ?>
</header>
<main>

    <h1>Destination : <?= $destination["titre"]; ?></h1>

    <section class="container section-destinations">
        <h2>Nos Séjours au Mexique</h2>
      
        <div class="destinations-content">

          <article class="sejour-teasing">
            <h3 class="circuit-name">Trésors de Yucatan</h3>
            <a href="page-sejour.php"><img src="uploads/tresors_yucatan.jpg" alt="Sejour">
            </a>
          </article>
           
          <article class="sejour-teasing">
            <h3 class="circuit-name">Volcans</h3>
            <a href="page-sejour.php"><img src="uploads/volcans.jpg" alt="Sejour">
            </a>
          </article>

          <article class="sejour-teasing">
            <h3 class="circuit-name">Caminando Mexico</h3>
            <a href="page-sejour.php"><img src="uploads/caminando.jpg" alt="Sejour">
            </a>
          </article>
         
        </div>
    </section>


      <?php getFooter(); ?>