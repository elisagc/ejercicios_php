<?php
include "form.php";
session_start();

if (isset($_POST['letrita'])){

    pintarjuego($_SESSION['palabra'],$_POST['letrita']);

}else{

    if ($_SESSION["palabra"]){
        $_SESSION["fallos"]=0;
        $_SESSION["letras"]= array();
        pintarjuego($_SESSION["palabra"]);
      }
}


?>

