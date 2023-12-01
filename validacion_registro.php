<?php
include("db_conection.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['email'];

$registro = "INSERT INTO usuario (nombre,usuario,contrasena,correo) VALUE ('$nombre','$usuario','$contrasena','$correo')";
$validacion = mysqli_query($conexion,$registro);

?>
