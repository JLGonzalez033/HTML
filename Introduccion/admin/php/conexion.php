<?php
//base de datos: id16100066_tiendilla1
//usuario: id16100066_admin
//password: KuPE6vY$I~N9b]E-
$servidor="localhost";
$nombreBD="id16100066_tiendilla1";
$usuario="id16100066_admin";
$pass='KuPE6vY$I~N9b]E-';
$conexion = new mysqli($servidor, $usuario, $pass, $nombreBD);
if($conexion -> connect_error){
    die("No se pudo conectar al base de datos");  
}
?>