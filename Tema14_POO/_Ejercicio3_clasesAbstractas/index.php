<?php

spl_autoload_register(function($className){
     include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
});



    $cuadrado=new Cuadrado();
    $cuadrado->setTamaño(100,100);
    $cuadrado->setColor();
    $cuadrado->crearFigura();



?>