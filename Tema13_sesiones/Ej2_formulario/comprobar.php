<?php

function comprobarCaracteres($palabra){

    $permitidos = "áéíóúabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i=0; $i<strlen($palabra); $i++){
       if (strpos($permitidos, substr($palabra,$i,1))===false){
          return false;
       }
    }
    return true;
 }

 function comprobarPass($pass){
     if(strlen($pass) <= 5) {
         return false;
     }
     return true;
 }



/*

$nombres= [
    "ana" => [
        "apellido" => "sersi",
        "contraseña" => 123
    ], 
    "elisa" => [
        "apellido" => "garcia",
        "contraseña" => 456],
    "pili" => [
        "apellido" => "rus",
        "contraseña" => "pilar"],
];

foreach($nombres as $nombre => $datos){
   echo $nombre;
    var_dump($datos);

}
*/
?>