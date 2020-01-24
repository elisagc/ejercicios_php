<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mi App Books</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    nav {
      background-color: #008080;
    }

    .name {
      flex-grow: 1;
      margin-left: 10px;
      color: white;
    }

    ul {
      display: flex;
      justify-content: flex-end;
      margin: 0;
      padding: 0;
    }

    li {
      list-style-type: none;
      display: flex;
      align-items: center;
    }

    li:hover {
      background-color: #009d9d;
    }

    a {
      text-decoration: none;
      display: block;
      padding: 1em;
      color: white;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <p class="name">
        Usuario conectado: <?php session_start();
                            echo $_SESSION['name'] ?>
      </p>
      <li><a href="./formInsertar.php">Insertar libro</a></li>
      <li><a href="./formAlquilar.php">Alquilar Libro</a></li>
      <li><a href="./formDevolver.php">Devolver Libro</a></li>
      <li><a href="./formEliminar.php">Eliminar Libro</a></li>
      <li><a href="./formVer.php">Ver mis libros prestados</a></li>
    </ul>
  </nav>
</body>

</html>