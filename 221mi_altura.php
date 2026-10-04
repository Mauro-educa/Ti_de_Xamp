<!DOCTYPE html>
<html>

<body>
    <?php

    $personas = ["mauro" => 180, "alonso" => 178, "pepe" => 150, "antonio" => 190, "enriquee" => 200];
    $sumaAlturas = 0;
    echo "<table border='1'>";
    $miNombre=$_GET["nombre"];

    foreach ($personas as $nombre => $altura) {
        if ($nombre == $miNombre) {
            echo "<tr>";
            echo "<td> $nombre </td>";
            echo "<td> $altura </td>";
            echo "</tr>";
        }
        $sumaAlturas += $altura;

    }

    $media = $sumaAlturas / count($personas);
    echo "<tr>";
    echo "<td> altura media $media <td>";
    echo "</tr>";
    if ($media < $personas[$miNombre]) {
        echo "</tr>";
        echo "<td>estoy por encima de la media<td>";
        echo "</tr>";
    }
    else{
        echo "</tr>";
        echo "<td> NO estoy por encima de la media<td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>

</html>