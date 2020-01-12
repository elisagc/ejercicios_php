<?php

abstract class Figura{

    protected $lienzo;
    protected $colorLienzo;
    protected $colorFigura;
    protected $tamañoFigura;
       
    abstract public function crearFigura();
    public function __construct($colorFigura,$tamañoFigura){
        
            $this->lienzo=[500,500];
            $this->colorLienzo=[255,255,255];
            $this->colorFigura=$colorFigura;
            $this->tamañoFigura=$tamañoFigura;
            
        
    }

}
?>