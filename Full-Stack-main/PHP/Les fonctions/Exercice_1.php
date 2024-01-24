<?php
function genererLien($lien, $titre) {
    $lien_html = "<a href=\"$lien\">$titre</a>";
    return $lien_html;
}

$lien_genere = genererLien("https://www.reddit.com/", "Reddit Hug");
echo $lien_genere;
?>
