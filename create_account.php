<?php
require_once "model/database.php";
require_once "functions.php";


getHeader("Créer un compte", "Formulaire de création de compte")


?>

<header class="page-header">
    <?php getMenu(); ?>
</header>

<main class="container">

<form action="create_account_query.php" method="post">
    <p>
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom" required>
    </p>
    <p>
        <label>Prénom</label>
        <input type="text" name="prenom" placeholder="Prénom" required>
    </p>
    <p>
        <label>Pseudo</label>
        <input type="text" name="pseudo" placeholder="Pseudo" required>
    </p>
    <p>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required>
    </p>
    <p>
        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" required>
    </p>
    <input type="submit" value="Créer mon compte">

</form>
</main>

<?php getFooter(); ?>
