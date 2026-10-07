<?php

$frase = "esto es una frase";
$fraseImpares = "";
for ($i = 0; $i < strlen($frase); $i++) {
    if ($frase[$i] !== " ") {
        if ($i % 2 !== 0) {
            $frase[$i] = strtoupper($frase[$i]);
        } else {
            $frase[$i] = strtolower($frase[$i]);
        }
    }
}

echo $frase;
?>