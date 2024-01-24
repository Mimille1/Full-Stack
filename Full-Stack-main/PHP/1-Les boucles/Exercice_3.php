<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
</head>
<body>
    <h2>Table de multiplication</h2>
    <table border="1">
        <tr>
            <th>&times;</th>
            <?php
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
    
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; 
            
            for ($j = 1; $j <= 9; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>