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

    $oldTitle = $_POST['old'];
    $newTitle = $_POST['new'];
    $res = modificarXML($oldTitle, $newTitle);

    if ($res) {
        echo "El título se ha modificado";
    } else {
        echo "No existe y no se ha podido modificar";
    }
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


function modificarXML($oldVal, $newVal)
{
    $file = "mixml.xml";

    if (file_exists($file)) {
        $xml = simplexml_load_file("mixml.xml");

        foreach ($xml->libro as $info) {
            if ((string) $info->title == $oldVal) {
                $info->title = $newVal;
                $xml->asXML($file);
                return true;
            }
        }
    } else {
        return false;
    }
}


function eliminarNodoXML()
{
    $xml = simplexml_load_file("mixml.xml");
    $doc = new DOMDocument();
    $doc->load('mixml.xml');
    $book = $doc->documentElement;
    $nodo = $book->getElementsByTagName('libro')->item(1);

    $book->removeChild($nodo);
    var_dump($doc->saveXML());
}

/*$doc = new DOMDocument();
$doc->load('mixml.xml');
$book = $doc->documentElement;
$libros = $book->getElementsByTagName('libro');

foreach ($libros as $libro) {

    $title = $libro->getElementsByTagName("title")->item(0)->nodeValue;

    if ($title == $toDelete) {
        $domTitle = $libro->getElementsByTagName("libro")->item(0);

        $book->removeChild($domTitle);



        //$book->removeChild($domTitle);
        echo $doc->saveXML();
    }
}*/
