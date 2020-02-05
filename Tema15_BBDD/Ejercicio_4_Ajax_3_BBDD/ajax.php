<?php

//header("Content-Type:application/json;charset=UTF-8");

//$objeto = json_decode($_GET["objeto"], false);
include("clases/Conexion.php");
$con = Conexion::getInstance();
$result = $con->selectQuery("select * from libros");
var_dump($result);
