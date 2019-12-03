<?php

function limpiarString($string){ 
    
    $newString=$string;
    $newString=trim($newString);
    $newString=strip_tags($newString);
    $newString=htmlspecialchars($newString);
    $newString=preg_replace('/( ){2,}/u',' ',$newString);; //quitar espacios en blanco intermedios también
    
    return $newString;
};

function reemplazar($string){
    $newString=$string;
    $newString=str_replace("”",'"',$newString);
    $newString=str_replace("“",'"',$newString);
    $newString=str_replace('a','b',$newString);

    return $newString;
}

function posicionesPalabra($word,$text){ // DEVUELVE LAS POSICIONES DE UNA PALABRA EN UN TEXTO EN UN ARRAY
    $pos=[]; 
    $text=trim($text);
    $textArr=explode(" ", $text);   
        if (in_array($word,$textArr)){   
            for ($i=0; $i<count($textArr); $i++){
                if($textArr[$i]===$word){
                    array_push($pos,$i);
                }
            }
        }else{
            return false;
        }
        return $pos;
}

function existe($word,$text){  // SI EXISTE UNA PALABRA EN UN TEXTO
    $textArr=explode(" ", $text);
        if (in_array($word,$textArr)){
          echo "existe";
        }else{
          echo "no existe";
        }
}

function delete($texto,$palabra){ //BORRAR UNA PALABRA
    $newText=str_replace($palabra,"",$texto); // (valor buscado, valor por el que se sustituye, cadena sobre la que se busca)
    $newText=trim($newText);
    $newText=str_replace("  "," ",$newText);
    pintarTextoEditado($newText);
}

function underline($texto,$palabra){ //SUBRAYAR LA PALABRA
    $newText=str_replace($palabra,"<u>$palabra</u>",$texto);
    $newText=trim($newText);
    pintarTextoEditado($newText);
}

function standOut($texto,$palabra){ //DESTACAR EN AMARILLO LA PALABRA
    $newText=str_replace($palabra,"<span class='yellow'>$palabra</span>",$texto);
    $newText=trim($newText);
    pintarTextoEditado($newText);
}

function mayus($texto,$palabra){
    $newText=str_replace($palabra,strtoupper($palabra),$texto);
    $newText=trim($newText);
    pintarTextoEditado($newText);
}

function minus($texto,$palabra){
    $newText=str_replace($palabra,strtolower($palabra),$texto);
    $newText=trim($newText);
    pintarTextoEditado($newText);
}

function tacha($texto,$palabra){
    $newText=str_replace($palabra,"<s>$palabra</s>",$texto);
    $newText=trim($newText);
    pintarTextoEditado($newText);
}

function reemplaza($word,$text,$sust){
    $newText=str_replace($word,$sust,$text);
    pintarTextoEditado($newText);
}

function pintarTextoEditado($text){
echo <<<HRD
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="style.css">
            <title>Document</title>
        </head>
        <body>
        <p>$text</p>
        </body>
        </html>
HRD;
}


?>