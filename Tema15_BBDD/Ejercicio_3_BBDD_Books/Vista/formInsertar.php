<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            width: 25%
        }

        input[type=text] {
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
    </style>
    <title>Document</title>
</head>

<body>

    <div>
        <!-- ?php
                include "./bookPremium.php";
                ?>
        -->

        <form action="../Control/controlLibro" method="post">

            <h1>Introduce datos del nuevo libro:</h1>

            <label for="isbn"><b>ISBN</b></label>
            <input type="text" name="isbn">

            <label for="isbn"><b>Title</b></label>
            <input type="text" name="title">

            <label for="isbn"><b>Author</b></label>
            <input type="text" name="author">

            <label for="isbn"><b>Stock</b></label>
            <input type="text" name="stock">

            <label for="isbn"><b>Price</b></label>
            <input type="text" name="price">

            <button type="submit" name="insertar">Añadir libro</button>

        </form>
    </div>
</body>

</html>