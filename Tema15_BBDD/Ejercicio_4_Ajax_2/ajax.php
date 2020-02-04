<?php

//Cómo tratar los warning como texto json

error_reporting(0); //elimina warning

$objeto = "";
$objeto->nombre = "Ada";
$objeto->nacimiento = 1985;
$miJSON = json_encode($objeto);
echo $miJSON; // para enviar al front hay que hacer el echo
