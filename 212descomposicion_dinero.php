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
  
    $dinero=1022;
    while($dinero>0){
    if($dinero-500>=0){
        $dinero=$dinero-500;
       echo "necesitas billete de 500 <br>";     
    }
    else if($dinero-200>=0){
        $dinero=$dinero-200;
        echo "necesitas billete de 200 <br>";
    }
    else if($dinero-100>=0){
        $dinero=$dinero-100;
        echo "necesitas billete de 100 <br>";
    }
    else if($dinero-50>=0){
        $dinero=$dinero-50;
        echo "necesitas billete de 50 <br>";
    }
    else if($dinero-20>=0){
        $dinero=$dinero-20;
        echo "necesitas billete de 20 <br>";
    }
    else if($dinero-10>=0){
        $dinero=$dinero-10;
        echo "necesitas billete de 10 <br>";
    }
    else if($dinero-5>=0){
        $dinero=$dinero-5;
        echo "necesitas billete de 5 <br>";
    }
    else if($dinero-2>=0){
        $dinero=$dinero-2;
        echo "necesitas billete de 2 <br>";
    }
    else if($dinero-1>=0){
        $dinero=$dinero-1;
        echo "necesitas billete de 1 <br>";
    }
    }
?>
</body>
</html>