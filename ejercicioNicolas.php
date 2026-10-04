
Enunciado:
Crea un script en PHP que realice las siguientes operaciones paso a paso. No uses echo hasta el final.

Declara dos variables: $a = 12; y $b = 5;.

Crea una variable $c que guarde el resto de dividir $a entre $b.

Suma el valor de $c a $a utilizando el operador de asignación de suma.

Reduce en 1 el valor de $b.

Crea una variable booleana $resultado que evalúe si $a es no no es igual a $b, y además, si $c es estrictamente menor que $b.

Imprime los valores finales de $a, $b, $c y $resultado separados por saltos de línea (<br />).

<!DOCTYPE html>
<html>
<body>
<?php

$a = 12;
$b = 5;
$c = $a%$b;
$a += $c;
$b--;
 $resultado = ($a != $b) && ($c < $b)? true : false;

    echo "valor a $a <br>";
    echo "valor b $b <br>";
    echo "valor c $c <br>";
    echo "resultado". var_dump($resultado)." <br>";

?>
</body>
</html>