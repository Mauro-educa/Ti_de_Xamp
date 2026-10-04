


<!DOCTYPE html>
<html>
<body>
<?php

$lCuadrado = 4;
$baseRectangulo = 6;
$alturaRectangulo=3;
$catetoTriangulo = 2;
$hipotenusaTriangulo = 2.82;


$areaCuadrado = $lCuadrado**2;
$perimetroCuadrado = $lCuadrado*4;

$areaRectangulo = $alturaRectangulo * $baseRectangulo;
$perimetroRectangulo = ($alturaRectangulo + $baseRectangulo)*2;

$areaTriangulo = $catetoTriangulo*$hipotenusaTriangulo/2;

$cateto2= sqrt($catetoTriangulo**2 + $hipotenusaTriangulo**2);
$perimetroTriangulo = $catetoTriangulo + $hipotenusaTriangulo + $cateto2;

echo "area cuadrado: $areaCuadrado  perimetro cuadrado $perimetroCuadrado <br>";
echo "area rectangulo: $areaRectangulo  perimetro rectangulo $perimetroRectangulo <br>";
echo "area triangulo: $areaTriangulo  perimetro triangulo $perimetroTriangulo <br>";

?>
</body>
</html>
