<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
ksort($departements);


echo "<h2>Liste des régions suivie du nom des départements :</h2>";
foreach ($departements as $region => $departementList) {
    echo "<p>$region : " . implode(", ", $departementList) . "</p>";
}


echo "<h2>Liste des régions suivie du nombre de départements :</h2>";
foreach ($departements as $region => $departementList) {
    $nombreDepartements = count($departementList);
    echo "<p>$region : $nombreDepartements départements</p>";
}
?>
