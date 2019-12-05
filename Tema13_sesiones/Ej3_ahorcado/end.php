<?php
include "form.php";
session_start();

if (isset($_POST['volver'])){
    $_SESSION["palabra"]=palabra();
    header('Location: juego.php');

}else{


    echo "<h1>  HAS PERDIDO PARDILLO!!!!  </h1>";  
    echo "<div class='moñeco'>"; 
    echo "<img src='./img/dead_7'/>";
    echo "</div>";
   
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
       <input type="submit" value="Volver a jugar" name="volver" class="jugar"/>
       </form>
       </body>
       </html>
HRD;


}



?>