<?php

class Book
{

    public $isbn;
    public $title;
    public $author;
    public $stock;
    public $price;
    public $con;

    function __construct(&$isbn, &$title, &$author, &$stock, &$price)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->stock = $stock;
        $this->price = $price;
        $this->con = Conexion::getInstance();
    }

    public function insertNewBook()
    {
        try {
            $insertNewBook = <<<MYSQL
            insert into book(isbn,title,author,stock,price) values('$this->isbn','$this->title','$this->author',$this->stock,$this->price);
MYSQL;
            $res = $this->con->query($insertNewBook);
            return $res;
        } catch (PDOException $exception) {
            return "Error al insertar libro" . $exception;
        }
    }
}
