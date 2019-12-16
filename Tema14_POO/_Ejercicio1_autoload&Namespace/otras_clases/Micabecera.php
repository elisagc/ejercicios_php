<?php
namespace otras_clases;

class Micabecera{
    private $h1;

    function __construct($h1){
        $this->h1=$h1;
        
    }

    function getH1(){
        return $this->h1 . "<br>";
    }

    function __toString(){
       return $this->h1 . "<br>";
    }

    function parrafo($texto){
echo <<<HRD
    <p>$texto</p>
HRD;
       
    }
}

?>