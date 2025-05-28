


<?php
// pou paj ki nan lyen yo (dosye formulaire la espesyalman)...
?>

<?php

        $page="connexion";

        include '../../include/linkincludeheader.php';

    ?>

   




<form method="POST" action="verify_connexion.php">
    <label for="email">Adresse e-mail :</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" placeholder="Mot de passe" required>
    
    <button type="submit">Se connecter</button>
    <!-- Bouton pour aller à la page d'inscription -->
    <p>Pas encore de compte ? <a href="inscription.php"><button type="button">S'inscrire</button></a></p>
</form>



</html>
<?php 
include '../../include/linkincludefooter.php';
?>