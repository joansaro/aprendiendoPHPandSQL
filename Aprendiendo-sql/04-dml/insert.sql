# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUES(null, 'Andrés', 'Santos', 'joansaro.sant@gmail.com', '1234', '14-03-20');
INSERT INTO usuarios VALUES(null, 'Antonio', 'Martinez', 'Tono.sant@gmail.com', '1234', '20-03-14');
INSERT INTO usuarios VALUES(null, 'Paco', 'Santos', 'paco.sant@gmail.com', '1234', '20-03-14');


# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO usuarios (email, password) VALUES('joansarox@outlook.com', 12345);