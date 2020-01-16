<?php

if (isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        echo "hola";
    }else{
        header('Location: ../index.php');
    }

}else{
    header('Location: ../index.php');
}
?>