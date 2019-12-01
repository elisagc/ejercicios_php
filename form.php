
<?php


function cabecerahtml(){
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
HRD;
}

function footerhtml(){
    echo<<<HRD
    </body>
    </html>
HRD;
}

function jugar(){
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
    <form enctype="multipart/form-data" action="$_SERVER[PHP_SELF]" method="POST"> 
    <input type="submit" value="Jugar al ahorcado" name="jugar" class="jugar"/>
    </form>
    </body>
    </html>
HRD;
}


function pintarCuadros($palabra){
 echo "<div class='palabra-box'>";
    for($i=0;$i<strlen($palabra);$i++){
        if($palabra[$i]===" "){
            echo "&nbsp &nbsp &nbsp";
        }else{
            echo "<div class='raya'></div>";
            echo " ";  
        }    
    }
    echo "</div>";
}

function pintarCuadrosLetra($palabra,$letra){

  var_dump(count($_SESSION['copia']));
    if(strpos($palabra, $letra) ===false){
        $_SESSION["fallos"]++;
    }else{
        array_push($_SESSION["letras"],$letra);
    }

    for($i=0;$i<strlen($palabra);$i++){
       // var_dump($letra);
        if($palabra[$i]==$letra){
           $_SESSION['copia'][$i]=$letra;
        }
    }
   var_dump($_SESSION['copia']);
    $letras=$_SESSION["letras"];
  
  
    echo "<div class='palabra-box'>";
    for($j=0;$j<strlen($palabra);$j++){
        for($i=0;$i<count($letras);$i++){
          if($palabra[$j] === $letras[$i]){
            echo "<div class='raya'>$letras[$i]</div>";
          }elseif($palabra[$j]===" "){
            echo "&nbsp &nbsp &nbsp";
          }else{
            echo "<div class='raya'></div>";
            echo " ";  
          }
        }
    }
    
    echo "</div>";
}


function pintarjuego(&$palabra=null, &$letra=null){

cabecerahtml();

if ($palabra && !$letra){
   pintarCuadros($palabra);
}else{
    pintarCuadrosLetra($palabra,$letra);
}

echo <<<HRD
<form enctype="multipart/form-data" action="$_SERVER[PHP_SELF]" method="POST"> 
HRD;
pintarLetras();
echo <<<HRD
</form>
HRD;
footerhtml();
}

function palabra(){
    $arr=["el resplandor", "buscando a nemo", "titanic","al final de la escalera", "seven", "tesis"];
    $_SESSION["aleatorio"]=rand(0,5);
    return $arr[$_SESSION["aleatorio"]];

}

function pintarLetras(){
    $letras=range('a', 'z');
    foreach($letras as $letra){
       echo "<input type='submit' class='letra' value='$letra' name='letrita'/>";
    }
}
?>