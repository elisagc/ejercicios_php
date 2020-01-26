<?php
echo "control Libro";

spl_autoload_register(function ($className) {
    echo $className;
    include __DIR__ . '../../clases/' . $className . '.php';
});

if (isset($_POST["insertar"])) {
    $isbn = trim($_POST['isbn']);
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $stock = trim($_POST['stock']);
    $price = trim($_POST['price']);
    $book = new Book($isbn, $title, $author, $stock, $price);
    $res = $book->insertNewBook();
    echo $res . "res";

    //controlar que el libro no exista con el isbn
    if ($res) {
        echo "se ha añadido correctamente";
    } else {
        echo "NOOOOOOOOOOOO";
    }
}

if (isset($_POST["alquilar"])) {
    echo "alquilar";
}

if (isset($_POST["devolver"])) {
    echo "devolver";
}

if (isset($_POST["eliminar"])) {
    echo "eliminar";
}

if (isset($_POST["ver"])) {
    echo "ver";
}
