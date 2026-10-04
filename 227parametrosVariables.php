<!DOCTYPE html>
<html>

<body>
    <?php
    require "funciones.php";
    $numMayor=mayor(1, 2, 3, 4);
    echo "numero mayor ".$numMayor;
    $cadenaConcat=concatenar("hola", "me llamo", "pepe");
    echo "cadena concatenada: ". $cadenaConcat;

    ?>
</body>

</html>