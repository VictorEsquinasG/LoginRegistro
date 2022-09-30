<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>Edición de usuario</title>
</head>
<body>
    <br><br><hr><br>   

    <?php
        include("../datos/accesoadatos.php");
        $nombre = $_GET['id'];
        $user = leeUsuario($nombre);
        echo "<h3>Datos del usuario <u>$nombre</u></h3>";
        print 
        "
        <form action='../controlador/procesaEdicion.php?id=$nombre' method='post'>
            <label for='pass'>Editar la contraseña</label>  <br>
            <input type='password' name='pass' placeholder='$user[1]' id=''> <br> <br>
            <label for=''>Nuevo nivel de acceso</label> <br>
        ";
        // Los roles
        $admin = '';
        $us = '';
        if ($user[2]=='admin')
        {
            $admin = 'checked';
        }else {
            $us = 'checked';
        }
        print
        "
            <input type='radio' name='rol' value='admin' id='admin' $admin>
            <label for='admin'>Administrador</label> 
            <input type='radio' name='rol' value='mindundi' id='mindundi' $us >
            <label for='mindundi'>Usuario</label>
            <br> <br>
            <input type='submit' value='Modificar'>
        </form>
        ";
    ?>
    

  <br><br><hr><br>
</body>
</html>