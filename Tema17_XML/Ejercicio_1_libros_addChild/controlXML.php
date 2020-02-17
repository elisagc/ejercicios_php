<?php
include("./class/Conexion.php");


if (isset($_POST["submit"])) {

    $con = Conexion::getinstance("./config/config.json");
    $query = "select * from book";

    //tengo mi array de libros
    $rows = $con->selectQuery($query);

    //pasar array a SimpleXML, a este objeto ya se le puede añadir hijos
    $exists = file_exists('mixml.xml');

    //si no existe crear el xml a partir de las filas devueltas
    // si existe, leer el xml y escribir sobre él
    if (!$exists) {
        $xml = arrayToXml($rows);
        addChild($xml);
    } else {
        $xml = simplexml_load_file("mixml.xml");
        addChild($xml);
    }

    $document = simplexml_load_file('mixml.xml');
    echo "<h1>Documento guardado en mixml.xml</h1>";
    var_dump($document);
}


if (isset($_POST["submit2"])) {

    echo "modificar";
    //coge el fichero xml
    $xml = simplexml_load_file("mixml.xml");

    //así se lee

    foreach ($xml->libro as $nodo) {
        echo $nodo->title;
    }





    //

}



function addChild($xml)
{
    $book = $xml->addChild("libro");
    $book->addChild("id", $_POST['id']);
    $book->addChild("isbn", $_POST['isbn']);
    $book->addChild("title", $_POST['title']);
    $book->addChild("author", $_POST['author']);
    $book->addChild("stock", $_POST['stock']);
    $book->addChild("price", $_POST['price']);
    $xml->asXML('mixml.xml');
}


function arrayToXml($array, $rootElement = null, $xml = null)
{
    $_xml = $xml;
    if ($_xml === null) {
        $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>');
    }
    foreach ($array as $k => $v) {
        //cuando viene de la BBDD transformar el índice por la etiqueta
        if (is_numeric($k)) {
            $k = "libro";
        }
        if (is_array($v)) {
            arrayToXml($v, $k, $_xml->addChild($k));
        } else {
            $_xml->addChild($k, $v);
        }
    }
    return $_xml;
}


function modificarXML($xml, $key = "123", $newVal = "pepe")
{

    var_dump($xml);

    foreach ($xml as $x) {

        var_dump($x[0]->id);
    }
}
