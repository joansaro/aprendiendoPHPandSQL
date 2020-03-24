# SACAR LA MEDIA DE SUELDOS ENTRE TODOS LOS VENDEDORES POR GRUPO #
SELECT grupo_id, AVG(sueldo) AS 'MEDIA DEL SULDO' FROM vendedores GROUP BY grupo_id;

# OTRA FORMA #
SELECT v.grupo_id, G.nombre, g.ciudad, CEIL(AVG(v.sueldo2)) AS 'MEDIA DEL SUELDO' FROM vendedores v 
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;

# EL CEIL ES PARA REDONDEAR SIN DECIMALES #