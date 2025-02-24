<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="tugas2d.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
</head>
<body>
    <div class="chessboard">
        <?php
        for ($row = 0; $row < 5; $row++) {
            for ($col = 0; $col < 5; $col++) {
                $class = ($row + $col) % 2 == 0 ? "black" : "white";
                echo "<div class='square $class'></div>";
            }
        }
        ?>
    </div>
</body>
</html>