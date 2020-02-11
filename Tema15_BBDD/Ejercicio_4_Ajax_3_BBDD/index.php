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
            var price = document.getElementById("price").value;
            console.log(price);

            var o = {
                "tabla": "books",
                "valor": price
            };

            console.log(o);

            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    var objeto = JSON.parse(this.responseText);

                    var table = document.getElementById("table");
                    var tbody = document.createElement("tbody");

                    for (var j = 0; j < objeto.length; j++) {
                        var tr = document.createElement("tr");

                        var td_id = document.createElement("td");
                        var td_isbn = document.createElement("td");
                        var td_author = document.createElement("td");
                        var td_title = document.createElement("td");
                        //var td_price = document.createElement("td");

                        td_id.innerHTML = objeto[j].id;
                        tr.appendChild(td_id);

                        td_isbn.innerHTML = objeto[j].isbn;
                        tr.appendChild(td_isbn);

                        td_author.innerHTML = objeto[j].author;
                        tr.appendChild(td_author);

                        td_title.innerHTML = objeto[j].title;
                        tr.appendChild(td_title);

                        //  td_price.innerHTML = objeto[j].price;
                        //  tr.appendChild(td_price);

                        tbody.appendChild(tr);
                        table.appendChild(tbody);
                    }


                    // como el texto que recibimos de php es json lo parseamos para que sea un objeto
                    // así podemos trabajar con él en JS
                    // Convertimos un objeto JS en cadena: 


                }

            }
            xhr.open("GET", "ajax.php?o=" + parametros, true);
            xhr.send();

        }
    </script>
</head>

<body>

    <table id="table">
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>AUTHOR</th>
            <th>TITLE</th>

        </tr>

    </table>

    <input type="text" id="price" />
    <button id="mostrar">Ver precio</button>

</body>

</html>