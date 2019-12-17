<?php

abstract class Figura{

    protected $lienzo;
    protected $colorLienzo;
    protected $colorFigura;
    protected $tamañoFigura;
       
    abstract public function crearFigura();
    abstract function __contruct($colorFigura,$tamañoFigura);

 /*   public function setColorFigura($colorFigura=[255,255,255]) {
        for($i=0;$i<count($colorFigura);$i++){
            $this->colorFigura[$i]=$colorFigura[$i];
        }
    }*/


}
?>