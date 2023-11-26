<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once dirname(__FILE__,3).'/php/config/header.php'; //requerir una vez  
        // echo dirname(__FILE__,3);
        // /var/www/html/tallerphp04/php/create
    ?>
    <title>Recover Records</title>
</head>
<body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/menu.php'; //requerir una vez  
    ?>
    <div class="container-md">
        <?php
            $saltolinea = "\n";
            $fichero= fopen("../datos.txt","a") or die("problema en la creacion"); //abrir fichero,los puntos significan dos niveles superiores en la ubicacion
            fputs($fichero, $_POST['nombre'].$saltolinea); //fputs es como escribir, en este caso escribimos en el fichero
            fputs($fichero, $_POST['apellido'].$saltolinea);
            fputs($fichero, $_POST['telefono'].$saltolinea);
            fputs($fichero, $_POST['cedula'].$saltolinea);
            fputs($fichero, "---------------------".$saltolinea);
            fclose($fichero); //fclose se cierra el fichero
            echo " <h3>Datos guardados correctamente!</h3>";
        ?>
    </div>
</body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/footer.php';  
    ?>
</html>