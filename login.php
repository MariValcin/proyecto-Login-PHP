<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <h1>Bienvenidos!!!</h1></nav>
        <div class="contenedor">
        <form action="validacion.php" method="post">
        <h2>Login</h2>
        <br></br>
        <label for="">Usuario</label>
        <br>
        <input type="text" name="Usuario">
        <br></br>
        <label for="">Contraseña</label>
        <br>
        <input type="password" name="contrasena"
        <br></br>
        <button class="ingresar">Ingresar</button>

        </form>
        <p class = registrate>Si no tienes una cuenta, registrate</p>
        <p class ="vinculo"><a href="registro.php" class= "r">aqui</a></p>
        
        </div>
    </body>
</html>