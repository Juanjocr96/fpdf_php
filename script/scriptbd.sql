CREATE DATABASE colegio_juanjocarrasco;

CREATE TABLE cursos(
	idCurso char(4) PRIMARY KEY NOT NULL,
	nombre varchar(60) NOT NULL
);


CREATE TABLE alumnos (
	idAlumno char(6) PRIMARY KEY NOT NULL,
	nombre varchar(50) NOT NULL,
	direccion varchar(60) NOT NULL,
	telefono char(9) NOT NULL,
	idCurso char(4) NOT NULL,

	CONSTRAINT FK_idCurso FOREIGN KEY (idCurso) REFERENCES cursos(idCurso)
);
