<?php
class Customer{
    protected $id;
    protected $nombre;
    protected $apellidos;
    protected $correo;

    function __construct($nombre,$apellidos,$correo){
        $id=uniqid() . time();
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->correo=$correo;
    }


    function __toString(){
        echo "<br>";
      echo $this->id;
      echo "<br>";
      echo $this->nombre;
      echo "<br>";
      echo $this->apellidos;
      echo "<br>";
      echo $this->correo;
      echo "<br>";
    }


}

?>
