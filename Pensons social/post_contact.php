<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Inclure les fichiers nécessaires pour PHPMailer
require 'PHPMailer/src/PHPMailer.php';  // Le fichier principal PHPMailer.php
require 'PHPMailer/src/SMTP.php';       // Le fichier pour le protocole SMTP
require 'PHPMailer/src/Exception.php';  // Le fichier pour gérer les exceptions

use PHPMailer\PHPMailer\PHPMailer;// Utilisation de la classe PHPMailer
use PHPMailer\PHPMailer\Exception;// Utilisation de la classe Exception


//require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["name"]);//recupere les donnees et empêcher qu'un utilisateur malveillant insère du code HTML ou JavaScript dans un champ du formulaire.
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP(Simple Mail Transfer Protocol)
        $mail->isSMTP(); //Indique qu'on utilise SMTP
        $mail->Host = 'smtp.gmail.com'; // SMTP du fournisseur (ici : Gmail)
        $mail->SMTPAuth = true;//Active l'authentification
        $mail->Username = 'kerbyannekissy@gmail.com'; // mon adresse Gmail
        $mail->Password = 'jirm ahtc whjv rjqq'; // mon mot de passe (ou clé d’application)
        $mail->SMTPSecure = 'tls';// = PHPMailer::ENCRYPTION_STARTTLS; → Sécurité avec TLS
        $mail->Port = 587;//Port SMTP standard pour TLS (465 pour SSL)

        // Destinataire
        $mail->setFrom($email, $nom);
        $mail->addAddress('kerbyannekissy@gmail.com'); // L'email où je veux recevoir les messages

        // Contenu du mail
        $mail->Subject = "Nouveau message du formulaire de contact";
        $mail->Body = "Nom: $nom\nEmail: $email\nMessage:\n$message";

        // Envoi
        $mail->send();
        echo "Message envoyé avec succès.";
    } catch (Exception $e) {
        echo "Erreur: {$mail->ErrorInfo}";
    }
}
?>
