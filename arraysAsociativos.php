<!DOCTYPE html>
<html>
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
    }
    for ($i=0; $i<count($paises); $i++){
        $nombrePais[$i] = $paises[$i];
        echo " pais añadido: $nombrePais ";
    }
    for ($i=0; $i<count($paises); $i++){
        $nombrePais[$i] += $paises[$i];
    }
?>
</body>
</html>