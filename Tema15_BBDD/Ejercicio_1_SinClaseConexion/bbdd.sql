create database if not exists pepe;
use pepe;
CREATE TABLE book IF NOT exists(
    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(13) NOT NULL,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    stock SMALLINT(5)  NOT NULL,
    price FLOAT NOT NULL
) engine='Innodb';

CREATE TABLE customer (
    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    surname VARCHAR(255),
    email VARCHAR(255),
    type ENUM('basic','premium') 
) engine='Innodb';

CREATE TABLE sale (
    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    customer_id INT(10),
    date DATETIME,
    FOREIGN KEY(customer_id) REFERENCES customer(id) ON UPDATE CASCADE ON DELETE CASCADE  
) engine='Innodb';

CREATE TABLE borrowed_books (
    customer_id INT(10),
    book_id INT(10),
    start DATETIME,
    end DATETIME,
    FOREIGN KEY(customer_id) REFERENCES customer(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(book_id) REFERENCES book(id) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY(customer_id,book_id)
) engine='Innodb';

CREATE TABLE sale_book (
    book_id INT(10),
    sale_id INT(10),
    amount SMALLINT(5),
    FOREIGN KEY (book_id) REFERENCES book(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (sale_id) REFERENCES sale(id) ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (book_id, sale_id)
) engine='Innodb';

/*
SINGLETON QUÉ ES: UN PATRÓN DE DISEÑO EN JAVA SOBRETODO
SE USA CUANDO SE INSTANCIA UNA VEZ UN OBJETO: COMO EN LA CONEXIÓ
*/

INSERT INTO book(isbn,title,author,stock,price) VALUES(123,"12345","el libro de los baltimore","joel dicker",3,9.99);
INSERT INTO customer(id,firstname,surname,email,type) VALUES(1,"Elisa","Garcia","eli@hotmail.com","premium");
/*PRIMER VENTA*/
INSERT INTO sale(id,customer_id,date) VALUES(888,1, DateTime::createFromFormat('Y-m-d H:i:s', '2017-08-31 00:00:00'));
/* DESPUÉS LIBRO VENDIDO */
INSERT INTO sale_book(book_id,sale_id,amount) VALUES(123,888,1);