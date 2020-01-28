<?php
error_reporting(E_ALL);
spl_autoload_register(function ($className) {
    include __DIR__ . '../../clases/' . $className . '.php';
});

header('Content-Type: text/html; charset=UTF-8'); // ESTO SOLUCIONA EL PROBLEMA DE LAS EÑES QUE VIENEN MAL DESDE POST

// INSERTAR:
if (isset($_POST["insertar"])) {
    $isbn = trim($_POST['isbn']);
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $stock = trim($_POST['stock']);
    $price = trim($_POST['price']);
    $book = new Book($isbn, $title, $author, $stock, $price);
    $res = $book->insertNewBook();
    if ($res) {
        echo "insertado correctamente";
        header("Refresh: 1; url=../Vista/formInsertar.php");
    } else {
        echo "Error: no se ha podido insertar el libro";
        header("Refresh: 1; url=../Vista/formInsertar.php");
    }
}


//ALQUILAR:
if (isset($_POST["alquilar"])) {
    $con = Conexion::getInstance();
    $persona = $_POST['name'];
    $titulo = strtolower($_POST['title']);
    $isbn = strtolower($_POST['isbn']);

    $selectIdPerson = <<<QUERY
    select id from customer where email='$persona';
QUERY;

    $rowsPerson = $con->selectQuery($selectIdPerson);

    if ($rowsPerson) {

        $selectIdBook = <<<QUERY
    select id,stock from book where title='$titulo' and isbn='$isbn';
QUERY;


        $rowsBook = $con->selectQuery($selectIdBook);
        $stock = $rowsBook[0]['stock'] - 1;
        $idBook = $rowsBook[0]['id'];
        //var_dump($idBook);
        $update = <<<QUERY
        update book set stock=$stock where id=$idBook;
QUERY;
        $con->query($update);

        $idPerson = $rowsPerson[0]['id'];
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        $insert = <<<QUERY
insert into borrowed_books(customer_id,book_id,start,end)values($idPerson,$idBook,'$date1','$date2');
QUERY;

        $res = $con->query($insert);

        if ($res) {
            echo "alquilado correctamente";
            header("Refresh: 2; url=../Vista/formAlquilar.php");
        } else {
            echo "no se ha podido realizar el alquiler";
            header("Refresh: 2; url=../Vista/formAlquilar.php");
        }
    } else {
        echo "la persona no está registrada, no puede alquilar libros";
        header("Refresh: 1; url=../Vista/formAlquilar.php");
    }
}


//DEVOLVER:
if (isset($_POST["devolver"])) {
    echo "devolver";

    //borrar libro de borrowedbook
    //sumar 1 a listado de libros
    $con = Conexion::getInstance();
    $persona = $_POST['name'];
    $isbn = strtolower($_POST['isbn']);

    $selectIdPerson = <<<QUERY
    select id from customer where email='$persona';
QUERY;

    $rowsPerson = $con->selectQuery($selectIdPerson);
    $idPerson=$rowsPerson[0]['id'];
    
    if ($rowsPerson) {
        $selectIdBook = <<<QUERY
        select id from book where isbn='$isbn';
QUERY;
        $rowsBook = $con->selectQuery($selectIdBook);
        $idBook=$rowsBook[0]['id'];

        $delete="delete from borrowed_books where customer_id=$idPerson and book_id=$idBook";
        $res= $con->query($delete);
var_dump($res);

// ver que existe en borrowedbooks si existe se borra si no no

//$exist="select * from borrowed_books where "


        if($res){
            echo "Devuelto correctamente";
           // header("Refresh: 2; url=../Vista/formDevolver.php");
        }else{
            echo "No se ha podido realizar la devolución";
            //header("Refresh: 2; url=../Vista/formDevolver.php");
        }

}

}


//ELIMINAR:
if (isset($_POST["eliminar"])) {

    $titulo = strtolower($_POST['title']);
    $isbn = strtolower($_POST['isbn']);

    $query = <<<SELECT
    select id from book where title='$titulo' and isbn='$isbn';
SELECT;

    $con = Conexion::getInstance();
    $rows = $con->selectQuery($query);

    if ($rows) {
        $id = $rows[0]['id'];
        $delete = <<<DELETE
    delete from book where id="$id";
DELETE;
        $res = $con->query($delete);

        if ($res) {
            echo "eliminado correctamente";
            header("Refresh: 1; url=../Vista/formEliminar.php");
        } else {
            echo "Error: no se ha podido borrar el libro";
            header("Refresh: 1; url=../Vista/formEliminar.php");
        }
    } else {
        echo "Error: no existe el libro";
        header("Refresh: 1; url=../Vista/formEliminar.php");
    }
}



//VER
if (isset($_POST["ver"])) {
    $con = Conexion::getInstance();
    $user = $_POST['name'];
    $res = $con->selectQuery("select id from customer where email='$user'");

    if (!empty($res)) {
        $userId = $res[0]['id'];
        $selectBorrowed = <<<SELECT
        select * from borrowed_books where customer_id=$userId;
SELECT;
        $rows = $con->selectQuery($selectBorrowed);


        if (!empty($rows)) {
            $arrBooks = [];
            foreach ($rows as $row) {
                $idbook = $row['book_id'];
                $select = "select title from book where id=$idbook";
                $rows = $con->selectQuery($select);
                array_push($arrBooks, $rows[0]['title']);
            }

            foreach ($arrBooks as $book) {
                echo "<p>$book</p>";
            }

            //SERIALIZAR PARA PODER ENVIAR POR EL HEADER:
            $seri= serialize($arrBooks);
            header("Location:../Vista/formVer.php?libros=$seri");
        } else {
            echo "el usuario no tiene libros prestados";
            header("Refresh: 2; url=../Vista/formAlquilar.php");
        }
    } else {
        echo "no existe el usuario";
        header("Refresh: 2; url=../Vista/formAlquilar.php");
    }
}
