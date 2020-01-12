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
        
        $color=$_SESSION["coloresRGB"][$i];
        $color = explode(" ", $color);

        $tamaño=$_SESSION["tamaños"][$i];
      
        $cuadrado=new Cuadrado($color,[$tamaño,$tamaño]);
        $cuadrado->crearFigura();
  
    }

    if($_SESSION["figura"][$i]=== "círculo"){
        
        $color=$_SESSION["coloresRGB"][$i];
        $color = explode(" ", $color);

        $tamaño=$_SESSION["tamaños"][$i];
   
        $circulo=new Circulo($color,[$tamaño,$tamaño]);
        $circulo->crearFigura();
    
    }

    
    if($_SESSION["figura"][$i]=== "elipse"){

    //rx (ancho) y ry (alto) es el tamaño de la figura
    //height (alto) y width (ancho) es el tamaño del lienzo
    // cx y cy es donde se posiciona la figura
    // Solo funciona el color con HEXADECIMALES.
    $color=$_SESSION["coloresHEX"][$i];
    $tamaño=$_SESSION["tamaños"][$i];

    echo <<<HRD
    <svg height="500" width="1000">
    <ellipse cx=500 cy=100 rx=$tamaño ry=60
    fill="$color"/>
    </svg> 
HRD;
    
    }

    if($_SESSION["figura"][$i]=== "triángulo"){
        $color=$_SESSION["coloresHEX"][$i];
        $tamaño=$_SESSION["tamaños"][$i];

        echo <<<HRD
        <svg height="500" width="1000">
        <polygon points="100,10 170,$tamaño 10,$tamaño"
        fill="$color"/> 
      </svg> 
HRD;
    }
   

}

?>

