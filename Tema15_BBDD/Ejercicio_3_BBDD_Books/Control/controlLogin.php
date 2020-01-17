<?php

// COMPRUEBA QUE LOS DATOS HAN LLEGADO Y REDIRIGE:
session_start();

if (isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['pass']=$_POST['pass'];
        header('Location: ../Modelo/customer.php');
        
    }else{
        header('Location: ../index.php');
    }

}else{
    header('Location: ../index.php');
}
?>