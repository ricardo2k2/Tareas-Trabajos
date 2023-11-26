<?php
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $codigocurso = $_REQUEST['codigocurso'];
    
    $registro = $object->insertar($nombre,$apellido,$codigocurso);

    //echo "Registro de estudiante ".$registro." guardado exitosamente";

    header('location: index.php'); // llama a un php que va a dibujar la tabla de listado
?>