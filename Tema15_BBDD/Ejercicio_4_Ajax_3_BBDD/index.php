<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <script>
        window.addEventListener("load", mostrar);

        function mostrar() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var objeto = JSON.parse(this.responseText);
                    var td = document.getElementsByClassName("td");

                    console.log(td);
                    for (var i = 0; i < objeto.length; i++) {
                        td[i].innerHTML += objeto[i];
                    }

                    console.log(objeto);
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
    <table>
        <tr>
            <th>ID</th>
            <th>ISBN</th>

            <th>AUTHOR</th>
            <th>TITLE</th>


            <th>PRICE</th>
        </tr>
        <tr>
            <td class="td"></td>
            <td class="td"></td>
            <td class="td"></td>
        </tr>
    </table>

</body>

</html>