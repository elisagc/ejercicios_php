<?php
class LibroCliente extends Customer{
    private $libros=[];
    function __construct($nombre,$apellidos,$correo,$libro){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->correo=$correo;
        $this->libros=$libro;
    }

    function __toString(){
      parent::__toString();
          echo $this->libros;
      }
}

?>