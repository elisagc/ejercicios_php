<?php

class Book
{

    public $isbn;
    public $title;
    public $author;
    public $stock;
    public $price;
    public $con;

    function __construct($isbn, $title, $author, $stock, $price){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->stock = $stock;
        $this->price = $price;
        $con = Conexion::getInstance();
    }

    public function insertNewBook(){
        $insertNewBook = <<<MYSQL
        insert into book (isbn,title,author,stock,price) values('$this->isbn',$this->title','$this->author,$this->stock,$this->price);
        MYSQL;

        $this->con->query($insertNewBook);
    }
}

?>

// id isbn title author stock price
// Tabla book

//customer_id book_id start end
// Prestados borrowed_books


//book_id sale_id amount
//Libros en venta

//id customer_id date
//Vendidos