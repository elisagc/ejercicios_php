/*La característica fundamental de AJAX es permitir actualizar parte de una página
con información que se encuentra en el servidor sin tener que refrescar
completamente la página. De modo similar podemos enviar información al
servidor.*/


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
            document.getElementById("nombre").addEventListener("keyup", mostrarNombre2);
        }

        //EJEMPLO CON GET:
        function mostrarNombre(e) {
            var cadena = e.target.value;
            if (cadena.length == 0) {
                document.getElementById("sugerencia").innerHTML = "";
            } else {
                var xhr = new XMLHttpRequest();

                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById("sugerencia").innerHTML = this.responseText;
                    }
                }
                xhr.open("GET", "array_nombres.php?nombre=" + cadena, true);
                xhr.send();
            }
        }

        //EJEMPLO CON POST
        function mostrarNombre2(e) {
            var cadena = e.target.value;
            if (cadena.length == 0) {
                document.getElementById("sugerencia").innerHTML = "";
            } else {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        document.getElementById("sugerencia").innerHTML = this.responseText;
                    }
                }
                xhr.open("POST", "array_nombres.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("nombre=" + cadena);
            }
        }
    </script>
</head>

<body>

    <p>Sugerencias: <span id="sugerencia"></span></p>
    <p>Escribe un nombre</p>
    <form>
        <input type="text" id="nombre" />
    </form>

    <!-- EJEMPLO JSON -->

    <div id="demo"></div>
    <script>
        var objeto = {
            "nombre": "Elisa",
            "nacimiento": 1985,
            "país": "España"
        }
        alert(objeto.nombre + "," + objeto.nacimiento);

        for (var x in objeto) {
            //x es la clave
            document.getElementById("demo").innerHTML += x + ":" + objeto[x] + "<br>";
        }

        var objeto2 = {
            "nombre": "Paco",
            "nacimiento": 1980,
            "país": "España",
            "aficiones": {
                "afición1": "leer",
                "afición2": "bailar",
                "afición3": "comer"
            }
        }

        var aficionesObj2 = objeto2.aficiones;
        console.log(aficionesObj2);

        for (var aficion in aficionesObj2) {
            document.getElementById("demo").innerHTML += aficionesObj2[aficion];
            console.log(aficionesObj2[aficion]);
        }

        var objeto3 = {
            "nombre": "Paco",
            "nacimiento": 1980,
            "país": "España",
            "aficiones": ["leer3", "bailar3", "comer3"]
        }

        objeto3.aficiones.forEach(e => document.getElementById("demo").innerHTML += e);
    </script>
</body>

</html>