<?php
class Cuadrado extends Figura{

    private $color;
    private $tamaño;
    private $num;

    //por defecto es negro
    function setColor($color=[0,0,0]) {
        for($i=0;$i<count($color);$i++){
            $this->color[$i]=$color[$i];
        }
    }

    function setTamaño($ancho, $alto){
        $this->tamaño[0] = $ancho;
        $this->tamaño[1] = $alto;
    }

    function setNumero($num){
        $this->num=$num;
    }
    
    function crearFigura(){
        //tamaño figura
        $img= imagecreate($this->tamaño[0], $this->tamaño[1]);
        //color de la figura
        imagecolorallocate($img, $this->color[0], $this->color[1], $this->color[2]);
        //pasar la imagen a png y guardarla
        imagepng($img, "img.png");
        //mostrar la imagen
        echo "<img src ='img.png'/>"; 
    }

}

?>