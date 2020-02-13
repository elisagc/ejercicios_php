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

            id = document.getElementById("puntuacion").value;
            var objeto = {
                "tabla": "book",
                "valor": parseInt(id)
            }
            var xhr = new XMLHttpRequest();
            var txt = "";
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var text = this.responseText;
                    console.log(text);
                    var array = JSON.parse(text);

                    for (x in array) {
                        txt += array[x].stock + "-" + array[x].price;
                    }

                    document.getElementById("texto").innerHTML = txt;

                }

            }

            var parametros = JSON.stringify(objeto);
            xhr.open("GET", "ajax.php?objeto=" + parametros, true);
            xhr.send();

        }
    </script>
</head>

<body>


    <input type="number" id="puntuacion" />
    <button id="mostrar">Mostar</button>
    <p id="texto"></p>



</body>

</html>