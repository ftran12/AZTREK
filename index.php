<?php
require_once "model/database.php";
require_once "functions.php";

$destinations = getAllEntities("destination");


getHeader("Accueil", "Aztrek")
?>

<header class="page-header">

    <div class="video-wrapper">
        <video src="./images/aztrek.mp4" autoplay loop muted></video>
    </div>

    <?php getMenu(); ?>

    <h1 class="h1-home">Un nouveau monde à chaque pas</h1>

    <div class="search-form-wrapper">
        <form class="search-form" action="#" method="get">
            <input type="text" name="keywords" value="" placeholder="Chercher">
            <button type="submit" name="submit-btn"><i class="fas fa-search"></i>Valider</button>
        </form>
    </div>

</header>

<main>

    <section class="slider-voyages">
        <div class="container">
            <h2 class="section-title section-title-blue">Que cherchez-vous?</h2>
            <div class="owl-sejour owl-carousel owl-theme">

                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/en_solo.jpg" alt=""></a></div>
                    <div class="item-infos"><a href="#">
                            <h3>En solo</h3>
                        </a>
                    </div>
                </article>
                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/en_duo.jpg" alt=""></a></div>
                    <div class="item-infos"><a href="#">
                            <h3>En duo</h3>
                        </a>
                    </div>
                </article>
                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/entre_amis.jpg" alt=""></a></div>
                    <div class="item-infos"><a href="#">
                            <h3>Entre amis</h3>
                        </a>
                    </div>
                </article>
                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/aventure.jpg" alt=""></a></div>
                    <div class="item-infos"><a href="#">
                            <h3>Aventure</h3>
                        </a>
                    </div>
                </article>
                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/sensations.jpg" alt="Sentations fortes"></a>
                    </div>
                    <div class="item-infos"><a href="#">
                            <h3>Sensations fortes</h3>
                        </a>
                    </div>
                </article>
                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/decouverte.jpg" alt="Découverte"></a></div>
                    <div class="item-infos"><a href="#">
                            <h3>Découverte</h3>
                        </a>
                    </div>
                </article>
                <article class="item zoom">
                    <div class="item-img"><a href="#"><img src="images/handicap.jpg" alt="Handicap"></a></div>
                    <div class="item-infos"><a href="#">
                            <h3>Mobilité réduite</h3>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="liste_voyages container">
        <h2>Voyages triés par</h2>
        <h3>Recommandation</h3>
        <div class="voyages">

            <article class="voyage-item">
                <div class="voyage-sejour">
                    <div class="social-actions">
                        <div class="like"><a href="#"> <img src="images/pictos/heart.png" alt="like"></a></div>
                        <div class="share"><a href="#"> <img src="images/pictos/share.png" alt="share"></a></div>
                    </div>
                    <div><a href="#">
                            <img src="images/voyage_mexique.jpg" alt="voyage au Mexique">
                        </a>
                    </div>
                    <div class="title-voyage">
                        <h3> Sur les traces des mayas au Mexique</h3>
                        <h4>Mexique - #tresors de yucatan</h4>
                    </div>
                </div>

                <footer class="footer-article">
                    <div class="fans_interesses">
                        <p>324 fans intéressés</p>
                        <ul class="social-pic">
                            <li><a href="#"> <img src="images/fan_1.jpg" alt="fan 1"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_2.jpg" alt="fan 2"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_3.jpg" alt="fan 3"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_4.jpg" alt="fan 4"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_5.jpg" alt="fan 5"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="info-sejour">
                        <div class="nuitees"><a href="#"><img src="images/pictos/calendar_grey@2x.png" alt="#"></a>7
                            nuits
                        </div>
                        <div class="tarif">à partir de <br> 1999€</div>
                    </div>
                </footer>
            </article>

            <article class="voyage-item">
                <div class="voyage-sejour">
                    <div class="social-actions">
                        <div class="like"><a href="#"> <img src="images/pictos/heart.png" alt="like"></a></div>
                        <div class="share"><a href="#"> <img src="images/pictos/share.png" alt="share"></a></div>
                    </div>
                    <a href="#">
                        <img src="images/salvador_human.jpg" alt="voyage au Salvador"></a>
                    <div class="title-voyage">
                        <h3> Human & Nature</h3>
                        <h4>Salvador #trek tropical</h4>
                    </div>
                </div>
                <footer class="footer-article">
                    <div class="fans_interesses">
                        <p>256 fans intéressés</p>
                        <ul class="social-pic">
                            <li><a href="#"> <img src="images/fan_6.jpg" alt="fan 6"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_7.jpg" alt="fan 7"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_8.jpg" alt="fan 8"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_9.jpg" alt="fan 9"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_10.jpg" alt="fan 10"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="nuitees"><a href="#"><img src="images/pictos/calendar_grey@2x.png" alt="#"></a>10 nuits
                    </div>
                    <div class="tarif">à partir de <br> 3299€</div>
                </footer>
            </article>


            <article class="voyage-item">
                <div class="voyage-sejour"><a href="#"></a>
                    <div class="social-actions">
                        <div class="like"><a href="#"> <img src="images/pictos/heart.png" alt="like"></a></div>
                        <div class="share"><a href="#"> <img src="images/pictos/share.png" alt="share"></a></div>
                    </div>
                    <a href="#">
                        <img src="images/guatemala_nuages.jpg" alt="voyage au Guatemala"></a>
                    <div class="title-voyage">
                        <h3>Dans les nuages</h3>
                        <h4>Guatemala #royaume de jade</h4>
                    </div>
                </div>
                <footer class="footer-article">
                    <div class="fans_interesses">
                        <p>227 fans intéressés</p>
                        <ul class="social-pic">
                            <li><a href="#"> <img src="images/fan_11.jpg" alt="fan 11"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_12.jpg" alt="fan 12"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_13.jpg" alt="fan 13"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_14.jpg" alt="fan 14"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_15.jpg" alt="fan 15"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="nuitees">14 nuits<a href="#"><img src="images/pictos/calendar_grey@2x.png" alt=""></a>
                    </div>
                    <div class="tarif">2999€</div>
                </footer>
            </article>

            <article class="voyage-item">
                <div class="voyage-sejour"><a href="#"></a>
                    <div class="social-actions">
                        <div class="like"><a href="#"> <img src="images/pictos/heart.png" alt="like"></a></div>
                        <div class="share"><a href="#"> <img src="images/pictos/share.png" alt="share"></a></div>
                    </div>
                    <a href="#">
                        <img src="images/costa_rica_jungle.jpg" alt="voyage au Salvador"></a>

                    <div class="title-voyage">
                        <h3>Un goût de paradis</h3>
                        <h4>Costa Rica #jungle et plage</h4>

                    </div>
                </div>
                <footer class="footer-article">
                    <div class="fans_interesses">
                        <p>199 fans intéressés</p>
                        <ul class="social-pic">
                            <li><a href="#"> <img src="images/fan_16.jpg" alt="fan 16"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_17.jpg" alt="fan 17"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_18.jpg" alt="fan 18"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_19.jpg" alt="fan 19"></a>
                            </li>
                            <li><a href="#"> <img src="images/fan_20.jpg" alt="fan 20"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="nuitees"><a href="#"><img src="images/pictos/calendar_grey@2x.png" alt="#"></a>12 nuits
                    </div>
                    <div class="tarif">à partir de <br> 1899€</div>

                </footer>
            </article>
        </div>

        <button class= "btn" type="button" name="submit-btn">LIRE LA SUITE</button>
    </section>
    </section>

    <section class="destinations">
        <div class="container">
            <h2>Nos destinations</h2>
            <div class="owl-dest owl-carousel owl-theme">
                <?php foreach ($destinations as $destination) : ?>
                <article class="item zoom">
                    <div class="item-img"><a href="page-destination.php?id=<?= $destination["id"]; ?>">
                    <img src="/images/destination_<?= $destination["titre"]; ?>.jpg" alt=""></a></div>
                    <div class="item-infos"><a href="page-destination.php?id=<?= $destination["id"]; ?>">
                            <h3><?= $destination["titre"]; ?></h3>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="temoignages">

        <div class="container">

            <h2>Vos témoignages</h2>

            <div class="temoignages-content">

                <article class="temoignage">
                    <div class="pic-tem"><a href="#"><img src="images/temoignage-1.jpg" alt=""></a></div>
                    <h4>Fibrou</h4>
                    <h6>Costa Rica - Jungle Speed <br> Voyage le 16 août 2018</h6>
                    <p class="tem-1">Super voyage ! on a particulièrement apprécié l’organisation du trek et le guide
                        Daniel qui nous a montré des spots hors des sentiers battus. Je recommande l’agence Aztrek qui
                </article>

                <article class="temoignage">
                    <div class="pic-tem"><a href="#"><img src="images/temoignage-2.jpg" alt=""></a></div>
                    <h4>JCT</h4>
                    <h6>Guatemala - Quetzal Sensation <br> Voyage le 12 juillet 2018</h6>
                    <p class="tem-2">
                        Rien à dire, la programmation était bien ficelée, chaque jour a son lot de bonnes
                        surprises. Super pays, à recommander.
                    </p>
                </article>

            </div>

            <div class="btn"><a href="#"></a>LIRE TOUS LES TEMOIGNAGES</a></div>

        </div>

    </section>

    </section>

    <section class="communaute">

        <div class="container">

            <h2>Communauté Aztrek</h2>

            <div class="communaute-content">

                <article class="blog">
                    <h3>Dernier article de blog</h3>
                    <h4>Voyager en fauteuil roulant : un parcours insurmontable ?</h4>
                    <div class="blogger"><a href="images/blogger.jpg"></a>Par Emilie Colin</div>
                    <div class="blog-img"><a href="#"><img src="images/blog-img.jpg" alt=""></a></div>
                    <p>Voyager en fauteuil, s’installer temporairement en Amérique centrale, tout ça seul(e) et bien ça
                        se
                        fait.
                        Il faut juste se poser les bonnes questions : quelles sont mes limites ? Quels sont mes besoins
                        ?
                        Ne pas oublier surtout qu’il faudra vous construire ce voyage vous-même. Les informations se
                        font rares
                        sur
                        la toile,
                        même si d’intrépides blogueurs et blogueuses se sont lancés
                    <div class="btn"><a href="#"></a>LIRE LA
                        SUITE</a></div>
                    </p>
                </article>

                <article class="instaztrek">
                    <h3>Instaztrek</h3>
                    <p>#aztrek #aztrek_mexique #aztrek_guatemala #aztrek_costarica
                        #aztrek_honduras #aztrek_salvador #iloveaztrek</p>
                    <div class="flux-insta">
                        <figure><a href="#"><img src="images/insta1.jpg" alt="insta1"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta2.jpg" alt="insta2"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta3.jpg" alt="insta3"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta4.jpg" alt="insta4"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta5.jpg" alt="insta5"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta6.jpg" alt="insta6"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta7.jpg" alt="insta7"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta8.jpg" alt="insta8"></a>
                        </figure>
                        <figure><a href="#"><img src="images/insta9.jpg" alt="insta9"></a>
                        </figure>

                    </div>
                </article>

            </div>

        </div>

    </section>
</main>

<section class="garanties">
    <div class="container">
        <h2>Garanties avec Aztrek</h2>
        <ul class="garanties_details ">
            <li><img src="images/pictos/map.png" alt="">Une équipe d’experts à vos côtés, passionnée avant tout par
                l’Amérique Centrale
            </li>
            <li><img src="images/pictos/target.png" alt="">Engagement pour un tourisme équitable et co-responsable</li>
            <li><img src="images/pictos/check.png" alt="">Des garanties pour vous protéger</li>
            <li><img src="images/pictos/handshake.png" alt="">Un suivi avant, pendant et après pour vous satisfaire</li>
        </ul>
</section>


<?php getFooter(); ?>

