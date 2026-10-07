<?php

$frase = "no traces en ese carton";
$fraseSinEspacios = str_replace(" ", "", $frase);

$fraseSinEspaciosInvertido = strrev($fraseSinEspacios);

if ($fraseSinEspaciosInvertido == $fraseSinEspacios) {
    echo "es palindromo <br>";
} else {
    echo "NO es palindromo  <br>";
}

echo $frase;
?>