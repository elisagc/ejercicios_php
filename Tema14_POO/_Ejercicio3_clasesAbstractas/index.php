<?php

spl_autoload_register(function($className){
   // echo $className;
     include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
});
    $color=[50,70,30];
    $tamaño=[100,200];
    $cuadrado=new Cuadrado($color,$tamaño);
    $cuadrado->crearFigura();
echo "<br>";
echo "<br>";
$color2=[50,70,30];
$tamaño2=[100,100];
    $circulo=new Circulo($color2,$tamaño2);
    $circulo->crearFigura();
    

?>