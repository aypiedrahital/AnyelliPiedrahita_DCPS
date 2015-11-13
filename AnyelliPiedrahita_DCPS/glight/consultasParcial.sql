CREATE TABLE parque (
codigo bigint(20) not null,
nombre VARCHAR(30) not null,
municipio VARCHAR(30) not null,
nivel VARCHAR(30) not null,
PRIMARY KEY(codigo))
ENGINE=InnoDB;

CREATE TABLE calificacion (
calificacion bigint(20) not null,
parque bigint(20) null,
CONSTRAINT c_p FOREIGN KEY (parque) REFERENCES parque (codigo)) 
ENGINE=InnoDB;