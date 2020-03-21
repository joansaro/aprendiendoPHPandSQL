# LISTAR CLIENTES QUE HAN HECHO ALGUN ENCARGO DE COCHE TOYOTA COROLLA  #
SELECT * FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE coche_id IN
(SELECT id FROM coches WHERE modelo LIKE '%COROLLA%'));

# OTRA FORMA #
SELECT  cl.id AS 'ID',
cl.vendedor_id AS 'VENDEDOR',
cl.nombre AS 'CLIENTE',
CONCAT(co.marca, ' ', co.modelo) AS 'COCHE',
e.cantidad AS 'CANTIDAD',
cl.fecha AS 'FECHA'
FROM encargos e 
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE modelo = 'COROLLA' AND marca = 'TOYOTA'  IN 
(SELECT id FROM coches);


