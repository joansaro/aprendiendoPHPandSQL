# MODIFICAR LA COMISION DE LOS VENDEDORES Y PONERLES EL 2% CUANDO GANAN MAS DE 50000

UPDATE vendedores SET comision = 0.2 WHERE sueldo >= 50000;