<?php

class Login {

public $user;
public $pass;
public $con;

function __construct($user,$pass)
{
    $this->user=$user;
    $this->pass=$pass;
    $con=Conexion::getInstance();
    $this->con=$con;
}

public function userExists(){

$selectUser=<<<SEL
SELECT email, password,type from customer where email='$this->user';
SEL;

try{
    $resultSelect=$this->con->selectQuery($selectUser);
    return $resultSelect;

}catch(PDOException $e){
var_dump($e);
}




}


}
