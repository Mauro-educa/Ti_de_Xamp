<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

</head>

<body>
    <?php

    $alumnos = array(
        "mauro.gargon" => "Horus",
        "alonso.rogpas" => "Serbatic",
        "izan.marvel" => "Serbatic",
        "marcos.merpez" => "Microsoft"
    );

    $serbatic = 0;

    foreach ($alumnos as $alumno => $empresa) {
        
        if ($empresa == "Serbatic") {
            $serbatic++;
        }
    }

    echo "Hay $serbatic alumnos que han hecho prácticas en Serbatic.<br>";

    foreach ($alumnos as $alumno => $empresa) {
        echo "La empresa de $alumno es $empresa<br>";
    }

    $posicion = array_search("Serbatic", $alumnos);
    echo "El primer alumno de Serbatic es: $posicion<br>";

    $booleanoIn = in_array("Serbatic", $alumnos);

    if ($booleanoIn) {
        echo "Hay alumnos en Serbatic<br>";
    }

    $booleanoKey = array_key_exists("mauro.gargon", $alumnos);

    if ($booleanoKey) {
        echo " mauro.gargon existe<br>";
    }

    ?>
</body>

</html>