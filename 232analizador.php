<?php

$frase = "esto es una frase";


$array = explode(" ", $frase);
$tamArray=count($array);
$fraseSinEspacios = str_replace(" ", "" ,$frase);
$tamFraseSinEspacios=strlen($fraseSinEspacios);
for ($i = 0; $i < count($array); $i++) {
echo $array[$i] . " cantidad de letras ".strlen($array[$i] )."<br>";

}
echo "hay $tamFraseSinEspacios letras en la frase  <br>";
echo "hay $tamArray palabras en la frase  <br>";
?>