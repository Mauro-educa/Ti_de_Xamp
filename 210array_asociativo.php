<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mauro Garcia">
    <title>Título del ejercicio</title>
</head>
<body>
<?php
    $paises = array(
        "España" => "Madrid",
        "Francia" => "Paris",
        "Alemania"=>"Berlin",
        "Italia"=> "Roma"
    );
    $nombrePais=[];
    $nombreCapital=[];

    foreach ($paises as $pais => $capital) {
       echo "la capital de $pais es $capital <br>";

       $nombrePais[]=$pais;
       $nombreCapital[]=$capital;
    }
    for ($i=0; $i<count($nombrePais); $i++){
        echo " pais añadido: $nombrePais[$i] <br>";
    }
    for ($i=0; $i<count($nombreCapital); $i++){
        echo " capital añadida: $nombreCapital[$i]  <br>";
    }
?>
</body>
</html>