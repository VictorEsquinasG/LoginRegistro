<?php
    include("login/datos/accesoadatos.php");
    include("login/Helpers/valida.php");
   
     //Cogemos el valor de los campos del formulario y los metemos en variables
       $nombre = $_GET['id'];
       $password = $_POST['pass'];
       $rol = $_POST['rol'];
       
       if (existeUsuario($nombre))
       {
            ModificaUsuario($nombre,$password,$rol);
            header("Location: ../vista/listado.php?mal=2");
       }else {
            header("Location:../vista/listado.php?mal=2");  // Le devolvemos al formulario
       }
   
?>