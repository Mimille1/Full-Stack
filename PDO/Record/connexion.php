<?php
try {
    $db = new PDO('mysql:host=localhost:3307;dbname=record', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur de connexion" . $e->getMessage();
}
?>
