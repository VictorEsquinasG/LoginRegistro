<?php
    include("login/datos/accesoadatos.php");
    include("login/Helpers/valida.php");
    include("login/Helpers/controlaSesion.php");

    $nombre = $_POST['nombreUsuario'];
    $password = $_POST['pass'];

    if (existeUsuario($nombre) && contraseñaCorrecta($nombre,$password)) //Comprobamos que existe el nombre de usuario en la base de datos
    {
        //Comprobamos q la contraseña sea la adecuada (y exista)
        {
            if (getRol($nombre)=="admin")   //Según su rol
            {
                $ruta = IniciaSesion($nombre,$password);
                header("Location:../vista/listado.php?mal=2&sesion=$ruta");  
            }
            else {
                //Es un mindundi
                header("Location:../vista/mindundi.php");
            }
        }
    }else {
        //No está registrado
        echo '
        <center>
            <h2>Acceso denegado</h2>
        </center>';
    }
    

    //var_dump($_POST['submit']); esto NO es
?>