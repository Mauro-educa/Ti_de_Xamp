<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mauro Garcia">
    <title>Título del ejercicio</title>
</head>

<body>
    <?php
    $array = [];
    for ($i = 0; $i < 100; $i++) {
        $random=rand(0,1);
        if ($random == 0) {
            $letra='M';
        }
        else {
            $letra= 'F';
        }
        
        $array[] = $letra;
    }
    print_r($array);

    $arrAsociativo=['M' =>0, 'F' => 0];
    for ($j = 0; $j < 100; $j++) {
       

        
        if( $array[$j]== 'M')   {
            $arrAsociativo['M'] += 1;
        }
        else{
            $arrAsociativo['F'] += 1;
        }
        }
        echo "<br>";
        print_r($arrAsociativo);
    

    ?>
</body>

</html>