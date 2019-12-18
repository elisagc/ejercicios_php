<?php

class Cuadrado extends Figura{  

    public function __construct($colorFigura,$tamañoFigura)
    {
        parent::__construct($colorFigura,$tamañoFigura);
        
    }

    function getLienzo(){
        return $this->lienzo;
    }
   
    public function crearFigura(){
        //tamaño figura
        $lienzo= imagecreate($this->lienzo[0], $this->lienzo[1]);
        // color del fondo
        $colorFondo=imagecolorallocate($lienzo, $this->colorLienzo[0], $this->colorLienzo[1], $this->colorLienzo[2]);
        //color de la figura
        $colorFigura=imagecolorallocate($lienzo, $this->colorFigura[0], $this->colorFigura[1],$this->colorFigura[2]);
        //Crear rectángulo o cuadrado
        imagefilledrectangle($lienzo, 50, 50, $this->tamañoFigura[0], $this->tamañoFigura[1], $colorFigura);
        //pasar la imagen a png y guardarla
        imagepng($lienzo, "imgCuadrado.png");
        //mostrar la imagen
        echo "<img src ='imgCuadrado.png'/>"; 
    }
 
}







?>