<?php

include("Customer.php");
include("Libros.php");

$cliente1=new Customer("Pilar","Rus","pili@gmail.com");
$cliente1->__toString();

$reserva1=new LibroCliente("Pilar","Rus","pili@gmail.com","Harry Potter");
$reserva1->__toString();
?>