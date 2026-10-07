<?php

$frase = "esto es una frase";
$e=0;
$a=0;
$i=0;
$o=0;
$u=0;

for ($j = 0; $j < strlen($frase); $j++) {
    if ($frase[$j]== "a") {
        $a++;
    } if ($frase[$j]== 'e') {
        $e++;
    } if ($frase[$j]== 'i') {
        $i++;
    } if ($frase[$j]== 'o') {
        $o++;
    } if ($frase[$j]== 'u') {
        $u++;
    }
}

echo "numero de aes: $a número de es $e número de ies $i número de oes $o número de ues $u";
?>