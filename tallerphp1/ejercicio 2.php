<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej02</title>
</head>
<body>
    <?php
    $valor = rand(1, 3);
    if ($valor==1) {
        echo "EL valor es uno";
    } elseif ($valor==2) {
        echo "El valor es dos";
    } elseif ($valor==3) {
        echo "El valor es tres";
    }
    ?>
</body>
</html>