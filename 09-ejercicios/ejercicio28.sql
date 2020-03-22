# MOSTRAR TODOS LOS VENDEDORES TENGAN O NO CLIENTES, Y NUMERO DE CLIENTES #
SELECT ve.id, CONCAT(ve.nombre, ' ', ve.apellidos) AS 'VENDEDOR',
cl.id, cl.nombre
FROM vendedores ve
LEFT JOIN clientes cl ON  ve.id = cl.vendedor_id;
