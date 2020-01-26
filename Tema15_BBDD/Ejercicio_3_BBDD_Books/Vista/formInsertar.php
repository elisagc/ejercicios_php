<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        form {
            background-color: #c0c0c0;
            padding: 10px;
            border-radius: 5px;
        }

        input[type=text] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100px;
            margin: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
        }

        button:hover {
            opacity: 0.8;
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

        .form-container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        p {
            display: inline-block;
        }
    </style>
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
            <li><a href="./formAlquilar.php">Alquilar Libro</a></li>
            <li><a href="./formDevolver.php">Devolver Libro</a></li>
            <li><a href="./formEliminar.php">Eliminar Libro</a></li>
            <li><a href="./formVer.php">Ver mis libros prestados</a></li>
        </ul>
    </nav>
    <div class="form-container">
        <form action="../Control/controlLibro" method="post">

            <label for="isbn"><b>ISBN</b></label>
            <input type="text" name="isbn" required>

            <label for="isbn"><b>Title</b></label>
            <input type="text" name="title" required>

            <label for="isbn"><b>Author</b></label>
            <input type="text" name="author" required>

            <label for="isbn"><b>Stock</b></label>
            <input type="text" name="stock" required>

            <label for="isbn"><b>Price</b></label>
            <input type="text" name="price" required>

            <button type="submit" name="insertar" required>Añadir libro</button>

        </form>
    </div>

</body>

</html>