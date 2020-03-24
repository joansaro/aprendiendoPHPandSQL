# CONSULTAS DE AGRUPAMIENTO #
SELECT titulo FROM ENTRADAS;
SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;

SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id; # MOSTRAR EL NUMERO DE ENTRADAS POR CATEGORIAS#


# CONSULTA DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) AS 'NUMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 3; # MOSTRAR EL NUMERO DE ENTRADAS POR CATEGORIAS CON CONDICIÓN#

/*
AVG         Sacar la media
COUNT       Contar el numero de elementos
MAX         Valor maximo del grupo
MIN         Valor minimo del grupo
SUM         Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'MEDIAS DE ENTRADAS' FROM entradas;
SELECT MAX(id) AS 'MAXIMO ID', titulo FROM entradas;
SELECT MIN(id) AS 'MINIMO ID', titulo FROM entradas;
SELECT SUM(id) AS 'SUMA DE ID', titulo FROM entradas;

