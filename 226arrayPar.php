<!DOCTYPE html>
<html>

<body>
    <?php
     require "funciones.php";
     $num=4;
     echo "el numero $num es par? ". esNumeroPar(4);
     $array=arrayAleatorio(10,2,6) ;
     echo "array aleatorio :" ;
     print_r($array);
     $arraySinPar=arrayPares($array);
     echo "array sin par :" ;
     print_r($arraySinPar);

    ?>
</body>

</html>