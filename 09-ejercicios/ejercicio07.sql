# MOSTRAR EL NOMBRE Y SALARIO DE LOS VENDEDORES CON CARGO DE AYUDANTE DE TIENDA
SELECT nombre, sueldo, cargo FROM vendedores WHERE cargo LIKE '%Ayudante de tienda%';

SELECT nombre, sueldo FROM vendedores WHERE cargo = 'Ayudante de tienda';