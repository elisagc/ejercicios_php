<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<form action="../Control/controlRegistro.php" method="post">
      <div class="imgcontainer">
      <img src="./../images/cat.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
      <label for="uname"><b>Nombre</b></label>
      <input type="text" placeholder="name" name="name" >

      <label for="psw"><b>Apellido</b></label>
      <input type="text" placeholder="Enter Password" name="apes">

      <label for="psw"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Contraseña" name="pass">

      <label for="psw"><b>Premium</b></label>
      <input type="radio" name="type" value="premium">
      <label for="psw"><b>Basic</b></label>
      <input type="radio" name="type" value="basic">

      <button type="submit" name="submit">Registro</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
    
  </div>
</form>
</body>
</html>