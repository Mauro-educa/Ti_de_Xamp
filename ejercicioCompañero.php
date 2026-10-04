<!DOCTYPE html>
<html>
<body>
<?php
echo "contar patas de animales </br>";
echo "hay 10 animales sumando pollos y vacas  </br>";
echo "hay 28 patas en total  </br>";
echo "que cantidad hay de cada animal  </br>";
echo "que cantidad hay de patas  </br>";
echo "comprueba que cantidad de animales es mayor </br>";

Ejercicio calcular patas y animales de una granja:
En una granja hay 10 animales, sumando pollos y vacas

$animales = 10;
$patas = 28;
$vacas = ($patas - 2 * $animales) / 2;
$pollos = $animales - $vacas;
echo "Vacas: " . $vacas . "<br>";
echo "Pollos: " . $pollos."<br>";
if($vacas>$pollos){
echo "hay mas vacas <br>";
 
}
else{
echo "hay mas pollos <br>";
}
?>


</body>
</html>
