/*
VISTAS 
Las podemos definir como una consulta almacenada en la base de datos que se 
utiliza como una tabla virtual si no que utiliza asociones y los datos originales
de las tablas, de manera que siempre se mantienen actualizadas
*/

CREATE VIEW entradas_con_nombres AS
SELECT e.id, e.titulo, u.nombre AS 'AUTOR', c.nombre AS 'CATEGORIA'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;