<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
session_start();

if(isset($_POST["submit"])){
 
   $tamaños=array();
   for($i=0; $i<count($_SESSION["figura"]); $i++){
        $tamaño = $_POST[$_SESSION["figura"][$i]];
        array_push($tamaños,$tamaño);
    }

    $_SESSION["tamaños"]=$tamaños;
 
    header("Location:../result.php");
}
?>
<form method="POST">
    <?php
    echo "<table>";
    foreach($_SESSION["figura"] as $figura){
        echo "<tr>";
        echo "<td> Elige tamaño " . $figura . "</td>";
        echo "<td><input type='number' min='1' max='500' value='100' name=$figura /></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
<input type="submit" name="submit"/>  
</form>
</body>
</html>