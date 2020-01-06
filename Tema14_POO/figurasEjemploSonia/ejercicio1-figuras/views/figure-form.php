<?php
session_start();
require_once "../components/FormBuilder.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FIGURE FORM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../styles/main.css" />
</head>
<body>
<form action="display-figure.php" class="mainForm" method="post" style="margin-top: 10px !important;">

<?php
if (isset($_SESSION["figures"]["cuadrado"])) {
  echo "<h1 class='mainHeader'>Cuadrado</h1> ";
  FormBuilder::printSquareSubForm();
}
if (isset($_SESSION["figures"]["circulo"])) {
  echo "<h1 class='mainHeader'>Círculo</h1> ";
  FormBuilder::printCircleSubForm();
}
if (isset($_SESSION["figures"]["rectangulo"])) {
  echo "<h1 class='mainHeader'>Rectángulo</h1> ";
  FormBuilder::printRectangleSubForm();
}
if (isset($_SESSION["figures"]["triangulo"])) {
  echo "<h1 class='mainHeader'>Triángulo</h1> ";
  FormBuilder::printTriangleSubForm();
}
?>
<button class="confirmButton" name="confirmar" id="confirmar">Confirmar</button>
</form>
</body>
</html>