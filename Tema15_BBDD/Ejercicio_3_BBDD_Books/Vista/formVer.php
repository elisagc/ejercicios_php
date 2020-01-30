<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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


            <label for="title"><b>Buscar libros del usuario:</b></label>
            <input type="text" name="name" required>

            <button type="submit" name="ver" required>Buscar</button>

        </form>
    </div>

    <?php include("../Functions/functions.php");
    paintBooks();

    // MOSTRAR LOS LIBROS PRESTADOS QUE VIENEN DESDE CONTROL LIBRO ALQUILAR DESDE EL HEADER SERIALIZADOS
    if (isset($_GET['libros'])) {

        $libros = unserialize($_GET['libros']);
        echo "<p>Libros que tiene prestados:</p>";
        echo "<br>";
        foreach ($libros as $libro) {
            echo "<p>$libro</p>";
            echo "<br>";
        }
    }
    ?>

</body>

</html>