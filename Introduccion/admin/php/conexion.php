<?php
//base de datos mitiendilla
//usuario admin
//password: Z(-+v0{9mbrfs9vw
$servidor="localhost";
$nombreBD="mitiendilla";
$usuario="admin";
$pass="Z(-+v0{9mbrfs9vw";
$conexion = new mysqli($servidor, $usuario, $pass, $nombreBD);
if($conexion -> connect_error){
    die("No se pudo conectar al base de datos");  
}
?>