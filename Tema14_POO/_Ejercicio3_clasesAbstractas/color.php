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
    var_dump($_POST["colorcirculo"]);
    //PASAR DE HEXADECIMAL A RGB
    $hex = $_POST["colorcirculo"];
    list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    echo "$hex -> $r $g $b";
    // 
}
?>
<form method="POST">
    <?php
    echo "<table>";
    foreach($_SESSION["figura"] as $figura){
        $name="color" . $figura;
        echo $name;
        echo "<tr>";
        echo "<td> Elige color " . $figura . "</td>";
        echo "<td><input type='color' name=$name /></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
<input type="submit" name="submit"/>  
</form>
</body>
</html>