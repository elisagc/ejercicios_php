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
            document.getElementById("nombre").addEventListener("keyup", mostrarNombre);
        }


        function mostrarNombre(e) {
            var cadena = e.target.value;
            if (cadena.length == 0) {
                document.getElementById("sugerencia").innerHTML = "";
            } else {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {

                }
            }
        }
    </script>
</head>

<body>
    <p>Escribe un nombre</p>
    <form>
        <input type="text" id="nombre" />
    </form>

    <p>Sugerencias: <span id="sugerencia"></span></p>
</body>

</html>