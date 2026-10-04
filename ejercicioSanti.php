
<!DOCTYPE html>
<html>
    <body>
        <?php

        $a = 3;
        $b = 5;
        $c=($a+$b)**2;
        $d=$a**2;
        $e=$b**2;
        $f=$a*$b;
        $g=$c/$f;
        $h=($d+$e)/$f;
        $i=$g - $h;
        echo "valor a $a <br>";
        echo "valor b $b <br>";
        echo "valor i:  ".var_dump($i)." <br>";

        $i_redondeado=round($i);

        if($i_redondeado>2){
            echo "i_redondeado mayor que 2 <br>";
        }
        else if($i_redondeado<2){
            echo "i_redondeado menor que 2 <br>";
        }
        else{
            echo "i_redondeado igual que 2 <br>";
        }

        ?>
    </body>
</html>