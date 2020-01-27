<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../style/style.css">
  <title>Mi App Books</title>

</head>

<body>
  <nav>
    <ul>
      <p class="name">
        Usuario conectado: <?php session_start();
                            echo $_SESSION['name'] ?>
      </p>
      <li><a href="./formInsertar.php">Insertar libro</a></li>
      <li><a href="./formEliminar.php">Eliminar Libro</a></li>
      <li><a href="./formAlquilar.php">Alquilar Libro</a></li>
      <li><a href="./formDevolver.php">Devolver Libro</a></li>
      <li><a href="./formVer.php">Ver mis libros prestados</a></li>
    </ul>
  </nav>


  <?php
  include("../Functions/functions.php");
  paintBooks();
  ?>
</body>

</html>