<!DOCTYPE html>
<html>
<body>
    <h1>Exercices Dates et Heures</h1>
</body>
</html>


<h3>Exercice 1</h3>
<!-- Trouvez le numéro de semaine de la date suivante : 14/07/2019 -->
<?php
$date = "2019-07-14";
$timestamp = strtotime($date);
$weekNumber = date("W", $timestamp);
echo "Le numéro de semaine pour la date $date est : $weekNumber";
?>

<h3>Exercice 2</h3>
<!-- Combien reste-t-il de jours avant la fin de votre formation -->
<?php
$dateActuelle = new DateTime('2023-10-03');
$dateFinFormation = new DateTime('2023-10-13');
$interval = $dateActuelle->diff($dateFinFormation);
echo "Il reste " . $interval->format('%a') . " jours avant la fin de ma formation.";
?>


<h3>Exercice 3</h3>
<!-- Comment déterminer si une année est bissextile ?  -->
<?php
function estBissextile($annee) {
    if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
        return true;
    } else {
        return false;
    }
}
$annee = 2024;
if (estBissextile($annee)) {
    echo "$annee est une année bissextile.";
} else {
    echo "$annee n'est pas une année bissextile.";
}
?>

<h3>Exercice 4</h3>
<!-- Montrez que la date du 32/17/2019 est erronée  -->
<?php
$date = "32/17/2019";
list($jour, $mois, $annee) = explode('/', $date);
if (checkdate($mois, $jour, $annee)) {
    echo "La date $date est valide.";
} else {
    echo "La date $date est erronée.";
}
?>

<h3>Exercice 5</h3>
<!-- Affichez l'heure courante sous cette forme : 11h25 -->
<?php
$heureCourante = date('H\hi');
echo "L'heure courante est : $heureCourante";
?>

<h3>Exercice 6</h3>
<!-- Ajoutez 1 mois à la date courante -->
<?php
$dateCourante = new DateTime('2023-10-03');
$dateCourante->add(new DateInterval('P1M'));
echo "La date courante plus 1 mois : " . $dateCourante->format('d/m/Y');
?>

<h3>Exercice 7</h3>
<!-- Que s'est-il passé le 1000200000 -->
<?php

?>