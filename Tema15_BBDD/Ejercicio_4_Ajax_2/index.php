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
                    // como el texto que recibimos de php es json lo parseamos para que sea un objeto
                    // así podemos trabajar con él en JS
                    document.getElementById("parrafo").innerHTML = objeto.nombre + "," + objeto.nacimiento;
                    // Convertimos un objeto JS en cadena: 
                    var cadena = JSON.stringify(objeto);
                    document.getElementById("parrafo").innerHTML += cadena;

                }

            }
            xhr.open("GET", "ajax.php", true);
            xhr.send();

        }
    </script>
</head>

<body>

    <button id="mostrar">Mostrar</button>
    <p id="parrafo"></p>
</body>

</html>