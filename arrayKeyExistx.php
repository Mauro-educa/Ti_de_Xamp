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



    $existe = array_key_exists("pc", $dispositivos);
    echo "El primer dispositivo de samsung es: $posicion<br>";
    if ($existe) {
        echo " Hay pc existe<br>";
    }


    ?>
</body>

</html>