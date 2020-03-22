# VISUALIZAR LOS NOMBRES DE LOS CLIENTES Y LA CANTIDAD DE LOS ENCARGOS 
# REALIZADOS INCLUYENDO LOS QUE NO ALLAN REALIZADO ENCARGOS
SELECT cl.nombre AS 'CLIENTES',
en.cantidad AS 'CANTIDAD'
FROM encargos en
RIGHT JOIN clientes cl ON cl.id = en.cliente_id;





INSERT INTO clientes VALUES(null, 5, 'Tienda organica Sa de Cv', 'Chalchuapa', 0, CURDATE());