<?php
include ("Figura.php");
class Cuadrado extends Figura{

    private $color;
    private $fondo;

    function setColor($color=[0,0,0]) //por defecto es negro
    {
        var_dump($color);

        for($i=0;$i<count($color);$i++){
            $this->color[$i]=$color[$i];
        }
      
    }

    function setTamaño($ancho, $alto)
    {
        $this->fondo[0] = $ancho;
        $this->fondo[1] = $alto;
    }
    
    function crearFigura(){
        //tamaño figura
        $img= imagecreate($this->fondo[0], $this->fondo[1]);
        //color de la figura
        imagecolorallocate($img, 0, 0, 0);
        imagepng($img, "img.png");
        echo "<img src ='img.png'/>"; 
        //imagedestroy($img);   
    }

}

?>