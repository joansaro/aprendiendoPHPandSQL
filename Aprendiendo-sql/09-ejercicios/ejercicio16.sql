# OBTENER LISTADO DE CLIENTES ATENDIDOS POR EL VENDEDOR DAVID LOPEZ #
SELECT * FROM clientes WHERE vendedor_id = 
(SELECT id FROM vendedores WHERE nombre= 'David' AND apellidos = 'Lopez');