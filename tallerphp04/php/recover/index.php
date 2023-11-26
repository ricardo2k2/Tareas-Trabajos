<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once dirname(__FILE__,3).'/php/config/header.php'; //requerir una vez  
        // echo dirname(__FILE__,3);
        // /var/www/html/tallerphp04/php/create
    ?>
    <title>listado </title>
</head>
<body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/menu.php'; //requerir una vez  
    ?>
    <div class="container-md">
        <?php
            $saltolinea = "";
            $fichero= fopen("../datos.txt","r") or die("problema al abrir el fichero"); //abrir fichero
            while (!feof($fichero)) { //la condicion es que si no es el fin del fichero se recorren las lineas, "feof" es fin del fichero
                $linea = fgets($fichero); //leer fichero, esta instruccion lee la primera linea del fichero
                $saltolinea = nl2br($linea); //es como un br pero funcion de php
                echo "<h4>" .$saltolinea. "</h4>";
            }
            fclose($fichero);
            echo "<h5>Fin del listado!</h5>";
        ?>
    </div>
</body>
    <?php
        require_once dirname(__FILE__,3).'/php/config/footer.php';  
    ?>
</html>