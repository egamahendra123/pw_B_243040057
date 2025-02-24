<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="tugas2c.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas2c</title>
</head>
<body>
    <table> 
        <?php
        $size = 10;
        for ($i = $size; $i >= 1; $i--) {
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<td>$j</td>";
            }
        }
        ?>
    </table>
</body>
</html>