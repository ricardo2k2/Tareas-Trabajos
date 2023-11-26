<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Arreglos con PHP</h3>
        <?php
            $nombres[] = "JUAN";
            $nombres[] = "ROSA";
            $nombres[] = "JULIO";
            $nombres[] = "ARACELI";
            $nombres[] = "SOFIA";
            //LISTAR
            for ($indice=0; $indice < count($nombres); $indice++) { 
                echo "Nombre:" . $nombres[$indice] . "<br>";
            }  
        ?>
            <table class="table">
                <thead> <!-- encabezado de la tabla -->
                    <th>Nombres</th>
                </thead>
                <tbody> <!-- cuerpo de la tabla -->
                    <?php
                        for ($i=0; $i < count($nombres) ; $i++) { 
                            ?>
                            <tr> <!-- linea de la tabla -->
                                <td>
                                    <?= $nombres[$i]?>
                                </td>
                            </tr>
                            <?php
                        }
                         ?>
                    
                </tbody>
            </table>
            <table class="table">
                <thead> <!-- encabezado de la tabla -->
                    <th>Formas de pago</th>
                </thead>
                <tbody> <!-- cuerpo de la tabla -->
                    <?php
                    $fpagos = array("Efectivo", "Tarjeta", "Transferencia", "Paypal");
                        for ($i=0; $i < count($fpagos) ; $i++) { 
                            ?>
                            <tr> <!-- linea de la tabla -->
                                <td>
                                    <?= $fpagos[$i]?>
                                </td>
                            </tr>
                            <?php
                        }
                         ?>
                    
                </tbody>
            </table>

    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</html>