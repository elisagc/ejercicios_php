<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

include('conexion.php');

$consulta="select * from persona";
$resultado=mysqli_query($conexion,$consulta); // devuelve un resultset, un espacio de memoria donde se almacena el resultado

while($fila=mysqli_fetch_row($resultado)){
  echo $fila[0] . " ";
  echo $fila[1] . " ";
  echo $fila[2] . " ";
}; // ARRAY: mira fila a fila el resultado almacenado virtualmente, lo almacena en un array

mysqli_close($conexion); // cerrar la conexión con la BBDD
?>
    
</body>

