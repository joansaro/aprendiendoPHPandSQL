# RENOMBRAR TABLA #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR EL NOMBRE DE UNA COLUMNA #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN MODIFICAR NOMBRE #
ALTER TABLE usuarios_renom MODIFY apellido char(50) not null;


# AÑADIR COLUMNA #
ALTER TABLE usuarios_renom ADD webside varchar(100) null;

# AÑEDIR RESTRICCION #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR COLUMNA #
ALTER TABLE usuarios_renom DROP webside;

