# OBTENER UN LISTADO CON LOS ENCARGOS REALIZADOZ POR EL CLIENTE  pc inc #
SELECT e.id AS 'N° ENCARGO', cantidad, c.nombre, co.modelo, e.fecha FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE cliente_id IN
(SELECT id FROM clientes WHERE nombre = 'PC Inc.');

