<?php

abstract class Figura{

    protected $lienzo;
    protected $colorLienzo;
    protected $colorFigura;
    protected $tamañoFigura;
       
    abstract public function crearFigura();
    public function __construct($colorFigura,$tamañoFigura){
        
            $this->lienzo=[200,200];
            $this->colorLienzo=[255,255,255];
            $this->colorFigura=$colorFigura;
            $this->tamañoFigura=$tamañoFigura;
            
        
    }

 /*   public function setColorFigura($colorFigura=[255,255,255]) {
        for($i=0;$i<count($colorFigura);$i++){
            $this->colorFigura[$i]=$colorFigura[$i];
        }
    }*/


}
?>