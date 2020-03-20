/* 
1. DISEÑAR Y CREAR UNA BASE DE DATOS DE UN CONCECIONARIO.
 */

# CREAR BASE DE DATOS
CREATE DATABASE IF NOT EXISTS concesionario;

# USAR BASE DE DATOS
USE concesionario

# CREAR TABLAS
CREATE TABLE coches(
id          int(10) auto_increment not null,
modelo      varchar(100) not null,
marca       varchar(100),
precio      int(20) not null,
stock       int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE = InnoDB;


CREATE TABLE grupos(
id          int(10) auto_increment not null,
nombre      varchar(100) not null,
ciudad      varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE = InnoDB;

CREATE TABLE vendedores(
id          int(10) auto_increment not null,
grupo_id    int(10) not null,
jefe        int(10),
nombre      varchar(100) not null,
apellidos   varchar(255) not null,
cargo       varchar(100) not null,
fecha_alta  date,
sueldo      float(10.2),
comision    float(10.5),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id) 
)ENGINE = InnoDB;

CREATE TABLE clientes(
id          int(10) auto_increment not null,
vendedor_id int(255) not null,
nombre      varchar(255) not null,
ciudad      varchar(255) not null,
gastos      float(10,2),
fecha       date,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE = InnoDB;

CREATE TABLE encargos(
id          int(10) auto_increment not null,
cliente_id  int(10) not null,
coche_id    int(10) not null,
cantidad    int(10) not null,
fecha       date,
CONSTRAINT pk_encargos PRIMARY KEY(id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE = InnoDB;

# RELLENAR LA BASE DE DATOS
# COCHES
INSERT INTO coches VALUES (null, 'Rav 4', 'TOYOTA', 35000, 25);
INSERT INTO coches VALUES (null, 'NP-300', 'NISSAN', 25000, 20);
INSERT INTO coches VALUES (null, 'COROLLA', 'TOYOTA', 20000, 30);
INSERT INTO coches VALUES (null, 'SENTRA', 'NISSAN', 17000, 25);
INSERT INTO coches VALUES (null, 'OUTLANDER', 'MITHSUBISHI', 30000, 25);
INSERT INTO coches VALUES (null, 'X3', 'BMW', 40000, 10);

# GRUPOS
INSERT INTO grupos VALUES (null, 'Vendedor A', 'Usulutan');
INSERT INTO grupos VALUES (null, 'Directores mechanicos', 'Usulutan');
INSERT INTO grupos VALUES (null, 'Vendedores C', 'Usulutan');
INSERT INTO grupos VALUES (null, 'Vendedores A', 'San Miguel');
INSERT INTO grupos VALUES (null, 'Vendedores B', 'San Miguel');
INSERT INTO grupos VALUES (null, 'Vendedores C', 'San Miguel');
INSERT INTO grupos VALUES (null, 'Vendedores A', 'San Salvador');
INSERT INTO grupos VALUES (null, 'Vendedores B', 'San Salvador');
INSERT INTO grupos VALUES (null, 'Vendedores C', 'San Salvador');

# VENDEDORES
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 1, 1, 'juan', 'Nieves', 'Ayudante de tienda', CURDATE(), 23000, 2);
INSERT INTO vendedores VALUES(NULL, 2, NULL, 'José', 'Perez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 2, 3, 'Luis', 'Martinez', 'Responsable de tienda', CURDATE(), 30000, 2);
INSERT INTO vendedores VALUES(NULL, 3, NULL, 'Andrés', 'Santos', 'Mecanico jefe', CURDATE(), 50000, 3);
INSERT INTO vendedores VALUES(NULL, 5, NULL, 'Gabriel', 'Salmeron', 'Vendedor de recambios', CURDATE(), 70000, 2);
INSERT INTO vendedores VALUES(NULL, 6, NULL, 'Frank', 'Sanches', 'Ejecutivo de cuentas', CURDATE(), 60000, 4);
INSERT INTO vendedores VALUES(NULL, 6, NULL, 'Victor', 'Aguila', 'Ejecutivo de cuentas', CURDATE(), 60000, 4);
INSERT INTO vendedores VALUES(NULL, 6, 8, 'Jesus', 'Vasquez', 'Ayudante de tienda', CURDATE(), 10000, 2);

# CLIENTES
INSERT INTO clientes VALUES (null, 1, 'Construcciones Diaz Inc.', 'Santiago de Maria', 60000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'ANDA', 'El Triunfo', 91000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Pupuseia Flores Inc.', 'Santiago de Maria', 30000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Construcciones Cruz Inc.', 'Santa Ana', 90000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'PC Inc.', 'Morazan', 150000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'UBER Inc.', 'Alegria', 180000, CURDATE());

/*
id          int(10) auto_increment not null,
vendedor_id int(255) not null,
nombre      varchar(255) not null,
ciudad      varchar(255) not null,
*/
# ENCARGOS
INSERT INTO encargos VALUES (null, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES (null, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES (null, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES (null, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES (null, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES (null, 6, 6, 1, CURDATE());

