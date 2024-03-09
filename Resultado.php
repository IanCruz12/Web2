<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados</title>
</head>
<body>
<?php
        echo "<b>Datos generales</b><br><br>";
        echo "Su Nombre es: <b> {$_POST['Nombre']} {$_POST['ApellidoP']} {$_POST['ApellidoM']} </b><br>";
        echo "Su Nombre de usuario es: <b>{$_POST['usuario']}</b><br>";
        echo "Su Contraseña es: <b>{$_POST['contra']}</b><br>";
        echo "Su Fecha de nacimiento es: <b>{$_POST['Fech']}</b><br><br>";

        echo "<b>Datos de facturacion</b><br><br>";
        echo "Su Pais es: <b>{$_POST['pais']}</b><br>";
        echo "Su Calle es: <b>{$_POST['calle']}</b><br>";
        echo "Su Numero de Casa es: <b>{$_POST['numcasa']}</b><br>";
        echo "Su Colonia es: <b>{$_POST['colonia']}</b><br>";
        echo "Su E-mail es: <b>{$_POST['email']}</b><br>";
        echo "Su RFC es: <b>{$_POST['rfc']}</b><br>";
        echo "Su CP es: <b>{$_POST['cp']}</b><br>";
        
?>
</body>
</html>