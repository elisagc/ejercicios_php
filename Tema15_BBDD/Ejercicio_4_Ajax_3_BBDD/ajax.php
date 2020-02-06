<?php

//header("Content-Type:application/json;charset=UTF-8");
include("clases/Conexion.php");
$con = Conexion::getInstance();
$result = $con->selectQuery("select * from book");

$result = json_encode($result);

echo $result;
