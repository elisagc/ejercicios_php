<?php

class Circulo extends Figura{

    public function crearFigura(){
        //tamaño del fondo
        $fondoImagen= imagecreate($this->tamaño[0], $this->tamaño[1]);
        //color del fondo
        $colorFondo=imagecolorallocate($fondoImagen, $this->color[0], $this->color[1], $this->color[2]);
        //color de la figura
        $colorElipse = imagecolorallocate($fondoImagen, 0, 0, 255);
        //figura: tamaño del fondo, eje x, eje y, ancho, alto
        imagefilledellipse($fondoImagen,100,100,200,200, $colorElipse);
        //pasar la imagen a png y guardarla
        imagepng($fondoImagen, "imgCirculo.png");
        //mostrar la imagen
        echo "<img src ='imgCirculo.png'/>";

       
    }

}

?>