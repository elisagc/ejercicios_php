<?php
  $db_host="mysql:host=localhost";   //Dirección del servidor de la BBDD
  $db_user="root";                   //Usuario de la BBDD
  $db_password="";                   //Contraseña de la BBDD
  
  try{
    $conexion= new PDO($db_host,$db_user,$db_password);
  }catch(PDOException $exception){
      print "Error" . $exception->getMessage();
  }


  
 

?>