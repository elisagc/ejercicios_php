<?php
include "form.php";
session_start();

if (isset($_POST['letrita'])){

    pintarjuego($_SESSION['palabra'],$_POST['letrita']);

}else{

    if ($_SESSION["palabra"]){
        $_SESSION["fallos"]=0;
        $_SESSION["letras"]= array();
        $_SESSION["copia"]=array();
        array_pad(($_SESSION['copia']),strlen($_SESSION['palabra']),15);
        pintarjuego($_SESSION["palabra"]);
      }
}


?>

