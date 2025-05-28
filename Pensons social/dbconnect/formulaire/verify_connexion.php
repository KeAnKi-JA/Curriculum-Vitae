<?php
// Activer les erreurs pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$dbname = 'forum_ps';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Vérification des entrées
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        die("Erreur : tous les champs sont obligatoires.");
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe dans la base de données
    $stmt = $pdo->prepare("SELECT id, pseudo, mot_de_passe, role FROM utilisateurs WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        // Stocker les infos de l'utilisateur en session
        $_SESSION['id'] = $user['id'];
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['id'] = $id_utilisateur;

        // Redirection selon le rôle
        if ($user['role'] === 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: ../../index.php");
        }
        exit();
    } else {
        echo "<p style='color: red;'>Email ou mot de passe incorrect.</p>";
    }
}

?>
