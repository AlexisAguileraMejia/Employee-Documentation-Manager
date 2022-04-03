<?php
$nombre = $_POST['Nombre'];
$apellidoma = $_POST['ApellidoMa'];
$apellidopa = $_POST['ApellidoPa'];
$fecha = $_POST['Fecha'];
$estadocivil = $_POST['EstadoCivil'];
$sexo = $_POST['Sexo'];
$nacionalidad = $_POST['Nacionalidad'];
$telefono = $_POST['Telefono'];
$movil = $_POST['Movil'];
$correo = $_POST['Correo'];
$direccion = $_POST['Direccion'];
$rfc = $_POST['RFC'];
$curp = $_POST['CURP'];
$nss = $_POST['NSS'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mis Datos</h2>
    <p> Nombre : <?php echo "$nombre"; ?></p>
    <p> Apellido Materno : <?php echo "$apellidoma"; ?></p>
    <p> Apellido Paterno : <?php echo "$apellidopa"; ?></p>
    <p> Fecha de Nacimiento : <?php echo "$fecha"; ?></p>
    <p> Estado Civil: <?php echo "$estadocivil"; ?></p>
    <p> Sexo : <?php echo "$sexo"; ?></p>
    <p> Nacionalidad : <?php echo "$nacionalidad"; ?></p>
    <p> Telefono : <?php echo "$telefono"; ?></p>
    <p> Movil : <?php echo "$movil"; ?></p>
    <p> Correo Electronico : <?php echo "$correo"; ?></p>
    <p> Direccion : <?php echo "$direccion"; ?></p>
    <p> RFC : <?php echo "$rfc"; ?></p>
    <p> CURP : <?php echo "$curp"; ?></p>
    <p> NSS : <?php echo "$nss"; ?></p>

    <input> </input
</body>
</html>