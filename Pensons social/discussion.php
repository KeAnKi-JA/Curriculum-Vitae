<?php
session_start();
var_dump($_SESSION);
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$page = "discussion";
include 'include/includeheader.php';
// Inclure le fichier de configuration pour établir la connexion PDO

include('dbconnect/config.php');
session_start();

// Vérifier si l'ID de la discussion est bien passé dans l'URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID de discussion manquant.";
    exit;
}

$discussion_id = $_GET['id'];

// Récupérer les détails de la discussion depuis la base de données avec PDO
$query = "SELECT * FROM discussions WHERE id = :id";
$stmt = $pdo->prepare($query);  // Utilisation de PDO
$stmt->bindParam(':id', $discussion_id, PDO::PARAM_INT);
$stmt->execute();
$discussion = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$discussion) {
    echo "Discussion non trouvée.";
    exit;
}

// Récupérer les messages de cette discussion
$query2 = "SELECT * FROM messages WHERE discussion_id = :discussion_id ORDER BY created_at ASC ";
$stmt2 = $pdo->prepare($query2);
$stmt2->bindParam(':discussion_id', $discussion_id, PDO::PARAM_INT);
$stmt2->execute();
$messages_result = $stmt2->fetchAll(PDO::FETCH_ASSOC);
?>
<?php // ORDER BY date_created ASC : fok mwen rajoute nan ligne code mesaj la, etant donne poko gen mesaj na baz la donk pa gen dat du coup pou m ta klase yo par ordre croissnat. lh m gen mesaj, m ka panse a rajoute pwen sa ?>
<!-- Ici tu peux afficher les résultats de la discussion et des messages -->
<h1><?php echo htmlspecialchars($discussion['title']); ?></h1>
<p><?php echo htmlspecialchars($discussion['description']); ?></p>

<h3>Messages</h3>
<?php foreach ($messages_result as $message): ?>
    <p><?php echo htmlspecialchars($message['content']); ?> - <?php echo htmlspecialchars($message['author']); ?></p>
<?php endforeach; ?>
<?php 
if (!isset($_SESSION['id'])) {
    echo "Erreur : utilisateur non connecté.";
} else {
   echo "Utilisateur connecté avec ID : " . $_SESSION['id'];
} 
?>

<!-- Formulaire pour ajouter un nouveau message -->
<form action="post_message.php" method="post">
    <!-- Champ caché pour l'ID de la discussion -->
    <input type="hidden" name="discussion_id" value="<?php echo $discussion_id; ?>">

    <!-- Champ caché pour l'ID de l'utilisateur (assumé que l'ID est dans la session) -->
    <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['id']; ?>">

    <!-- Champ pour le contenu du message -->
    <textarea name="contenu" required></textarea>

    <!-- Bouton pour soumettre le message -->
    <button type="submit">Envoyer</button>
</form>

<?php
include 'include/includefooter.php';
?>
