<!DOCTYPE html>
<html>
<body>
<?php
 
    $a=2;    
    $b=-7;
    $c=3;
    $x1;
    $x2;
    $discriminante = ($b**2) - 4*$a*$c;
    $x1=(-$b+sqrt($discriminante))/(2*$a);
    $x2=(-$b-sqrt($discriminante))/(2*$a);
    if($x1!= $x2){
        echo "la ecuacion tiene dos soluciones: $x1 y $x2"; 
    }
    else if($x1==$x2){
       echo "la ecuacion tiene una solucion: $x1"; 
    }
    else{
        echo "la ecuacion no tiene solucion";

    }

    echo $x1;
    echo $x2;
?>
</body>
</html>