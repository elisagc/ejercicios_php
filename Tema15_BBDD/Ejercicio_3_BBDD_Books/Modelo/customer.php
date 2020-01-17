<?php

session_start();
// ACCEDE A LA BASE DE DATOS Y COMPRUEBA QUE EXISTE EL USUARIO

spl_autoload_register(function($className){
    echo $className;
    include __DIR__ . '../../clases/' . $className . '.php'; 
});

$user=$_SESSION['name'];
$pass=$_SESSION['pass'];


$selectUser=<<<SEL
SELECT email, password from customer where email='$user';
SEL;

$con = Conexion::getInstance();
$resultSelect= $con->selectQuery($selectUser);
var_dump($resultSelect);

//$con->query($query);
$con->dbClose();

?>