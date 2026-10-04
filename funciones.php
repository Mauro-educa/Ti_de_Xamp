<?php
function saludar($edad, $nombre = "usuario")
{
    echo "Hola $nombre tienes $edad años <br/>";
}
// saludar(12); //Hola usuario
// saludar(23, "Lolo");
// saludar(23, "Lolo", 3); //Hola Lolo

function diaSemana()
{
    $numeroDia = rand(1, 7);
    switch ($numeroDia) {
        case 1:
            $dia = "Lunes";
            break;
        case 2:
            $dia = "Martes";
            break;
        case 3:
            $dia = "Miércoles";
            break;
        case 4:
            $dia = "Jueves";
            break;
        case 5:
            $dia = "Viernes";
            break;
        case 6:
            $dia = "Sábado";
            break;
        case 7:
            $dia = "Domingo";
            break;
    }

    return $dia;
}
function sacarCapitales($nombre)
{
    $paises = array("españa" => "madrid", "alemania" => "berlín", "francia" => "parís", "italia" => "roma");
    if (count(func_get_args()) == 1) {
        foreach ($paises as $nombre => $capital) {
            return "pais " . $nombre . " capital " . $capital;
        }
    } else {
        return " capital " . $paises[$nombre];
    }
}

function esNumeroPar($num = 0)
{

    if ($num % 2 == 0) {
        $esPar = true;
    } else {
        $esPar = false;
    }
    return $esPar;
}

function arrayAleatorio($tam = 5, $min = 1, $max = 3)
{
    $arrayRand = [];
    for ($i = 0; $i < $tam; $i++) {
        $arrayRand[$i] = rand($min, $max);
    }
    // echo "el array random es de tamaño ".$tam." <br/>";
    return $arrayRand;

}


function arrayPares($array = [1, 2, 3, 4])
{
    foreach ($array as $pos => $numero) {
        $esPar = esNumeroPar($numero);
        if ($esPar == true) {
            $array[$pos] = 0;
        }
    }
    return $array;
}



function mayor()
{
    $argumentos = func_get_args();
    $mayor = 0;
    for ($i = 0; $i < count($argumentos); $i++) {
        if ($argumentos[$i] > $mayor) {
            $mayor = $argumentos[$i];
        }
    }
    return $mayor;
}
function concatenar()
{
    $argumentos = func_get_args();
    $cadena = "";
    for ($i = 0; $i < count($argumentos); $i++) {
        $cadena .= " " . $argumentos[$i];

    }
    return $cadena;
}
?>