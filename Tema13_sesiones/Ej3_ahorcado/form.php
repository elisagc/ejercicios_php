
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
            $_SESSION['numeroLetras']++;
            echo "<div class='raya'></div>";
            echo " ";  
          
           
        }    
    }
    echo "</div>";
}

function pintarMoñeco($fallos){
$fallos--;

if($fallos>6){
      
    header('Location: end.php');
}
    if($fallos>0 && $fallos <= 7){
        echo "<div class='moñeco'>";
        echo "<img src='./img/dead_$fallos'/>";
        echo "</div>";
    }

}


function pintarCuadrosLetra($palabra,$letra){
    for($j=0;$j<strlen($palabra);$j++){
          if($letra == $palabra[$j]){
            $_SESSION["letras"][$j]=$letra;
          } 
          if($palabra[$j]===" "){
            $_SESSION["letras"][$j]="&nbsp &nbsp &nbsp";
          };
    }
    echo "<div class='palabra-box'>";
    for($j=0;$j<strlen($palabra);$j++){
        if(isset($_SESSION["letras"][$j])){
            $x=$_SESSION['letras'][$j];
            if($x==="&nbsp &nbsp &nbsp"){
                echo $x;
            }else{
                echo "<div class='raya'>$x</div>"; 
            }
        }else{
            echo "<div class='raya'></div>";
            echo " ";  
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

if(strpos($palabra, $letra) ===false){
    $_SESSION["fallos"]++;
    pintarMoñeco( $_SESSION["fallos"]);
}else{
$acierto=0;
 

  foreach($_SESSION["letras"] as $letra){
      if($letra !== "&nbsp &nbsp &nbsp"){
          $acierto++;

          if($_SESSION["numeroLetras"] === $acierto){
            header('Location: won.php');
          }
          
      }
 
  }
    pintarMoñeco( $_SESSION["fallos"]);
}

footerhtml();
}


function palabra(){
    $arr=["el resplandor", "buscando a nemo", "titanic","al final de la escalera", "seven", "tesis","el padrino","cadena perpetua","el caballero oscuro","ghost in the shell","coco","el retorno del jedi"];
    $_SESSION["aleatorio"]=array_rand($arr);
    return $arr[$_SESSION["aleatorio"]];
}

function pintarLetras(){
    $letras=range('a', 'z');
    foreach($letras as $letra){
       echo "<input type='submit' class='letra' value='$letra' name='letrita'/>";
    }
}
?>