<?php
spl_autoload_register(function ($className) {
      include __DIR__ . './clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
});


$con = Conexion::getInstance();
$res = $con->selectQuery("SELECT * FROM usuarios");
var_dump($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>

<body>

      <table>
            <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Dirección</th>
            </tr>

            <tr>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
                  <td><input type="text" /></td>
            </tr>

      </table>
      <input type="submit" value="borrar" />
      <input type="submit" value="actualizar" />
      <input type="submit" value="agregar" />

</body>

</html>