<?php

spl_autoload_register(function($className){
      include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
 });

// objeto conexión que se instancia 1 vez
$con = Conexion::getInstance();

// query que coge el fichero bbdd.sql en el que está la sentancia sql
$query=file_get_contents("./config/bbdd.sql");
// llamar al método query que ejecuta las sentencias
$con->query($query);
$con->dbClose();
?>