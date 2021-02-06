<?php
  include "./conexion.php";
  $nombre =$_POST['nombre'];
  $ap =$_POST['ap'];
  $emai l=$_POST['email'];
  $p1 =$_POST['p1'];
  $p2 =$_POST['p2'];
  $id =$_POST['id'];

  if(trim($p1)=="" && trim($p2)==""){
    $conexion->query("update usuarios set
    nombre='$nombre',
    apellido='$ap',
    email='$email' where id=$id ")or die($conexion->error);
    header("Location: ../usuarios.php?succes=Actualizado correctamente");
  }else{
      if( $p1 == $p2){
          $pass=sha1($p1);
          $conexion->query("update usuarios set
          nombre='$nombre',
          apellido='$ap',
          password='$pass'
          email='$email' where id=$id ")or die($conexion->error);
          header("Location: ../usuarios.php?succes=Actualizado correctamente"); 
      }else{
          //hay error
          header("Location: ../usuarios.php?error=Los campos no coinciden");
      }
      
  }

  

  ?>