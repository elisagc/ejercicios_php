<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi App Books</title>
<style>
input[type=submit]{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

form{
    display: flex;
    justify-content: center;
    flex-direction: column;

}

</style>
</head>
<body>

<form action="../Control/controlLibro.php" method="post">

<div>
<h1>Bienvenido Usuario Premium ¿Qué deseas hacer?</h1>
<input type="submit" value="Insertar Libro" name="insertar">
<input type="submit" value="Alquilar Libro" name="alquilar">
<input type="submit" value="Devolver Libro" name="devolver">
<input type="submit" value="Eliminar Libro" name="eliminar"> 
<input type="submit" value="Ver mis libros prestados" name="ver"> 

</div>

</form>
    
</body>
</html>

