<?php

function form(...$arr){

    var_dump($arr);

    $check="checked";
   
if(!empty($arr[0])){
 
    $nombre= $arr[0]['nombre'];
    $apes=$arr[0]['apellidos'];
    $pass=$arr[0]['contraseña'];

    if ($nombre === "error"){
        $nombre="";
        $className="error";
        $nombreC="Introduzca nombre sin números";
    }else{
        $className="noerror";
        $nombreC="";
    }

    if($apes === "error"){
        $apes="";
        $classApes="error";
        $apesC="Introduzca Apellidos sin números";
    }else{
        $classApes="noerror";
        $apesC="";
    }

    if($pass==="error"){
        $pass="";
        $classPass="error";
        $passC="Introduzca contraseña mayor de 5 caracteres";
    }else{
        $classPass="noerror";
        $passC="";
    }

    if ($_SESSION["validarNom"] && $_SESSION["validarApes"] && $_SESSION["validarPass"]){
        $correct="Registrado correctamente";
        $nombre= "";
        $apes="";
        $pass="";
        $aviso="verde";
        session_unset();
      
       
     }else{
         $correct="Introduzca correctamente campos en rojo";
         $aviso="rojo";
     }

}else{
    $nombre= "";
    $apes="";
    $pass="";
    $className="noerror";
    $classApes="noerror";
    $classPass="noerror";
    $correct="";
    $aviso="";
    $nombreC="";
    $passC="";
    $apesC="";
}



echo <<<HRD
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

<div class="box">
    <form action='$_SERVER[PHP_SELF]' method="post" class="container">

    <label> Nombre: </label> <br><input type="text" value="$nombre" placeholder="$nombreC" name="nombre" class=$className><br>
    <label> Apellidos: </label><br> <input type="text" value="$apes" placeholder="$apesC" name="apellidos"  class=$classApes>
    <label> Contraseña: </label><br> <input type="password" value="$pass" placeholder="$passC" name="contraseña"  class=$classPass>
    <br>

    <label>Género:</label>
    <br>
    <input type="radio" name="genero" value="masculino" $check><label>Masculino</label> 
    <input type="radio" name="genero" value="femenino"  $check><label>Femenino</label>
    <input type="radio" name="genero" value="otros" $check><label>Otra</label>
    <br><br>

    <div class="box2">
    <h3 class="$aviso">$correct</h3>
    <input type="submit" name="submit">
    </div>
    </form>

<div>
</body>
</html>

HRD;
}

/*

    <label>Género:</label>
    <br>
    <input type="radio" name="genero" value="masculino"><label>Masculino</label> 
    <input type="radio" name="genero" value="femenino"><label>Femenino</label>
    <input type="radio" name="genero" value="otros"><label>Otra</label>

    <br><br>

    <label>Idiomas:</label>
    <br>
    <input type="checkbox" name="idioma[]" value="ingles"><label>Inglés</label> 
    <input type="checkbox" name="idioma[]" value="francés"><label>Francés</label> 
    <input type="checkbox" name="idioma[]" value="alemán"><label>Alemán</label> 

    <br><br>

    <select name="nacionalidad">
    <option value="">Seleccione nacionalidad:</option>
    <option value="española">Española</option>
    <option value="francesa">Francesa</option>
    <option value="alemana">Alemana</option>
    <option value="italiana">Italiana</option>
    <option value="rusa">Rusa</option>
    </select>

    <br>

    <label>Aficiones: </label>

    <br>

    <select name="aficiones[]" size="5" multiple="multiple">>
    <option value="deportes">Deportes</option>
    <option value="cultura">Cultura</option>
    <option value="sociedad">Sociedad</option>
    <option value="política">Política</option>
    <option value="ecomomía">Economía</option>
    </select>

    <br>*/

?>