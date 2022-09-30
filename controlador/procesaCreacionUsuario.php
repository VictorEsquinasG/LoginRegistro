<?php
  include("login/datos/accesoadatos.php");
  include("login/Helpers/valida.php");

  //Cogemos el valor de los campos del formulario y los metemos en variables
    $nombre = $_POST['nombre'];
    $password = $_POST['pass'];
    $rol = $_POST['rol'];
    
    if (existeUsuario($nombre))
    {
      //sleep(2.5); //Esperamos 2 segundos y medio antes de redireccionar
      header("Location:../vista/listado.php?mal=1");
    }else {
      nuevoUsuario($nombre,$password,$rol);
      header("Location:../vista/formuUsuarios.php");  // Le devolvemos al formulario
    }

    
?>