<?php

/*
 * Crear una BBDD nueva en phpMyAdmin
 * Se crea la sentencia $query
 * Se prepara con prepare
 * Se ejecuta con execute
 */

include("conectDB.php");

$query=<<<SQL
create database if not exists prueba3;
SQL;

try{
    $statement= $conexion->prepare($query);
    $statement->execute();

}catch(PDOException $exception){
    print $exception;
}


?>


