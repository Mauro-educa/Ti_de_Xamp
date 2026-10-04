
Si $a = 8 y $b = 3, averigua el valor de $c si $c es igual a $a por $b más $a entre $b.
Comprueba que el resultado sea mayor que la suma de $a y $b.

<!DOCTYPE html>
<html>
<body>
<?php

$a =8;
$b = 3;
$suma = 0;
$c=$a*$b+$a/$b;
echo "valor de c: $c <br>";



if($c>$a+$b ){
    echo "c es mayor que a + b <br>";

}

else {
    echo "no es mayor";
}

?>
</body>
</html>