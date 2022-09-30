<?php

function nuevoUsuario($nombre,$contraseña,$rol){
    $fichero = "../datos/badat.csv";
    $nuevo = leeFichero("../datos/badat.csv");
    $nuevo .= "\n$nombre;$contraseña;$rol";
    file_put_contents($fichero,$nuevo); 
}

function leeFichero($ruta="../datos/badat.csv") {
    $s = file_get_contents($ruta);
    return $s;
}

function leeUsuarios($ruta="../datos/badat.csv") {
    $s = file_get_contents($ruta);
    $lineas = explode("\n",$s);
    foreach ($lineas as $value) {
       $users[explode(";",$value)[0]] = explode(";",$value);
    }
    return $users;
}


function contraseñaCorrecta($user, $pass) {
    $usuario = leeUsuario($user);
    $valido = false;
        if ($usuario[0]==$user && $pass==$usuario[1])
        {
            $valido = true; 
        }
    return $valido;
}

function leeUsuario($nombre) {
    if (existeUsuario($nombre))
    {
        return leeUsuarios()[$nombre];
    }else {
        return $array = [];
    }
}

function existeUsuario($usuario,$ruta="../datos/badat.csv"):bool {
    $usuarios = leeUsuarios($ruta);

    return isset($usuarios[$usuario]);    
}

function getRol($usuario)
{
    $rol = "mindundi";  // A priori es un mindundi
        if (existeUsuario($usuario))
        {
            $user = leeUsuario($usuario); 
            $rol = trim($user[2]);
        }
    return $rol;
}

function ModificaUsuario($nombre,$pass,$rol){
    $fichero = "../datos/badat.csv";
    $users = leeUsuarios();
    $nuevo='';
    $fin = array_key_last($users);
    foreach ($users as $c => $v) {
        
        if ($v[0]==$nombre) //Concatenamos todos los usuarios que no sean el dado
        {
            $nuevo .= $v[0].";".$pass.";".$rol;
        }else {
            $nuevo .= $v[0].";".$v[1].";".$v[2];   
        }
        if ($c!=$fin)
        {
            $nuevo .= "\n";
        }
    }
    file_put_contents($fichero,$nuevo);
}

function borraUsuario($nombre) {
    $fichero = "../datos/badat.csv";
    $users = leeUsuarios();
    $nuevo = '';
    $fin = array_key_last($users);
    foreach ($users as $c => $v) {
        if ($v[0]!=$nombre) //Concatenamos todos los usuarios que no sean el dado
        {
            $nuevo .= $v[0].";".$v[1].";".$v[2];
            if (($c!=$fin))
            {
                $nuevo .= "\n";
            }     
        }
    }

    file_put_contents($fichero,$nuevo);
}

?>