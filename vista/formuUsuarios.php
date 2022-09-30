<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>Formulario de creación de usuarios</title>
</head>
<body>
    <br><br><hr><br>
<h3>Nuevo usuario</h3>
<form action="../controlador/procesaCreacionUsuario.php" method="post">
    <label for="nombre">Nombre de usuario</label> <br>
    <input type="text" name="nombre" placeholder="Nombre de usuario"> <br>
    <label for="pass">Contraseña</label>  <br>
    <input type="password" name="pass" placeholder="············" id=""> <br>
    <label for="">Nivel de acceso</label> <br>
    <input type="radio" name="rol" value="admin" id="admin">
    <label for="admin">Administrador</label> 
    <input type="radio" name="rol" value="mindundi" id="mindundi" checked >
    <label for="mindundi">Usuario</label>
    <br>
    <input type="submit" value="Crear">
</form>
  <br><br><hr><br>

  <center>
    <h4><a href="listado.php?mal=2">Volver al listado</a></h4>
  </center>
</body>
</html>

<?php

?>