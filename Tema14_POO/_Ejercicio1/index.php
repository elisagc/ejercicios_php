<?php

//NO BORRAR!!!! EJEMPLO 

spl_autoload_register(function($className){
    //print($className);
    //include __DIR__ . '/class/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
    include str_replace("\\","/",  $className) . '.php';  // CUANDO USAS NAMESPACE
   
});

use clase\Micabecera;
use otras_clases\Micabecera as Micabecera2;
//https://www.php.net/manual/es/language.oop5.autoload.php
//https://cybmeta.com/como-registrar-y-utilizar-autoloaders-en-php

$obj1=new Micabecera();
echo $obj1->getCabecera();
$obj1->parrafo("Holaaaaaaaaaaaaa");
echo $obj1->getFooter();


$obj2=new Micabecera2("Hola paisana");
//echo $obj2->getH1();
echo $obj2;



?>