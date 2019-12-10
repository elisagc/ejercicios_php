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

//$renault->ruedas=12; //NOOOO QUEREMOS QUE SE PUEDA MODIFICAR, HAY QUE ENCAPSULAR LA PROPIEDAD RUEDAS
//PROBLEMA AL ENCAPSULAR: NO PODEMOS ACCEDER A LA PROPIEDAD RUEDAS
//Entonces TENEMOS QUE CREAR MÉTODOS GETTER Y SETTER
echo "El coche tiene " . $renault->getRuedas(). " ruedas<br>";
echo " El camión tiene " . $pegaso->getRuedas() ." ruedas<br>";

echo "El coche tiene un motor de " . $renault->getMotor();
echo "El camión tiene un motor de " . $pegaso->getMotor();



?>

</body>
</html>