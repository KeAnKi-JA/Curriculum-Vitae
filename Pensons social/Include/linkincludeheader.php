
<?php
// pou paj ki nan lyen yo (dosye formulaire la espesyalman)...
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pensons Social</title>
    <link rel="stylesheet" href="../../include/include.css">
</head>
<body>
    <header>
        <h1 class="title">Pensons Social</h1>
        <nav>
            <ul>
                <li><a <?php if($page=='index'){echo'class="style-active-link"';}?> href="../../index.php">Accueil</a></li>
                <li><a <?php if($page=='apropos'){echo'class="style-active-link"';}?> href="../../apropos.php">À propos</a></li>
                <!--<li><a <?php if($page=='actualites'){echo'class="style-active-link"';}?> href="../../actualites.php">Actualités</a></li>-->
                <!--<li><a <?php if($page=='ressources'){echo'class="style-active-link"';}?> href="../../ressources.php">Ressources</a></li>-->
                <!--<li><a <?php if($page=='forum'){echo'class="style-active-link"';}?> href="../../forum.php">Forum</a></li>-->
                <li><a <?php if($page=='faq'){echo'class="style-active-link"';}?> href="../../faq.php">FAQ</a></li>
                <li><a <?php if($page=='contact'){echo'class="style-active-link"';}?> href="../../contact.php">Contact</a></li>
                <!--<li><a <?php if($page=='connexion'){echo'class="style-active-link"';}?> href="../../dbconnect/formulaire/connexion.php">Connexion</a></li>-->
                <!--<li><a <?php if($page=='campusfrance'){echo'class="style-active-link"';}?> href="../../conseils/campusfrance">Contact</a></li>
            </ul>
        </nav>
    </header>

   