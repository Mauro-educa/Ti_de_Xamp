<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

</head>

<body>
    <?php

    $dispositivos = array(
        "pc" => "hp",
        "play" => "samsung",
        "portatil" => "hp",
        "tele" => "samsung",
        "xbox" => "microsoft",
    );



    $posicion = array_search("samsung", $dispositivos);
    echo "El primer dispositivo de samsung es: $posicion<br>";

    ?>
</body>

</html>