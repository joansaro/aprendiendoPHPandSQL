# LISTAR TODOS LOS ENCARGOS REALIZADOS COM LA MARCA DEL COCHE Y EL NOMBRE DEL CLIENTE
SELECT en.id AS 'N° PEDIDO',
cl.nombre AS 'NOMBRE',
CONCAT(co.marca, ' ',co.modelo) AS 'COCHE'
FROM encargos en, clientes cl, coches co
WHERE cl.id = en.cliente_id AND co.id = en.coche_id;
