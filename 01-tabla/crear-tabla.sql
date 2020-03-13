/*
CREAR UNA TABLA
*/

CREATE TABLE usuarios(
id          int(255) not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default('Hola que tal'),
email       varchar(100) not null,
password    varchar(255)
); 