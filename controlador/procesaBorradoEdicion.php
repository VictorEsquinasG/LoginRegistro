<?php
$borrar = $_GET['del'];
$nombre = $_GET['id'];

if ($borrar=='t')
{
    borraUsuario($nombre);
    header("Location:listado.php?mal=2");
}else {
    header("Location: ../vista/formuEditar.php?id=$nombre");
}

?>