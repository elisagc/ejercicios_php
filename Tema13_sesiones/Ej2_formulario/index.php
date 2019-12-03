<?php
include("html.php");
include("comprobar.php");
session_start();


if (isset($_POST['submit'])){

    if(!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && isset($_POST["contraseña"]) /*&& !empty($_POST["genero"])*/){

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

     var_dump($_POST);
      if(!empty($_POST["genero"])){
            $_SESSION["genero"]=$_POST["genero"];
            $_SESSION["validarGen"]=true;
        
        }else{
            $_SESSION["genero"]="error";
            $_SESSION["validarGen"]=false;
        }
       
        form($_SESSION);


      
    }else{
        
        if(!empty($_SESSION)){
            echo "existe sesion";
            var_dump($_SESSION);
            form($_SESSION);
        }else{

            echo "no existe sesión";
            $_SESSION["genero"]="error";
            $_SESSION["validarGen"]=false;
            $_SESSION["contraseña"]="error";
            $_SESSION["validarPass"]=false; 
            $_SESSION["apellidos"]="error";
            $_SESSION["validarApes"]=false;
            $_SESSION["nombre"]="error";
            $_SESSION["validarNom"]=false;

            form($_SESSION);
        }
     
    }
  
  

}else{
    form();

}
?>



