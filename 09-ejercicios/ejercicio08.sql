# VISUALIZAR TODOS LOS COCHES EN CUYA MARCA EXISTA LA LETRA "A" Y CUYO MODELO COMIENCE CON "C" #

SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'C%';