<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estyle.css">
    <title>Document</title>
</head>
<body>
    <?php

//crea matriz y multiplica filas con columnas
    $valor = $_POST["valores"];
    echo "<table>";
    for ($f = 1; $f <= $valor; $f++) {
        echo "<tr>";
        for ($c = 1; $c <= $valor; $c++) {
            $resultado = $f * $c;
            echo "<td>" . $resultado . "</td>";

        }
    }
    echo "</tr>";
    echo "</table>";

    ?>
    
</body>
</html>

