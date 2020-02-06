<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        window.addEventListener("load", inicio);

        function inicio() {
            document.getElementById("mostrar").addEventListener("click", mostrar);

        }

        function mostrar() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var objeto = JSON.parse(this.responseText);

                    for (var i = 0; i < objeto.length; i++) {
                        document.getElementById("parrafo").innerHTML = objeto[i].title + "," + objeto[i].author;
                    }

                    // como el texto que recibimos de php es json lo parseamos para que sea un objeto
                    // así podemos trabajar con él en JS



                    // Convertimos un objeto JS en cadena: 


                }

            }
            xhr.open("GET", "ajax.php", true);
            xhr.send();

        }
    </script>
</head>

<body>
    <button id="mostrar">Ver todos los libros</button>
    <p id="parrafo"></p>

</body>

</html>