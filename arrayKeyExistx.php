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
    if ($existe) {
        echo " Hay pc <br>";
    }
    else{
        echo "no hay pc";
    }

    ?>
</body>

</html>