<?php

spl_autoload_register(function($className){
      include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
 });

$con = Conexion::getInstance();

//$queryCreate=file_get_contents("./config/createTable.sql");
//$con->query($queryCreate);

//$queryInsert=file_get_contents("./config/insertData.sql");
//$con->query($queryInsert);
//$con->dbClose();
?>