<?php

/*
 * Crear una BBDD nueva en phpMyAdmin
 * Se crea la sentencia $query
 * Se prepara con prepare
 * Se ejecuta con execute
 */

include("conectDB.php");

$query= file_get_contents("bbdd.sql");
/*$query=<<<SQL
create database if not exists prueba3;
use prueba3;
CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) engine='Innodb';
SQL;
*/

try{
    $statement= $conexion->prepare($query);
    $statement->execute();
    echo "ÉXITO";

}catch(PDOException $exception){
    print $exception;
}


?>


