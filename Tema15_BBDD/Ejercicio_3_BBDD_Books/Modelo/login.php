<?php

session_destroy();
// ACCEDE A LA BASE DE DATOS Y COMPRUEBA QUE EXISTE EL USUARIO

spl_autoload_register(function($className){
    echo $className;
    include __DIR__ . '../../Modelo/' . $className . '.php'; 
});

$user=$_SESSION['name'];
$pass=$_SESSION['pass']; // contraseña introducida por el usuario

$customer=new Login($user,$pass);
$result= $customer->userExists();

// SI EXISTE ENVIAR A LA INTERFAZ DEPENDIENDO DE SI ES PREMIUM ONO
// SI NO EXISTE MANDAR A REGISTRAR
// SI EXISTE PERO ESTÁ MAL LA CONTRASEÑA ENVIAR A LOGIN

if(!empty($result)){ // SI NO ESTÁ EMPTY COMPROBAR LA CONTRASEÑA
  
    $resultPass=$result[0]['password']; // La contraseña que me devuelve la BBDD
   
    if($resultPass === $pass){
        echo "user correct";
        //comprobar si es basic o premium
    }else{
        echo "incorrect";
        $_SESSION['mensaje']=true;
        var_dump($_SESSION['mensaje']);
        header('Location: ../index.php');
      
    }
    var_dump($result[0]['password']);
}else{// SI ESTÁ EMPTY NO ESTÁ EN LA TABLA, REENVIAR A REGISTRO
   
    header('Location: ../Vista/registro.php');
}


/*$selectUser=<<<SEL
SELECT email, password from customer where email='$user';
SEL;

$con = Conexion::getInstance();
$resultSelect= $con->selectQuery($selectUser);
var_dump($resultSelect);

//$con->query($query);
$con->dbClose();

*/
?>