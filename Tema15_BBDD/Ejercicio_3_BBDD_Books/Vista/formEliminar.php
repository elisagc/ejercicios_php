<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
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
            <li><a href="./formComprar.php">Comprar</a></li>
            <li><a href="../index.php">Cerrar sesión</a></li>
        </ul>
    </nav>

    <div class="form-container">
        <form action="../Control/controlLibro" method="post">


            <label for="isbn"><b>ISBN</b></label>
            <input type="text" name="isbn" required>
            <label for="title"><b>Title</b></label>
            <input type="text" name="title" required>


            <button type="submit" name="eliminar" required>Eliminar libro</button>

        </form>
    </div>

    <?php include("../Functions/functions.php");
    paintBooks();
    ?>

</body>

</html>