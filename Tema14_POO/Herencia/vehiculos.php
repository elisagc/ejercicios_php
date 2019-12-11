<?php

class Coche{
    var $ruedas;
    var $color;
    var $motor;

    function __construct(){ // Método constructor
        $this-> ruedas=4;
        $this->color="";
        $this->motor=1600;
    }

    function arrancar(){
        echo "Estoy arrancando<br>";
    }

    function girar(){
        echo "Estoy girando<br>";
    }

    function frenar(){
        echo "Estoy frenando<br>";
    }

    function establece_color($colorCoche,$nombreCoche){
        $this->color=$colorCoche;
        echo "El color del " . $nombreCoche . " es " . $this->color;
    }
}

// -----------------------------------

class Camion extends Coche{
 
    function __construct(){ // Método constructor
        $this-> ruedas=8;
        $this->color="";
        $this->motor=2600;
    }

    // sobreescritura de método establece color para camión
    function establece_color($colorCamion,$nombreCamion){
        $this->color=$colorCamion;
        echo "El color del " . $nombreCamion . " es " . $this->color;
    }

    //añadir funcionalidad a un método específica para Camión parent::
    function arrancar(){
        parent::arrancar();         // 1º ejecuta todo lo que hay en el método de la clase padre
        echo "camión arrancado";    //2º Le añadimos algo específico para la clase camión
    }

}

?>