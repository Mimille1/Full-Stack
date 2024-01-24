
<!DOCTYPE html>
<html>
<head>
    <title>Liste de Liens</title>
</head>
<body>
    <h1>Liste de Liens</h1>
    <ul>
    <?php
    $contenu = file_get_contents('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt');

    preg_match_all('/<a\s+[^>]*href="([^"]*)"[^>]*>(.*?)<\/a>/', $contenu, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        $href = htmlspecialchars($match[1]);
        $texte_lien = htmlspecialchars($match[2]);
        echo '<li><a href="' . $href . '">' . $texte_lien . '</a></li>';
    }
    ?>
    </ul>
</body>
</html>
