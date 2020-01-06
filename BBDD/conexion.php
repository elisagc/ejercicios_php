<?php

    $db_host="localhost";   //Dirección del servidor de la BBDD
    $db_name="prueba";      //Nombre de la BBDD
    $db_user="root";        //Usuario de la BBDD
    $db_password="";        

    $conexion=mysqli_connect($db_host,$db_user,$db_password); 
    // Conexión a la BBDD, se puede prescindir del último (nombre de la bbdd) Y crear mysqli_select_db

    if (mysqli_connect_errno()){ // f() que se ejecuta cuando hay un error en la conexión con el servidor $db_host;
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion,$db_name) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8"); // Para que interprete acentos etc.

?>