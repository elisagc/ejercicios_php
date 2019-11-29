<?php
include "form.php";
session_start();

if (isset($_POST['submit'])){

$_SESSION["inicio"]=true;

if ($_SESSION["inicio"])

$ok=0;
$notOk=0;

$_SESSION["aciertos"]=$ok;
$_SESSION["fallos"]=$notOk;

var_dump($_SESSION["aciertos"]);

$adivinarPalabra=palabra();
$_SESSION["palabra"]=$adivinarPalabra;
var_dump($_SESSION["palabra"]);

}else{
    html();
}


?>