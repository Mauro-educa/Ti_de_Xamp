
<!DOCTYPE html>
<html>
<body>
<?php

$precio = 10;
$cantidad = 3;
$precio_total=$precio*$cantidad;
$prime=false;
if($precio_total>20){
    $precio_total-=5;
 echo "rebajado 5 euros <br>";
}
if($precio_total>=30 && $prime){
    $precio_total=0;
 echo "envio gratis <br>";
}
if($precio>15){
    $precio_total-=5;
 echo "el producto es caro <br>";
}
if($cantidad>2){
    
 echo "hay regalo promocional <br>";
}
else{
     echo "no hay regalo promocional <br>";
}



?>
</body>
</html>