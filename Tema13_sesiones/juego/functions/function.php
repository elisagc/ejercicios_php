<?php

function tabla($num){
    for ($i=0; $i<=10 ; $i++) { 
        $res= $num * $i;
        echo "$num x $i = $res <br>";
    }
}

function validarPassword($x,$y){

    $userPass=array();
    $userPass["pilar"]="1234";
    $userPass["alberto"]="4567";
    $exists=false;
    $correctPass=false;
    
    foreach ($userPass as $name => $password) {
        if($name == $x){
            $exists=true;
        }
        if($password == $y){
            $correctPass=true;
        }
    };   

    if ($exists && $correctPass){
        return "correcto";
    }else {
        return "incorrecto";
    }
}
?>