<?php
echo "control Libro";

var_dump(isset($_POST["insertar"]));
if(isset($_POST["insertar"])){

    echo "has dado a insertar";
    if(isset($_SESSION['insertar'])){
 
        echo"existe la sesión insertar";
    }else{
        include("../Vista/insertar.php");
        echo "se ha creado la sesion insertar";
        $_SESSION['insertar']=true;
    }
  
}

if(isset($_POST["alquilar"])){
echo "alquilar";
}

if(isset($_POST["devolver"])){
echo "devolver";
}

if(isset($_POST["eliminar"])){
    echo "eliminar";
}

if(isset($_POST["ver"])){
    echo "ver";
}
?>