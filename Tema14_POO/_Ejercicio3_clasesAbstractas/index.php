<?php

spl_autoload_register(function($className){
    echo $className;
     include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
});
$color=[50,50,30];
    $tamaño=[100,200];
    $cuadrado=new Cuadrado($color,$tamaño);
   
  var_dump($cuadrado->getLienzo());
    



?>