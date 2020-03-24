# INCREMENTAR EL PRECIO DE TODOS LOS COCHES EN UN 2% %
UPDATE coches SET precio = ( precio + (precio * 0.2) );  

# ó #

UPDATE coches SET precio = precio * 1.02; 

