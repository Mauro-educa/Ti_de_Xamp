<?php

$frase = "esto es una frase";


$array = str_word_count($frase,1);
$fraseSinEspacios = str_replace(" ", "" ,$frase);
$tamFraseSinEspacios=strlen($fraseSinEspacios);
for ($i = 0; $i < count($array); $i++) {
echo $array[$i] . " cantidad de letras ".strlen($array[$i] )."<br>";

}
echo "hay $tamFraseSinEspacios letras en la frase  <br>";
echo "cantidad de palabras".str_word_count($frase);





?>