# INSERTS PARA USUARIOS #
INSERT INTO usuarios VALUE(null, 'José', 'Rodríguez', 'jose@rodriguez.com', '54321', '20-01-10' );
INSERT INTO usuarios VALUE(null, 'Tatiana', 'Aguila', 'tatiana@aguila.com', '43421', '1999-10-04' );


# INSERTS PARA CATEGORIAS #
INSERT INTO categorias VALUE(null, 'Acción');
INSERT INTO categorias VALUE(null, 'Rol');
INSERT INTO categorias VALUE(null, 'Deportes');

# INSERTS PARA ENTRADAS #
INSERT INTO entradas VALUE(null, '1', '1', 'Novedades de GTA V','Review de GTA V', CURDATE());
INSERT INTO entradas VALUE(null, '1', '2', 'Novedades de LOL','Review de LOL', CURDATE());
INSERT INTO entradas VALUE(null, '1', '3', 'Novedades de FIFA 2020','Review de FIFA 20', CURDATE());

INSERT INTO entradas VALUE(null, '2', '1', 'Novedades de TLOZ','Review de TLOZ', CURDATE());
INSERT INTO entradas VALUE(null, '2', '2', 'Novedades de WARDCRAFT','Review de WARDCRAFT', CURDATE());
INSERT INTO entradas VALUE(null, '2', '3', 'Novedades de PES 2020','Review de PES 20', CURDATE());

INSERT INTO entradas VALUE(null, '2', '1', 'Novedades de Spiderman','Review de Spiderman', CURDATE());
INSERT INTO entradas VALUE(null, '2', '2', 'Novedades de Diablo III','Review de Diablo III', CURDATE());
INSERT INTO entradas VALUE(null, '2', '3', 'Novedades de UFC 2020','Review de UFC 20', CURDATE());