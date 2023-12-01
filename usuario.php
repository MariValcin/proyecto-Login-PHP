<?php
include("db_conection.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="usuario.css">
    <title>Usuario</title>
</head>
<body>
<div class="contenedor">
<header>
    <nav>
    <ul>
    <li><a href="home.php">Inicio</a></li>
    <li><a href="nosotros.php">Sobre nosotros</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="#">Usuarios</a></li>

    </ul>
    </nav>
</header> 
<h1>USUARIOS</h1>
<table>
    <tr>
    <td>id_usuario</td>
    <td>Nombre</td>
    <td>Usuario</td>
    <td>Contraseña</td>
    <td>Correo</td>
    </tr>
    <?php 
    $consulta = "SELECT*FROM usuario";
    $validacion = mysqli_query($conexion,$consulta);
    while ($resultado = mysqli_fetch_array($validacion)){ 
        ?>
        <tr>
        <td><?php echo $resultado['id_usuario']?></td>
        <td><?php echo $resultado['nombre']?></td>
        <td><?php echo $resultado['usuario']?></td>
        <td><?php echo $resultado['contrasena']?></td>
        <td><?php echo $resultado['correo']?></td>
        </tr>
        <?php
          }    
       ?>
</table>   
</div>
</body>
</html>