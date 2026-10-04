
<!DOCTYPE html>
<html>
<body>
<?php

$nota = 4;
$asistencia = 90;
$faltaRecu = 1;

if($nota>=5 && $asistencia>=80){
    echo "Carlos ha aprobado";

}
else if($nota>=4 && $asistencia>=90 && $faltaRecu!=0){
    echo "Carlos ha aprobado con la recu";

}
else {
    echo "Carlos ha suspendido";
}

?>
</body>
</html>