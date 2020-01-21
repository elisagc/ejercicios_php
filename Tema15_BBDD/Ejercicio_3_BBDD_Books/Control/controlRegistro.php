<?php

// COMPRUEBA QUE LOS DATOS HAN LLEGADO Y REDIRIGE:
session_start();

if (isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['apes']=$_POST['apes'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['pass']=$_POST['pass'];
        $_SESSION['type']=$_POST['type'];
        
       
        
    }else{
        header('Location: ../index.php');
    }

}else{
    header('Location: ../index.php');
}
?>