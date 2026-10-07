<?php

$frase = "esto es una frase";
$fraseImpares="";
for ($i = 0; $i < strlen($frase); $i++) {
    if ($i % 2 !== 0) {
        $fraseImpares .= $frase[$i];
    }
}

echo $fraseImpares;
?>