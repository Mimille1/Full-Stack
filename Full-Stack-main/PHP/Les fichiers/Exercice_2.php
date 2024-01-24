<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluez Bootstrap (CSS) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <title>Tableau HTML avec données de fichier</title>
</head>
<body>
    <div class="container">
        <h1>Contenu du fichier</h1>
        <?php
        // Chemin du fichier à lire
        $fichier = 'customers.csv';

        // Récupérer le contenu du fichier dans un tableau
        $contenu = file($fichier);

        // Vérifier si le fichier a été lu avec succès
        if ($contenu === false) {
            echo "Erreur lors de la lecture du fichier.";
        } else {
            // Commencer le tableau HTML avec Bootstrap
            echo '<table class="table table-bordered">';
            
            // En-têtes de colonnes
            echo '<thead class="thead-dark"><tr><th>ID</th><th>Nom</th><th>Email</th></tr></thead>';
            
            // Parcourir chaque ligne du fichier
            foreach ($contenu as $ligne) {
                // Utiliser explode() pour découper la ligne en éléments (supposons que les éléments sont séparés par des virgules)
                $elements = explode(',', $ligne);
                
                // Afficher chaque élément dans une cellule de tableau
                echo '<tr>';
                foreach ($elements as $element) {
                    echo '<td>' . htmlspecialchars(trim($element)) . '</td>';
                }
                echo '</tr>';
            }
            
            // Fermer le tableau HTML
            echo '</table>';
        }
        ?>
    </div>
    <!-- Incluez Bootstrap (JS) pour les fonctionnalités avancées si nécessaire -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>