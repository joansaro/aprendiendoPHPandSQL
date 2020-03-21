# MOSTRAR LISTADO DE CLIENTES MOSTRANDO EL NUMERO DE CLIENTE, NOMBRE Y MOSTRAR EL 
# NUMERO DE VENDEDOR Y EL NOMBRE DE ESTE
SELECT cl.id, cl.nombre, ve.id, CONCAT(ve.nombre,' ', ve.apellidos) AS 'vendedor'
FROM clientes cl, vendedores ve
WHERE cl.vendedor_id = ve.id;

# O TABIEN #
SELECT cl.id, cl.nombre, ve.id, CONCAT(ve.nombre,' ', ve.apellidos) AS 'vendedor' FROM clientes cl
INNER JOIN vendedores ve ON ve.id = cl.vendedor_id;