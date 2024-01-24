<?php
function somme($tableau) {
    $somme = 0;
    foreach ($tableau as $valeur) {
        $somme += $valeur;
    }
    return $somme;
}

$tab = array(4, 3, 8, 2);
$resultat = somme($tab);

echo $resultat;
?>