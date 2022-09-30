<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
</head>
<body>
    <center>
        <h3>Inicio de sesión</h3>
        <form action="../controlador/procesaLogin.php" method="post">
            <label for="nombreUsuario">Usuario:</label>
            <input type="text" name="nombreUsuario" placeholder="Nombre de usuario" > 
            <br> <br>
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" placeholder="············" id="">
            <br> <br>
            <input type="submit" value="Entrar">
        </form>
    </center>
</body>
</html>