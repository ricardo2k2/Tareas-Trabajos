<?php
    sleep(3);
    function factorial($numerofactorial) {
        if ($numerofactorial < 2) {
            return 1;
        }else {
            return ($numerofactorial*factorial($numerofactorial-1));
        }
    }
        $num = $_POST['numerofactorial']; //esta validacion es para que no calcule un numero mayor a 10
        if ($num >=10) {
            echo "Prueba con un numero menor a 10 ";
            exit();
        }
        if (!is_numeric($num)) {
            echo "Valor no valido, no es numero";
            exit();
        }

        $factorial = factorial($num);
        echo "Correcto el factorial es: ".$factorial;
    

?>