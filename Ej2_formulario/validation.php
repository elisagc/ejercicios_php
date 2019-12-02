<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php

if (!empty($_POST["name"] && 
!empty($_POST["idioma"] && 
!empty($_POST["genero"] &&
!empty($_POST["apes"] && 
!empty($_POST["nacionalidad"] && 
!empty($_POST["aficiones"]))))))){
 
    $nombre=$_POST["name"];
    $apes=$_POST["apes"];
    $genero=$_POST["genero"];
    $idiomas=$_POST["idioma"];
    $nacionalidad=$_POST["nacionalidad"];
    $aficiones=$_POST["aficiones"];

    print_r($aficiones);
    echo <<<HRD
    <p>Hola $nombre</p> 
    <p>eres del género $genero</p>
    <p>Hablas:</p>
HRD;

    foreach ($idiomas as $idioma){
    echo $idioma;
    };

    echo <<<HRD
    <p>Eres de nacionalidad: $nacionalidad</p>
    <p>Tus aficiones son:</p>
HRD;

    foreach ($aficiones as $aficion){
        echo $aficion;
        echo "<br>";
    };
 
}else{

     echo "<p>" . "Por favor, introduzca datos" . "</p>";
     include "index.php";

};

?>
</body>
</html>

