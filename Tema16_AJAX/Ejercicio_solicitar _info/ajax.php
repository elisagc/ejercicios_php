<?php
//header("Content-Type: application/json; charset=UTF-8");

$objeto = json_decode($_GET['objeto'], false);
//prueba: 
//$objeto = json_decode('{"tabla":"book","valor":3}');


$servidor = "localhost";
$usuario = "root";
$password = "";
$bbdd = "bookstore";

$conexion = new mysqli($servidor, $usuario, $password, $bbdd);


if ($conexion->connect_error) {
    die("Error de conexión: " + $conexion->connect_error);
} else {

    $sql = "select stock, price from $objeto->tabla where id=$objeto->valor";
    $result = $conexion->query($sql);

    $salida = array();
    $salida = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($salida);
}

$conexion->close();
