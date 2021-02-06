<?php
  include "conexion.php"
  $nombreP=$_POST['nombre']
  $precio=$_POST['nombre']
  $invnetario=$_POST['nombre']


  $nombre=$_FILES['imagen']['name'];
  $temp = explode(".", $nombre);
  $extencion =end($temp);
  $nombreFinal = time().".".$extension;
  echo $nombreFinal;
if($extension == 'jpg' || $extension == 'png' || $extension == 'PNG' || $extension == 'JPG'){
    if( move_uploaded_file($_FILES['imagen']['tmp_name'], "../img/productos/".$nombreFinal)){

        $conexion ->query("
        insert into productos (nombre,precio,inventario)
        values('$nombreP',$precio,$inventario,'$nombreFinal')
      ")or die($conexion -> error);
      header("Location: ../productos.php");

    }else{
        header("Location: ../productos.php?error=Ah ocurrido un error al subir la imagen");
    }
}else{
    header("Location: ../productos.php?error=Tipo de archivo no valido");
}

 