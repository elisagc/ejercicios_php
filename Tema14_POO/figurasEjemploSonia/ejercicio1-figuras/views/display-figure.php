<?php
session_start();
require_once "../components/Cuadrado.php";
require_once "../components/Circulo.php";
require_once "../components/Rectangulo.php";
require_once "../components/FormBuilder.php";
require_once "../components/Triangulo.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FIGURES</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../styles/main.css" />
  <script src="main.js"></script>
</head>
<body>
<h1 class='mainHeader'>¡¡Tus figuras!!</h1>
<?php
if (isset($_POST["confirmar"])) {
  if (isset($_POST["lados"])) {
    $cuadrado = new Cuadrado($_POST["cuadradoColor"], intVal($_POST["lados"]));
    echo $cuadrado;
  }
  if (isset($_POST["radio"])) {
    $circulo = new Circulo($_POST["circuloColor"], intVal($_POST["radio"]));
    echo $circulo;
  }
  if (isset($_POST["base"])) {
    $rectangulo = new Rectangulo($_POST["rectanguloColor"], array(intVal($_POST["base"]), intVal($_POST["altura"])));
    echo $rectangulo;
  }
  if (isset($_POST["baseTriangulo"])) {
    $rectangulo = new Triangulo($_POST["trianguloColor"], array(intVal($_POST["baseTriangulo"]), intVal($_POST["alturaTriangulo"])));
    echo $rectangulo;
  }
  FormBuilder::printGoBack();
} else {
  header("Location: ../index.php?error=true");
}
?>
</body>
</html>