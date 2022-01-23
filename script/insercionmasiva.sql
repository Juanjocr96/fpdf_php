/*INSERTAR EN TABLA CURSOS*/

INSERT INTO cursos (idCurso, nombre) VALUES
  ('1DAW', 'Desarrollo Aplic. Web 1'),
  ('2DAW', 'Desarrollo Aplic. Web 2'),
  ('1SMR', 'Sistemas micoinformáticos 1'),
  ('2SMR', 'Sistemas micoinformáticos 2'),
  ('1MEC', 'Mecatrónica 1'),
  ('2MEC', 'Mecatrónica 2');


  /*INSERTAR TABLA ALUMNOS*/

  INSERT INTO alumnos (idAlumno, nombre, direccion, telefono, idCurso) VALUES
    ('M10001', 'Juan Pérez Ramos', 'C/Redondo 6', '654789123', '1DAW'),
    ('M10002', 'Rosa Pérez Ramos', 'C/Redondo 12', '654784122', '2DAW'),
    ('M10003', 'Antonio Ruiz Redondo', 'C/Redondo 5', '654789121', '1DAW'),
    ('M10004', 'María Rodríguez Sanz', 'C/Redondo 1', '654789122', '1MEC'),
    ('M10005', 'Ernesto Cano Gutierrez', 'C/Redondo 3', '654789125', '1SMR'),
    ('M10006', 'Carlos Pérez Navarro', 'C/Redondo 7', '654789126', '2DAW'),
    ('M10007', 'Nico Carrasco López', 'C/Redondo 23', '654789127', '2SMR'),
    ('M10008', 'Damián Fernadez Neto', 'C/Redondo 8', '654789129', '1MEC'),
    ('M10009', 'Ana Rosa Quintana', 'C/Redondo 9', '654789128', '2MEC'),
    ('M10010', 'Mariano Rajoy Ramos', 'C/Redondo 16', '654733123', '1SMR');
