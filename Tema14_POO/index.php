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

include("vehiculos.php");
$renault=new Coche();
$pegaso=new Camion();
$renault->girar();
echo "El coche tiene " . $renault->ruedas . " ruedas";
echo " El camión tiene " . $pegaso->ruedas ." ruedas";
$renault->establece_color("Rojo", "Renault");

?>

</body>
</html>