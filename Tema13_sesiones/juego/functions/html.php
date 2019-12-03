<?php

function form(...$text){

  if (!empty($text)){
    $texto=$text[0];
  }else{
    $texto="Adivina el número en el que estoy pensando...";
  }

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
      
  <div class="container">
  
    <form enctype="multipart/form-data" action="$_SERVER[PHP_SELF]" method="POST">
      <h1> $texto </h1>
      <input type="text" name="num" placeholder="Introduza número.." />
        <input type="submit" value="Enviar" name="submit"/>

    </form>
  </body>
  </html>

HRD;

}

 /* NO OLVIDAR:
    -los name para capturarlos con isset($_POST['nombre'])
    -el action dentro del form: action="$_SERVER[PHP_SELF]"
    -el method dentro del form: method='post'
    -linkar al css
*/

?>