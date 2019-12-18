<?php

class Circulo extends Figura{

    public function __construct($colorFigura,$tamañoFigura)
    {
        parent::__construct($colorFigura,$tamañoFigura);
        
    }

    public function crearFigura(){
        //tamaño del fondo
        $lienzo= imagecreate($this->lienzo[0], $this->lienzo[1]);
        //color del fondo
        $colorFondo=imagecolorallocate($lienzo, $this->colorLienzo[0], $this->colorLienzo[1], $this->colorLienzo[2]);
        //color de la figura
        $colorElipse = imagecolorallocate($lienzo, $this->colorFigura[0], $this->colorFigura[1],$this->colorFigura[2]);
        //figura: tamaño del fondo, eje x, eje y, ancho, alto
        imagefilledellipse($lienzo,100,100,$this->tamañoFigura[0],$this->tamañoFigura[1], $colorElipse);
        //pasar la imagen a png y guardarla
        imagepng($lienzo, "imgCirculo.png");
        //mostrar la imagen
        echo "<img src ='imgCirculo.png'/>";

       
    }

}

?>