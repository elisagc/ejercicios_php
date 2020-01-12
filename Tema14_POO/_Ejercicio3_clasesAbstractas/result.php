<?php
session_start();
spl_autoload_register(function($className){
    // echo $className;
      include __DIR__ . '/clases/' . $className . '.php'; // PARA CUANDO NO USAS NAMESPACE
 });

//var_dump(($_SESSION["colores"]));
//var_dump(($_SESSION["tamaños"]));
//var_dump(($_SESSION["figura"]));

for($i=0; $i<count($_SESSION["figura"]); $i++){
        
    if($_SESSION["figura"][$i]=== "cuadrado"){
        
        $color=$_SESSION["colores"][$i];
        $color = explode(" ", $color);

        $tamaño=$_SESSION["tamaños"][$i];
      
        $cuadrado=new Cuadrado($color,[$tamaño,$tamaño]);
        $cuadrado->crearFigura();
  
    }

    if($_SESSION["figura"][$i]=== "círculo"){
        
        $color=$_SESSION["colores"][$i];
        $color = explode(" ", $color);

        $tamaño=$_SESSION["tamaños"][$i];
   
        $circulo=new Circulo($color,[$tamaño,$tamaño]);
        $circulo->crearFigura();
    
    }

    
    if($_SESSION["figura"][$i]=== "elipse"){
    $color=$_SESSION["colores"][$i];
        echo "elipse";
    echo <<<HRD
    <svg height="300" width="200">
    <ellipse cx=100 cy=100 rx=100 ry=60
    fill=$color />
    </svg> 
HRD;
    
    }

    if($_SESSION["figura"][$i]=== "triángulo"){
        echo "triangulo";
    
    }
   

}

?>

