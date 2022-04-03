<?php

$nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : '';
$apellidoma = isset($_POST['txtApellidoMa']) ? $_POST['txtApellidoMa'] : '';
$apellidopa = isset($_POST['txtApellidoPa']) ? $_POST['txtApellidoPa'] : '';
$fecha = isset($_POST['txtFecha']) ? $_POST['txtFecha'] : '';
$estadocivil = isset($_POST['txtEstadoCivil']) ? $_POST['txtEstadoCivil'] : '';
$sexo = isset($_POST['txtSexo']) ? $_POST['txtSexo'] : '';
$nacionalidad = isset($_POST['txtNacionalidad']) ? $_POST['txtNacionalidad'] : '';
$telefono = isset($_POST['txtTelefono']) ? $_POST['txtTelefono'] : '';
$movil = isset($_POST['txtMovil']) ? $_POST['txtMovil'] : '';
$correo = isset($_POST['txtCorreo']) ? $_POST['txtCorreo'] : '';
$direccion = isset($_POST['txtDireccion']) ? $_POST['txtDireccion'] : '';
$rfc = isset($_POST['txtRFC']) ? $_POST['txtRFC'] : '';
$curp = isset($_POST['txtCURP']) ? $_POST['txtCURP'] : '';
$nss = isset($_POST['txtNSS']) ? $_POST['txtNSS'] : '';

try {
    $conexion = new PDO('mysql:host=localhost;port=3306;dbname=curriculum', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO empleados(Nombre, ApellidoMa, ApellidoPa, Fecha, EstadoCivil, Sexo, Nacionalidad, Telefono, Movil, Correo , Direccion, RFC, CURP, NSS) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $pdo->bindParam(1, $nombre);
    $pdo->bindParam(2, $apellidoma);
    $pdo->bindParam(3, $apellidopa);
    $pdo->bindParam(4, $fecha);
    $pdo->bindParam(5, $estadocivil);
    $pdo->bindParam(6, $sexo);
    $pdo->bindParam(7, $nacionalidad);
    $pdo->bindParam(8, $telefono);
    $pdo->bindParam(9, $movil);
    $pdo->bindParam(10, $correo);
    $pdo->bindParam(11, $direccion);
    $pdo->bindParam(12, $rfc);
    $pdo->bindParam(13, $curp);
    $pdo->bindParam(14, $nss);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch (PDOException $error) {
    echo $error->getMessage();
    die();
}