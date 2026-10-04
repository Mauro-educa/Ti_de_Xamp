
<!DOCTYPE html>
<html>
<body>
<?php

$precioLuz =0.000487;
$horasConsumidas = 458;

$eurosGastados = $precioLuz * $horasConsumidas * 3600 / 1.14;


if($eurosGastados>500 ){
    $eurosGastados=$eurosGastados-$eurosGastados*0.03;
    echo "has gastado este mes $eurosGastados euros <br>";

}
 $eurosGastadosAnual=($eurosGastados-$eurosGastados*0.15)*12;
 echo "al año gastas  $eurosGastadosAnual euros <br>";


?>
</body>
</html>