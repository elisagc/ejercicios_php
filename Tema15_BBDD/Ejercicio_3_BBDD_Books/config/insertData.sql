use prueba;

INSERT INTO customer(id,firstname,surname,email,type,password) VALUES
(1,'Elisa','García','eli@gmail.com','premium','202cb962ac59075b964b07152d234b70'),
(2,'Pilar','Rus','pili@gmail.com','premium','202cb962ac59075b964b07152d234b70'),
(3,'Alberto','Ruiz','alber@gmail.com','basic','202cb962ac59075b964b07152d234b70'),
(4,'Pablo','Rodríguez','pablo@gmail.com','basic','202cb962ac59075b964b07152d234b70'),
(5,'Ana','Sersic','ana@gmail.com','premium','202cb962ac59075b964b07152d234b70')
;

INSERT INTO book(id,isbn,title,author,stock,price) VALUES
(123,"12345","el libro de los baltimore","joel dicker",3,9.99),
(456,"6789","el libro de los baltimore","joel dicker",3,15.99),
(789,"1011","el libro de los baltimore","joel dicker",3,9.99),
(1011,"1314","el libro de los baltimore","joel dicker",3,9.99),
(1213,"1516","el libro de los baltimore","joel dicker",3,9.99)
;

INSERT INTO sale(id,customer_id,date) VALUES
(111,1, '2004-05-23T14:25:10'),
(222,2, '2004-05-23T14:25:10'),
(333,5, '2004-05-23T14:25:10')
;

/* DESPUÉS LIBRO VENDIDO */
INSERT INTO sale_book(book_id,sale_id,amount) VALUES
(123,111,5),
(456,222,4),
(789,333,2)
;