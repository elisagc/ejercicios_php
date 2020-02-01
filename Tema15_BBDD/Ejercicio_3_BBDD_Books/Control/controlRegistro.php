<?php

// COMPRUEBA QUE LOS DATOS HAN LLEGADO Y REDIRIGE:
session_start();

if (isset($_POST['submit'])){
 
    if(!empty($_POST['name']) && !empty($_POST['apes'])  && !empty($_POST['email'])  && !empty($_POST['pass'])  && !empty($_POST['type'])){
        $_SESSION['name']=$_POST['name'];
        $_SESSION['apes']=$_POST['apes'];
        $_SESSION['email']=$_POST['email'];
        $_SESSION['pass']=$_POST['pass'];
        $_SESSION['type']=$_POST['type'];
        
        
        header('Location: ../Modelo/customer.php');
        
    }else{
        header('Location: ../Vista/registro.php');
    }

}else{
    header('Location: ../Vista/registro.php');
}
?>