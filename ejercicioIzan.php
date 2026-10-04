
<!DOCTYPE html>
<html>
<body>
<?php

$a =5;
$b = 4;
$suma = 0;

echo "valor de a: $a <br>";
echo "valor de b: $b <br>";
$suma=$a+$b;
$mult=$a*$b;
$media=$suma/2;
$notaFinal=round($media);
echo "media".var_dump($notaFinal) . "<br>";

if($notaFinal>5 ){
    echo "aprobado con nota <br>";

}
else if($notaFinal<5){
    echo "Suspenso <br>";

}
else {
    echo "Aprobado justo";
}

?>
</body>
</html>