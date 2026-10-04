<!DOCTYPE html>
<html>

<body>
    <?php

    $personas = ["mauro" => 180, "alonso" => 178, "pepe" => 150, "antonio" => 190, "enriquee" => 200];
    $sumaAlturas=0;
    echo "<table border='1'>";


    foreach ($personas as $nombre => $altura) {
        echo "<tr>";
        echo "<td> $nombre </td>";
        echo "<td> $altura </td>";
        echo "</tr>";
        $sumaAlturas+=$altura;
    }
    
    $media=$sumaAlturas/count($personas);
    echo "<tr>";
    echo "<td> altura media $media <td>";
    echo "</tr>";


    echo "</table>";

    ?>
</body>

</html>