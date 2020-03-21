# LISTAR LOS ENCARGOS CON EL NOMBRE DEL COCHE, NOMBRE DEL CLIENTE Y EL NOMBRE DE 
# LA CIUDAD DEL CLIENTE PERO UNICAMENTE CUANDO SEAN DE EL TRIUNFO
SELECT en.id AS 'N° ENCARGO',
cl.nombre AS 'NOMBRE',
cl.ciudad AS 'CIUDAD',
CONCAT(co.marca, ' ',co.modelo) AS 'COCHE'
FROM clientes cl, coches co, encargos en
WHERE 
cl.id = en.cliente_id AND
co.id = en.coche_id AND
cl.ciudad = 'El Triunfo' GROUP BY ciudad;

# OTRA FORMA #
SELECT en.id AS 'N° ENCARGO',
cl.nombre AS 'NOMBRE',
cl.ciudad AS 'CIUDAD',
CONCAT(co.marca, ' ',co.modelo) AS 'COCHE'
FROM encargos en
INNER JOIN clientes cl ON cl.id = en.cliente_id
INNER JOIN coches co ON co.id = en.coche_id
WHERE cl.ciudad = 'El Triunfo' GROUP BY ciudad;