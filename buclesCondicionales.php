<!DOCTYPE html>
<html>
<body>
<?php
$acabar=false;
$intento;
for ($intento=0;$intento <= 10 && !$acabar; $intento++) {
    $dado=rand(1,6);
    echo " intento". $intento."resultado ".$dado."<br>";
    echo "<br> ";

    if($dado==5){
        echo "ha salido 5 ";
        echo "<br> ";

        $acabar=true;
    }

}
    if($intento>10){
        echo "ha superado el nº de lanzamientos";

   
    }
?>
</body>
</html>