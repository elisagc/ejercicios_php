<?php

// ACCEDE A LA BASE DE DATOS Y COMPRUEBA QUE EXISTE EL USUARIO

spl_autoload_register(function($className){
    include __DIR__ . '../../clases/' . $className . '.php'; 
});

session_start();
$user=$_SESSION['name'];
$pass=$_SESSION['loginpass']; // contraseña introducida por el usuario
var_dump($_SESSION);
$customer=new Login($user,$pass);
$result= $customer->userExists();

var_dump($result);
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
        echo "constraseña mal";
        $_SESSION['mensaje']=true;
        header('Location: ../index.php');
      
    }
    var_dump($result[0]['password']);
}else{// SI ESTÁ EMPTY NO ESTÁ EN LA TABLA, REENVIAR A REGISTRO
   
    echo "no existe mandar a registro";
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