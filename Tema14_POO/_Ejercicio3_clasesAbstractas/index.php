<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

</style>
</head>
<body>

<?php
  spl_autoload_register(function($className){
    // echo $className;
      include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
 });

 session_start();
if(isset($_POST["figura"])){

    $_SESSION["figura"]=$_POST["figura"];
  
    header("Location:color.php");
    $color=[$r,$g,$b];
     $tamaño=[100,100];
     $cuadrado=new Cuadrado($color,$tamaño);
     $cuadrado->crearFigura();

    $color2=[50,70,30];
    $tamaño2=[100,100];
     $circulo=new Circulo($color2,$tamaño2);
     $circulo->crearFigura();
     
}
?>

<form method="POST">
<label for="color">Elige figura</label><br>
<input type="checkbox" name="figura[]" value="cuadrado" checked/>Cuadrado <br>
<input type="checkbox" name="figura[]" value="circulo"/>Círculo<br>
<input type="checkbox" name="figura[]" value="triangulo"/>Triángulo <br>
<input type="checkbox" name="figura[]" value="elipse"/>Elipse <br><br>
<input type="submit" name="submit"/>  
</form>


</body>
</html>