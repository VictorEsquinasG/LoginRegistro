<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>Listado</title>
</head>
<body>
    <br><br>
    
        <h3>Listado de usuarios</h3>

        
        <table width="380" id="tabla">
            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Nivel de acceso</th>
                <th></th>
                <!-- Aquí insertaremos los datos con PHP -->
            </tr>
            
        
    
</body>
</html>
<?php
    if ($_GET['mal']==1)
    {
        echo "<script>alert('Usuario ya existente')</script>";
    }
    include("../datos/accesoadatos.php");
    //Insertamos los datos desde el fichero a la tabla
    $usuarios = leeUsuarios("../datos/badat.csv");  
 
    foreach ($usuarios as $user) {
        print "<tr>";
        print "<td>$user[0]</td>";
        print "<td>$user[1]</td>";
        print "<td>$user[2]</td>";
        print "<td>
        <a href='../controlador/procesaBorradoEdicion.php?del=f&id=$user[0]'>
        <img src='../images/pencil.png' alt='editar'></a>
        &nbsp; &nbsp;
        <a href=`../controlador/procesaBorradoEdicion.php?del=t&id=$user[0]`>
        <img src='../images/delete.png' alt='borrar'></a>
        </td>";
        print "</tr>";
    }
    echo "</table>";
    // echo "<center><h4>Usuario &nbsp; &nbsp; &nbsp; &nbsp;  Contraseña &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; Rol</h4>        "."\n";
    // foreach ($usuarios as $usuario) {
    //     echo nl2br($usuario[0]." &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;".$usuario[1]."&nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; ".$usuario[2]."\n");
    // }

    echo "<h5><a href=\"formuUsuarios.php\">Creación de usuarios</a></h5> </center>";
?>  