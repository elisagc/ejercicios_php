<?php
include("html.php");
include("comprobar.php");
session_start();


if (isset($_POST['submit'])){

    if(!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && isset($_POST["contraseña"]) ){

        if(comprobarCaracteres($_POST["nombre"])){
            $_SESSION["nombre"]=$_POST["nombre"];
            $_SESSION["validarNom"]=true;
        }else{
            $_SESSION["nombre"]="error";
            $_SESSION["validarNom"]=false;
        }
    
        if(comprobarCaracteres($_POST["apellidos"])){
            $_SESSION["apellidos"]=$_POST["apellidos"];
            $_SESSION["validarApes"]=true;
        }else{
            $_SESSION["apellidos"]="error";
            $_SESSION["validarApes"]=false;
        }
    
        if(comprobarPass($_POST["contraseña"])){
            $_SESSION["contraseña"]=$_POST["contraseña"];
            $_SESSION["validarPass"]=true;
        }else{
            $_SESSION["contraseña"]="error";
            $_SESSION["validarPass"]=false;          
        }

        $_SESSION["genero"]=$_POST["genero"];
var_dump($_POST["genero"]);
        form($_SESSION);


      
    }else{
        form($_SESSION);
    }
  
  

}else{
    form();

}
?>



