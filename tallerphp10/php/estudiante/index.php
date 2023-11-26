<?php //esto devuelve los datos de estudianteModel
    require_once('estudianteModel.php');
    $object = new estudianteModel();
    $rows = $object->listar(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../../css/table.css"> 
</head>
<body>
    <?php
    require_once("../navbar.php");
    ?>
    
<section class="intro">
    <div class="container">
        <div class="mb-3">
            <h2>Listado de Estudiantes</h2>
        </div>
        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style= "position: relative; height:700px;">
         <table class = "table table-striped mb-0">
            <thead style="background-color:darkslateblue;"> <!-- encabezado de tabla -->
                <tr>
                    <td scope="col">ID</td>
                    <td scope="col">NOMBRE</td>
                    <td scope="col">APELLIDO</td>
                    <td scope="col">OPERACIONES</td>
                </tr>  
            </thead>
            <tbody> <!-- cuerpo de tabla -->
            <?php foreach ($rows as $row) { //el foreach permite recorrer el arreglo registros ?>
                <tr>
                    <td><?=$row['idEstudiante']?></td> <!-- esto es un php comprimido -->
                    <td><?=$row['nombre']?></td>
                    <td><?=$row['apellido']?></td>
                    <td>
                        <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#idver<?=$row['idEstudiante']?>" >Ver</a>
                        <a href="edit.php?id=<?=$row['idEstudiante']?>" class ="btn btn-warning">Editar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#iddel<?=$row['idEstudiante']?>">Eliminar</a>

                        <!-- modal para ver y del-->
                        <?php
                            include ('viewModal.php');
                            include ('deleteModal.php');
                        ?>
                    </td>
                </tr>
            <?php } ?> <!-- hacemos esto para que el tr quede atrapado dentro del proceso y recorremos el resultado individual de cada uno -->
            </tbody>
        </table>
    </div>
    </div>
</section>
</body>
<script src="../../js/bootstrap.bundle.min.js"></script>
</html>