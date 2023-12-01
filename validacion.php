<?php
include("db_conection.php");

//se declara las variables que contendra los datos del fomulario
$usuario = $_POST['Usuario'];
$contrasena = $_POST['contrasena'];

//Iniciamos sesion
session_start();
$_SESSION['Usuario'] = $usuario;

//realizar la peticion
$consulta = "SELECT*FROM usuario WHERE usuario ='$usuario' and contrasena = '$contrasena'";

//se realiza la consulta

$sql = mysqli_query($conexion,$consulta);
$row = mysqli_fetch_array($sql);

//validar datos

if (mysqli_num_rows($sql)!=0) {
    echo "<h1>Usuario y contraseña incorrecto</h1>";
}
else{
    header("location:home.php");
}

?>