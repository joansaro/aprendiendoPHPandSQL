# OBTENER UNA LISTA DE LOS NOMBRE DE LOS CLIENTES CON EL IMPORTE DE SUS GASTOS 
# ACUMULADOS
SELECT ci.nombre, SUM(precio*cantidad) AS 'importe' 
FROM clientes ci
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON co.id = en.coche_id
GROUP BY ci.nombre
ORDER BY 2 ASC;