<?php

if (isset($_POST['jugar'])){

    header("Location:index.php");

}else{


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
        <h1> ¡¡¡HAS ACERTADO!!!
        <input type="submit" value="Deseo volver a jugar" name="jugar"/>
    </form>
  </body>
  </html>

HRD;


}


?>