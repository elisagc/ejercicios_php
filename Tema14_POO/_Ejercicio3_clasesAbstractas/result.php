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
       // $tamaño=explode(" ", $tamaño);
        //$tamaño=array_push($tamaño,$tamaño);
        var_dump($tamaño);
        $cuadrado=new Cuadrado($color,[$tamaño,$tamaño]);
        $cuadrado->crearFigura();
    }

    if($_SESSION["figura"][$i]=== "círculo"){
        echo "circulo";
    
    }

    
    if($_SESSION["figura"][$i]=== "elipse"){
        echo "elipse";
    
    }
   

}

?>

