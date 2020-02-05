<?php

//Cómo tratar los warning como texto json

error_reporting(0); //elimina warning

// EJEMPLO CON OBJETOS JSON
$objeto = "";
$objeto->nombre = "Ada";
$objeto->nacimiento = 1985;
$miJSON = json_encode($objeto);
//convertimos el objeto a json para poder enviarlo con echo
echo $miJSON; // para enviar al front hay que hacer el echo

//EJEMPLO CON ARRAYS

$a = array("pepe", "eli", "pepa");
$miJSON2 = json_encode($a); //pasa un array a json
//echo $miJSON2;
//en el ejemplo miJSON2 se lee en el front como un array
