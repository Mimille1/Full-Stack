<?php
include 'DAO.php';

// Inclusion de la bibliothèque PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

// Création d'une nouvelle instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'localhost:3307'; 
    $mail->SMTPAuth = false;
    $mail->Username = 'root';
    $mail->Password = '';
    $mail->Port = '8025';  

    // Contenu de l'e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Confirmation de commande';
    $mail->Body    = 'Bonjour,<br>Votre commande a été confirmée avec succès.<br> Merci de votre commande!';
    $mail->AltBody = 'Bonjour, votre commande a été confirmée avec succès. Merci de votre commande!';

    // Envoi de l'e-mail
    $mail->send();
    echo 'Le message a été envoyé avec succès.';
} catch (Exception $e) {
    echo "Erreur lors de l'envoi du message : {$mail->ErrorInfo}";
}
?>

<?php include 'header.php' ?>

<h2> votre livraison va arriver.</h2>