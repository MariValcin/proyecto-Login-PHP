<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacto.css">
    <title>Contacto</title>
</head>
<body>
<div class="contenedor">
<header>
    <nav>
    <ul>
    <li><a href="home.php">Inicio</a></li>
    <li><a href="nosotros.php">Sobre nosotros</a></li>
    <li><a href="#">Contacto</a></li>
    <li><a href="usuario.php">Usuarios</a></li>

    </ul>
    </nav>

</header> 
<form action="datos.php" method="post">
<h2>Contactanos</h2>
<br><br>
<label for="">ingresa tu nombre</label>
<br>
<input type="text" name= "nombre">
<br><br>
<label for="">Ingresa tu usuario</label>
<br>
<input type="text" name= "usuario">
<br><br>
<label for="">Ingresa tu correo</label>
<br>
<input type="email" name="correo" id="" >
<br><br>
<label for="">Comentarios</label>
<br>
<textarea name="peticion" id="" cols="30" rows="10"></textarea>
<br><br>
<button>Enviar</button>

</form>

    </div>


</body>
</html>