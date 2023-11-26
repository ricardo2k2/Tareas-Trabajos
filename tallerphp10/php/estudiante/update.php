<?php
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $idEstudiante = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $idCurso = $_REQUEST['idCurso'];
    
    $registro = $object->actualizar($idEstudiante,$nombre,$apellido,$idCurso);

    //echo "Registro de estudiante ".$registro." guardado exitosamente";

    header('location: index.php'); // llama a un php que va a dibujar la tabla de listado
?>