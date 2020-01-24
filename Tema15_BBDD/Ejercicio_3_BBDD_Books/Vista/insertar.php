<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
            body {font-family: Arial, Helvetica, sans-serif;display: flex;
              justify-content: center;
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
            
            .mensaje{
                  border:1px solid red;
                  text-align: center;
                  background-color: salmon;
            
            }
      </style>
    <title>Document</title>
</head>
<body>
    <form action="../Control/controlLibro" method="post">

     <h1>Introduce datos del nuevo libro:</h1>

        <label for="isbn"><b>ISBN</b></label>
        <input type="text" name="isbn" >

        <label for="isbn"><b>Title</b></label>
        <input type="text" name="title" >

        <label for="isbn"><b>Author</b></label>
        <input type="text" name="author" >

        <label for="isbn"><b>Stock</b></label>
        <input type="text" name="stock" >

        <label for="isbn"><b>Price</b></label>
        <input type="text" name="price" >

        <button type="submit" name="insertar">Añadir libro</button>

    </form>
</body>
</html>