<?php
session_start();
require_once "./components/FormBuilder.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EJERCICIO 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css" />
  <script src="main.js"></script>
</head>
<body>
 

<?php
if (isset($_GET["error"])) {
  echo "<h1 class='mainHeader backgroundRed'>Debes eleigir al menos una figura</h1>";
} else {
  echo "<h1 class='mainHeader'>Elige la/las figuras</h1> ";
}
FormBuilder::printFirgurePicker();
?>

</body>
</html>