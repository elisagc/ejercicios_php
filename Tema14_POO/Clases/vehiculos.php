<?php

class Coche{
    var $ruedas;
    var $color;
    var $motor;

    function __construct()
    {
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

    function __construct(){ // Método constructor
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