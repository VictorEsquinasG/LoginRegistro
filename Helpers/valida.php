<?php
    function campoVacio($campo) {
        $campo = trim($campo);  // Le quitamos espacios a izquierda y derecha, nos ahorramos mirar " "
        return !((isset($campo)) && ($campo!="") && (!is_null($campo)));    // Devolvemos true si el campo está vacío
    }


    function estaEn($cadena, $palabra) {
        if (strrpos($cadena,$palabra)===false)  // La funcion puede devolver false o valores numericos 
        {                                       // Que pueden ser interpretados como tal erróneamente
            return false;
        }else {
            return true;
        }
    }

    function rangoValido($num, $min, $max) {
        if (($num<$min) && ($num>$max))
        {
            return true;
        }else {
            return false;
        }
    }

    // function validaContraseña($pass) {
    //     if ($pass.lenght > )
    //     {

    //     }
    // }

    
?>