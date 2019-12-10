<?php

class Coche{
    var $ruedas;
    var $color;
    var $motor;

    function Coche(){ // Método constructor
        $this-> ruedas=4;
        $this->color="";
        $this->motor=1600;
    }

    function arrancar(){
        echo "Estoy arrancando";
    }

    function girar(){
        echo "Estoy girando";
    }

    function frenar(){
        echo "Estoy frenando";
    }

    function establece_color($color,$nombreCoche){
        $this->color=$color;
        echo "El color del " . $nombreCoche . " es " . $this->color;
    }
}

// -----------------------------------

class Camion{
    var $ruedas;
    var $color;
    var $motor;

    function Camion(){ // Método constructor
        $this-> ruedas=8;
        $this->color="";
        $this->motor=2600;
    }

    function arrancar(){
        echo "Estoy arrancando";
    }

    function girar(){
        echo "Estoy girando";
    }

    function frenar(){
        echo "Estoy frenando";
    }

    function establece_color($color,$nombreCoche){
        $this->color=$color;
        echo "El color del " . $nombreCoche . " es " . $this->color;
    }
}

?>