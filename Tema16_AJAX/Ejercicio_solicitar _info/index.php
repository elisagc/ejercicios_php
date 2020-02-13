<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script>
        window.addEventListener("onClick", mostrar);

        function mostrar() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    var objeto = this.responseText;
                    document.getElementById("p").innerHTML = objeto;
                    console.log(objeto);

                }

            }
            xhr.open("GET", "ajax.php", true);
            xhr.send();

        }
    </script>
</head>

<body>


    <input type="text" />
    <input type="submit" />
    <p id="p"></p>



</body>

</html>