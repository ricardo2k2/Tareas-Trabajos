<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>taller01v2</title>
</head>
<body>
    <h2>Ejercicio de Fecha switch version<h2> <br>
    <?php
        date_default_timezone_set('America/Asuncion');
        $dia_ingles = date('D');
        $hoy = "El dia de hoy es: ";

        switch ($dia_ingles) {
            case 'Mon': echo "$hoy Lunes";break;
            case 'Tues': echo "$hoy Martes";break;
            case 'Wed': echo "$hoy Miercoles";break;
            case 'Thu': echo "$hoy Jueves";break;
            case 'Fri': echo "$hoy Viernes";break;
            case 'Sat': echo "$hoy Sabado";break;
            case 'Sun': echo "$hoy Domingo";break;
        }
    ?>
</body>
</html>