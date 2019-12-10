<?php

class Coche{
    protected $ruedas; // lo ponemos private, no se podrá modificar SOLO ES ACCESIBLE PARA COCHE. si queremos que sea accesible para Camión hay que ponerle PROTECTED
    protected $color;
    protected $motor;

    function Coche(){ // Método constructor
        $this-> ruedas=4; //un coche no debe tener más ruedas, por lo que lo protegemos con private
        $this->color="";
        $this->motor=1600;
    }

    function getRuedas(){
        return $this->ruedas;
    }
    
    function getMotor(){
        return $this->motor;
    }

    function setColor($colorCoche,$nombreCoche){
        $this->color=$colorCoche;
        echo "El color del " . $nombreCoche . " es " . $this->color;
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

    
}

// -----------------------------------

class Camion extends Coche{
 
    function Camion(){ // Método constructor
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