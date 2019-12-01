<?php
include "form.php";
session_start();

if (isset($_POST['jugar'])){
    
    header('Location: juego.php');
}else{
    jugar();
    $_SESSION["palabra"]=palabra();

}



?>