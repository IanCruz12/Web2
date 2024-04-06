<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Practico 2</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost", "root","","examen2") or die ("Problemas de conexion");
    $registros=mysqli_query($conexion, "SELECT Id, nombre, correo FROM personas WHERE correo LIKE '%google%' ") or die
    ("Problemas con el select".mysqli_error());
    while($reg=mysqli_fetch_array($registros)){
        echo "Id: ".$reg['Id']." Nombre:  ".$reg['nombre']." Correo:  ".$reg['correo'];
        echo "<br>";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>