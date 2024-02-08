<?php
include 'DAO.php';
$libelle = $_POST['libelle'];
$quantite = $_POST['quantite'];
$prix = $_POST['prix'];
$total = floatval($prix) * floatval($quantite);
$date = date('Y-m-d H:i:s');
$quantite = $_POST['quantite'];
$prix = $_POST['prix'];
$nomPrenom = $_POST['NomPrenom'];
$numero = $_POST['numero'];
$courriel = $_POST['courriel'];
$adresse = $_POST['adresse'];
envoie($connexion);

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
