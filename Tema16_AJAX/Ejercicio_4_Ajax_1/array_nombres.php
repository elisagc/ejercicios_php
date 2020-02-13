<?php

$a = array("Elisa", "Miguel", "Manoli", "Pepe", "Pepa");

$nombre = strtolower($_REQUEST['nombre']);
$sugerencia = "";
$long = strlen(($nombre));

foreach ($a as $nom) { //stristr compara cadenas dando igual mayus y minus
    if (stristr($nombre, substr($nom, 0, $long))) {
        if ($sugerencia === "") {
            $sugerencia = $nom;
        } else {
            $sugerencia = $sugerencia . "," . $nom;
        }
    }
}

if ($sugerencia === "") {
    echo "No hay sugerencias";
} else {
    echo $sugerencia;
}
