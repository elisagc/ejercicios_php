<?php

function html(){

echo <<<HRD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data" action="$_SERVER[PHP_SELF]" method="POST"> 
        <h1> Introduzca una letra </h1>
        <input type="text" name="letra"/>
        <input type="submit" value="Comprobar" name="submit"/>
    </form>
</body>
</html>
HRD;


}

function palabra(){

$arr=["El resplandor", "Buscando a Nemo", "Titanic","Al final de la escalera", "Seven", "Tesis"];
$_SESSION["aleatorio"]=rand(0,5);
return $arr[$_SESSION["aleatorio"]];

}
?>