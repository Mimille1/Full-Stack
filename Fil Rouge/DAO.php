<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "the-district";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo "Erreur de conn$connexion à la base de données: " . $e->getMessage();
}

function categorie_index($connexion)
{
    $stmt = $connexion->query("SELECT DISTINCT categorie.* from categorie
    JOIN plat ON categorie.id=plat.id_categorie
    JOIN commande ON plat.id=commande.id_plat
    WHERE categorie.active = 'YES'
    ORDER BY commande.quantite DESC
    LIMIT 6");
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function plat_index($connexion)
{
    $stmt = $connexion->query("SELECT * FROM plat limit 5");
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function categorie_categorie($connexion)
{
    $stmt = $connexion->query("SELECT * FROM categorie WHERE active = 'Yes'");
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function menu_categorie($connexion)
{
    $stmt = $connexion->query("SELECT * FROM categorie");
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function plat_plat($connexion)
{
    $stmt = $connexion->query("SELECT * FROM plat limit 6");
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

function plat_categorie($connexion)
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $connexion->prepare("SELECT plat.* FROM plat JOIN categorie ON plat.id_categorie = categorie.id WHERE categorie.id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }
}

function commande_commande($connexion)
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $connexion->prepare("SELECT * FROM plat WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch();
        $stmt->closeCursor();
        return $result;
    }
}

function envoie($connexion)
{

    
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

    $SQL = "INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client)
                VALUES (:id_plat, :quantite, :total, :dates, 'En préparation', :nom, :numero, :courriel, :adresse)";

    $stmt = $connexion->prepare($SQL);
    $stmt->bindParam(':id_plat', $_POST['id_plat']);
    $stmt->bindParam(':quantite', $quantite);
    $stmt->bindParam(':total', $total);
    $stmt->bindParam(':dates', $date);
    $stmt->bindParam(':nom', $nomPrenom);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':courriel', $courriel);
    $stmt->bindParam(':adresse', $adresse);

    if ($stmt->execute()) {
    } else {
        echo "Erreur : " . implode(", ", $stmt->errorInfo());
    }
}
$nombre=0;
?>