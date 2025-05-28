<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// hashage.php : Traitement du mot de passe et insertion dans la base de données
include('../../dbconnect/config.php');  // Inclure la connexion à la base de données
session_start(); // Démarrer la session

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données envoyées
    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Vérifications des champs
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide.";
    }

    if (strlen($pseudo) < 3) {
        $errors[] = "Le pseudo doit avoir au moins 3 caractères.";
    }

    if (strlen($password) < 8 || !preg_match('/[0-9]/', $password) || !preg_match('/[\W]/', $password)) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères, un chiffre et un caractère spécial.";
    }

    // Vérifier si l'email ou le pseudo existe déjà
    $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = :email OR pseudo = :pseudo");
    $stmt->execute(['email' => $email, 'pseudo' => $pseudo]);
    
    if ($stmt->fetch()) {
        $errors[] = "Cet email ou ce pseudo est déjà utilisé.";
    }

    if (empty($errors)) {
        // Hashage du mot de passe
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Insérer l'utilisateur en utilisant une requête préparée
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (pseudo, email, mot_de_passe) VALUES (:pseudo, :email, :mot_de_passe)");
        $stmt->execute(['pseudo' => $pseudo, 'email' => $email, 'mot_de_passe' => $password_hashed]);

        // Message de succès
        $_SESSION['message'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";

        // Redirection après insertion
        header("Location: connexion.php");
        exit; // Toujours faire un exit après header pour éviter d'exécuter plus de code
    }
}

// Afficher les erreurs s'il y en a
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color: red;'>$error</p>";
    }
}
?>
