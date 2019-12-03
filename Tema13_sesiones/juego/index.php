<?php

include('./functions/html.php');

session_start();
//session_destroy();

if (isset($_POST['submit'])){
   // var_dump(gettype($_POST['num'] + 0)); lo transforma a numero
    if (isset($_SESSION['num'])){      
        if (is_numeric($_POST['num'])){
            if ($_POST['num']>$_SESSION['num']){
                form("Número demasiado alto");
            }elseif ($_POST['num']<$_SESSION['num']){
                form("Número demasiado bajo");
            }else{
                session_destroy();
                header("Location:acierto.php");
            }
        }else{

            form("Introduce un número!! no otra cosa!!");
        }
       
    }
   
}else{
    $num=rand(1,100);
   
    $_SESSION['num']=$num;
    form();
}





?>