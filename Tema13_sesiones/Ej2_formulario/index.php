<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="validation.php" method="post">

        <div class="inputBox">
            <ul>
                <li><label> Nombre: </label> <input type="text" name="name"></li>
                <li><label> Apellidos: </label> <input type="text" name="apes"></li>
            </ul>
        </div>  
               
        <div class="checks">
            <div class="radioBox">
                <ul>
                    <li><label>Género:</label></li>
                    <br>
                    <li><input type="radio" name="genero" value="masculino"><label>Masculino</label> </li>
                    <li><input type="radio" name="genero" value="femenino"><label>Femenino</label></li>
                    <li><input type="radio" name="genero" value="otros"><label>Otra</label></li>
                </ul>
            </div>

            <div class="checkBox">
                <ul>
                    <li><label>Idiomas:</label></li>
                    <br>
                    <li><input type="checkbox" name="idioma[]" value="ingles"><label>Inglés</label> </li>
                    <li><input type="checkbox" name="idioma[]" value="francés"><label>Francés</label> </li>
                    <li><input type="checkbox" name="idioma[]" value="alemán"><label>Alemán</label> </li>
                </ul>
            </div>    
        </div>

        <select name="nacionalidad">
            <option value="">Seleccione nacionalidad:</option>
            <option value="española">Española</option>
            <option value="francesa">Francesa</option>
            <option value="alemana">Alemana</option>
            <option value="italiana">Italiana</option>
            <option value="rusa">Rusa</option>
        </select>

        <label>Aficiones: </label>
        <select name="aficiones[]" size="5" multiple="multiple">>
            <option value="deportes">Deportes</option>
            <option value="cultura">Cultura</option>
            <option value="sociedad">Sociedad</option>
            <option value="política">Política</option>
            <option value="ecomomía">Economía</option>
        </select>


        <input type="submit">
    </form>

    
</body>
</html>

