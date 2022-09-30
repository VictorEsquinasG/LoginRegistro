<?php
/**
 * Crea un token al inicio de cada página para
 * mantener la sesión iniciada
 */
function IniciaSesion(string $nombre, string $pass)
{
    $ruta = "../datos/".(rand()*7).".csv";
    file_put_contents($ruta,"$nombre;$pass;admin");
    return $ruta;
}

function SesionCorrecta($rutaToken):bool
{
    $existe = file_exists($rutaToken);
    unlink($rutaToken); // Lo borramos 
    return $existe;
}
?>