<?php
include("html.php");
include("comprobar.php");
session_start();

if (isset($_POST['submit'])){

    if(!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["contraseña"]) ){

        if(comprobarCaracteres($_POST["nombre"])){
            $_SESSION["nombre"]=$_POST["nombre"];
        }else{
            $_SESSION["nombre"]="error";
        }
    
        if(comprobarCaracteres($_POST["apellidos"])){
            $_SESSION["apellidos"]=$_POST["apellidos"];
        }else{
            $_SESSION["apellidos"]="error";
        }
    
        if(comprobarPass($_POST["contraseña"])){
            $_SESSION["contraseña"]=$_POST["contraseña"];
        }else{
            $_SESSION["contraseña"]="error";
        }
        form($_SESSION);


    }else{
        form($_SESSION);
    }
  
  

}else{
    form();

}
?>



