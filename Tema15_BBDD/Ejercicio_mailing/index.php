<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envío de Emails</title>
</head>

<body>

    <form method="post" action="enviar_email.php">

        <input type="text" name="name" placeholder="Nombre" />
        <input type="email" placeholder="E-mail" name="email" />
        <input type="text" placeholder="Asunto" name="asunto" />
        <input type="text" placeholder="Contenido" name="contenido" />
        <input type="submit" name="submit" />

    </form>
</body>

</html>