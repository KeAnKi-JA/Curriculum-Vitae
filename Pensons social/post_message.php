<?php
session_start();

include('dbconnect/config.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // DEBUG : Afficher ce qui est reçu
    //var_dump($_POST);
    //exit;

    // Récupérer les valeurs
    $discussion_id = isset($_POST['discussion_id']) ? intval($_POST['discussion_id']) : null;
    $contenu = isset($_POST['contenu']) ? trim($_POST['contenu']) : '';
    $id_utilisateur = isset($_POST['id_utilisateur']) ? intval($_POST['id_utilisateur']) : null;

    // DEBUG : Vérifier les valeurs
    echo "discussion_id: " . var_export($discussion_id, true) . "<br>";
    echo "contenu: " . var_export($contenu, true) . "<br>";
    echo "id_utilisateur: " . var_export($id_utilisateur, true) . "<br>";

    // Vérifier si tous les champs sont remplis
    if ($discussion_id && !empty($contenu) && $id_utilisateur) {
        $contenu = htmlspecialchars($contenu, ENT_QUOTES, 'UTF-8');

        // Vérifier si la discussion existe
        $stmt = $conn->prepare("SELECT * FROM discussions WHERE id = ?");
        $stmt->bind_param("i", $discussion_id);
        $stmt->execute();
        $discussion_result = $stmt->get_result();

        if ($discussion_result->num_rows > 0) {
            // Insérer dans la base
            $stmt = $conn->prepare("INSERT INTO messages (discussion_id, id_utilisateur, contenu, created_at) VALUES (?, ?, ?, NOW())");
            $stmt->bind_param("iis", $discussion_id, $id_utilisateur, $contenu);
            
            if ($stmt->execute()) {
                header("Location: discussion.php?id=" . $discussion_id);
                exit;
            } else {
                echo "Erreur lors de l'ajout.";
            }
        } else {
            echo "Discussion inexistante.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}

$conn->close();
?>
