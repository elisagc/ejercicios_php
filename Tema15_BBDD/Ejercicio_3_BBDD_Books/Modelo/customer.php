<?php

session_start();

spl_autoload_register(function($className){
    echo $className;
    include __DIR__ . '../../clases/' . $className . '.php'; 
});

$name=$_SESSION['name'];
$apes=$_SESSION['apes']; 
$email=$_SESSION['email']; 
$pass=$_SESSION['pass'];
$type=$_SESSION['type'];  

$customer=new Customer($name,$apes,$email,md5($pass),$type);
$result= $customer->insertNewCustomer();

if($result){

    if($type === "basic"){
        header('Location: ../Vista/bookBasic.php');
    }else{
        header('Location: ../Vista/BookPremium.php');
    }
 
}
?>