<?php

class Customer {

public $name;
public $apes;
public $email;
public $pass;
public $type;
public $con;

function __construct($name,$apes,$email,$pass,$type)
{
    $this->name=$name;
    $this->apes=$apes;
    $this->email=$email;
    $this->pass=$pass;
    $this->type=$type;
    $con=Conexion::getInstance();
    $this->con=$con;
}

public function insertNewCustomer(){

$insertUser=<<<SEL
INSERT INTO customer (firstname,surname,email,type,password) VALUES ('$this->name', '$this->apes', '$this->email', '$this->type', '$this->pass');
SEL;

try{
    $this->con->selectQuery($insertUser);
    return true;
}catch(PDOException $exception){
    return false;
}

$this->con->dbClose();

}


}

?>