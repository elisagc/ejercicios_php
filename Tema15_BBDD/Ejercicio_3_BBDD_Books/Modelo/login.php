<?php

// ACCEDE A LA BASE DE DATOS Y COMPRUEBA QUE EXISTE EL USUARIO

spl_autoload_register(function($className){
    include __DIR__ . '../../clases/' . $className . '.php'; 
});

session_start();
$user=$_SESSION['name'];
$pass=md5($_SESSION['loginpass']);
$customer=new Login($user,$pass);
$result= $customer->userExists();

if(!empty($result)){ 
  
    $resultPass=$result[0]['password']; 
   
    if($resultPass === $pass){
        $resultType=$result[0]['type'];
        $resultType === "basic" ?  header('Location: ../Vista/bookBasic.php') : header('Location: ../Vista/BookPremium.php');
    }else{
        $_SESSION['mensaje']=true;
        header('Location: ../index.php');
    }
  
}else{
   
    header('Location: ../Vista/registro.php');
}

// SI EXISTE ENVIAR A LA INTERFAZ DEPENDIENDO DE SI ES PREMIUM ONO
// SI NO EXISTE MANDAR A REGISTRAR
// SI EXISTE PERO ESTÁ MAL LA CONTRASEÑA ENVIAR A LOGIN
?>

