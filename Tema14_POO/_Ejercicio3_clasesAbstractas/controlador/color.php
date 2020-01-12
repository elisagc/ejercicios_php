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
 
   $colores=array();
   for($i=0; $i<count($_SESSION["figura"]); $i++){
        //PASAR DE HEXADECIMAL A RGB:
        $hex = $_POST[$_SESSION["figura"][$i]];
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
        $color="$r $g $b";
        array_push($colores,$color);
    }

    $_SESSION["colores"]=$colores;
    header("Location:size.php");
}
?>
<form method="POST">
    <?php
    echo "<table>";
    foreach($_SESSION["figura"] as $figura){
        echo "<tr>";
        echo "<td> Elige color " . $figura . "</td>";
        echo "<td><input type='color' name=$figura /></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
<input type="submit" name="submit"/>  
</form>
</body>
</html>


     