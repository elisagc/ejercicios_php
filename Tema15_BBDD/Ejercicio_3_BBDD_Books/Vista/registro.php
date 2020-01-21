<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            body {font-family: Arial, Helvetica, sans-serif;
              display: flex;
              justify-content: center;}
            form {border: 3px solid #f1f1f1;
            width: 25%}

            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            }

            button:hover {
            opacity: 0.8;
            }

            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            }

            img.avatar {
            width: 50%;
            border-radius: 50%;
            }

            .container {
            padding: 30px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
            display: block;
            float: none;
            }
            .cancelbtn {
            width: 100%;
            }
            }
      </style>
</head>
<body>
<form action="Control/controlRegistro.php" method="post">
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
      <input type="radio" name="tipo" value="premium">
      <label for="psw"><b>Basic</b></label>
      <input type="radio" name="tipo" value="basic">

      <button type="submit" name="submit">Registro</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
    
  </div>
</form>
</body>
</html>