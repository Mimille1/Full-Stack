<?php
include 'DAO.php';

// Inclusion de la bibliothèque PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

// Création d'une nouvelle instance de PHPMailer
$mail = new PHPMailer(true);


    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host = 'localhost:3307'; 
    $mail->SMTPAuth = false;
    $mail->Port = '1025';  

   // Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress("client1@example.com", "Mr Client1");
$mail->addAddress("client2@example.com"); 

//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

//CC & BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);

// On ajoute la/les pièce(s) jointe(s)
$mail->addAttachment('/path/to/file.pdf');



 // Sujet du mail
$mail->Subject = 'Test PHPMailer';

// Corps du message
$mail->Body = "On teste l'envoi de mails avec PHPMailer";

// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        } ; 
    }
