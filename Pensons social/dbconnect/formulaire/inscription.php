<!-- formulaire d'inscription (inscription.php) -->
<form method="POST" action="hashage.php">
    
    <label for="pseudo">Nom d'utilisateur :</label>
    <input type="text" name="pseudo" placeholder="Pseudo" required>

    <label for="email">E-mail :</label>
    <input type="email" name="email" placeholder="Email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" placeholder="Mot de passe" required>
    
    <button type="submit">S'inscrire</button>
</form>
