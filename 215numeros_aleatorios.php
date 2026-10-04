<!DOCTYPE html>
<html>
<body>
<?php
 
    $numeros=[];    
    $mayor=0;
    $menor=0;

    // for ($i=0; $i<33; $i++){
    //     $numeros[$i] = rand(0,100);
    //     echo " numero añadido: $numeros[$i] ";
    // }

    for ($i=1; $i<33; $i++){
        $numeros[$i] = rand(0,100);
        echo " numero añadido: $numeros[$i] ";
        if($numeros[$i]>$numeros[$i-1] && $i>0){
            $mayor=$numeros[$i];
        }
        if($numeros[$i]<$numeros[$i-1] && $i>0){
            $menor=$numeros[$i];
        }
    }
    echo " menor: $menor mayor $mayor ";
    
?>
</body>
</html>