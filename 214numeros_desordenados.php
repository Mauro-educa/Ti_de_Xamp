<!DOCTYPE html>
<html>
<body>
<?php

$maximo = $_GET["maximo"];

$numeros = [];

for ($i = 0; $i <= $maximo; $i++) {

    if ($i % 2 == 0) {
        $numeros[] = $i;
    }
}

shuffle($numeros);

foreach ($numeros as $numero) {
    echo $numero . "</br>";
}


?>
</body>
</html>