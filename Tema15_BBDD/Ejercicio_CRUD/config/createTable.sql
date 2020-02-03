use crud;
CREATE TABLE usuarios(
    id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(15) NOT NULL,
    direccion VARCHAR(30)
) engine='Innodb';

