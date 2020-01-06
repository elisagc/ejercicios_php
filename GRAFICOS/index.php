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

if(isset($_POST["color"])){
  echo $_POST["color"];
}
?>

<form method="POST">
<input type="color" name="color"/>
<div class="cuadro" style="background-color: hsl(145, 50%, 50%);">
<input type="submit" name="submit"/>  
</div>

<p> CUADRADOS</p>
    <p>
    <svg width="120" height="100" viewBox="0 0 100 100">
      <rect x="10" y="10" width="55" height="55" fill="#8000ff" />
    </svg>

    <p> TRIÁNGULO</p>
<svg height="200" width="200">
  <polygon points="100,10 170,190 10,190"
  stroke="purple" stroke-width=2 fill="aqua"/> 
</svg> 
<p> ELIPSE</p>
<svg height="200" width="200">
  <ellipse cx=100 cy=100 rx=95 ry=60
  stroke="black" stroke-width=10 fill="yellow" />
</svg> 
<p> CÍRCULO</p>
<svg width=200 height=200>
<circle cx=100 cy=100 r=90 stroke="blue" stroke-width=2 fill="orange">
</svg>
  </p>

</form>


  
</body>
</html>