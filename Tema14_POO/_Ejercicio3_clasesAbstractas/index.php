<?php

spl_autoload_register(function($className){
     include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
});


if (isset($_POST['submit'])){
    $cuadrado=new Cuadrado();
    $cuadrado->setTamaño(60,60);
    $cuadrado->setColor();
    $cuadrado->crearFigura();

}else{
    echo "kkk";
}



?>