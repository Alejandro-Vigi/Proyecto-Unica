--Creacion de la base de datos
create database proyectoCursos default character set utf8;

--Posicionamiento y uso de la basa de datos
use proyectoCursos;

--creacion de la tabla temaa, la cual es un catalogo
create table TEMA (
    idTema integer not null auto_increment primary key,
    temaCurso varchar(40) not null
)ENGINE=INNODB;

--creacion de la tabla Alumno
create table ALUMNO (
    idAlumno integer not null auto_increment primary key,
    metodoPago varchar(40) not null,
    edad decimal(2,0) not null,
    nombrePila varchar(40) not null,
    apellidoPaterno varchar(40) not null,
    apellidoMaterno varchar(40)
)ENGINE=INNODB;

--creacion de la tabla Profesor
create table PROFESOR (
    idProfesor integer not null auto_increment primary key,
    gradoEstudios char(1) not null check (gradoEstudios IN ('B','L','M')),
    nombrePila varchar(40) not null,
    apellidoPaterno varchar(40) not null,
    apellidoMaterno varchar(40) not null,
    calle varchar(40) not null,
    ciudad varchar(40) not null
)ENGINE=INNODB;

CREATE VIEW vPROFESOR AS 
  SELECT * FROM PROFESOR WHERE gradoEstudios IN ('B','L','M')
  WITH CHECK OPTION;

--Prueba insert para Check usando la vista porque MySQL no implementa los checks
--INSERT INTO vprofesor (gradoEstudios, nombrePila, apellidoPaterno, apellidoMaterno, calle, ciudad) values ('L',"Marco", "Sanchez", "Perez", "Tulum", "CDMX");

--creacion de la tabla Curso
create table CURSO (
    idCurso integer not null auto_increment primary key,
    descripcion varchar(40) not null,
    nombreCurso varchar(40) not null,
    dificultad char(1) not null check (dificultad IN ('P','I','A')),
    idProfesor integer not null,
    idTema integer not null,
    CONSTRAINT FOREIGN KEY (idProfesor)
        REFERENCES PROFESOR (idProfesor)
        ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (idTema)
        REFERENCES TEMA (idTema)
        ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=INNODB;

CREATE VIEW vCurso AS 
  SELECT * FROM CURSO WHERE dificultad IN ('P','I','A')
  WITH CHECK OPTION;

--Creacion de la tabla para la relacion muchos a muchos
create table INSCRIBE (
    fecha date not null,
    idAlumno integer not null,
    idCurso integer not null,
    CONSTRAINT FOREIGN KEY (idAlumno)
        REFERENCES ALUMNO (idAlumno)
        ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT FOREIGN KEY (idCurso)
        REFERENCES CURSO (idCurso)
        ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT inscribePk PRIMARY KEY (idAlumno,idCurso)
)ENGINE=INNODB;




--SENTENCIAS DML PARA AGREGAR REGISTROS

--REGISTROS EN TEMAS DE CURSOS
INSERT INTO TEMA (temaCurso) VALUES ("Desarrollo web");		--1
INSERT INTO TEMA (temaCurso) VALUES ("Diseño web");			--2
INSERT INTO TEMA (temaCurso) VALUES ("Ciberseguridad");		--3
INSERT INTO TEMA (temaCurso) VALUES ("Programación móvil");	--4

--REGISTROS DE PROFESORES
INSERT INTO vprofesor (gradoEstudios, nombrePila, apellidoPaterno, apellidoMaterno, calle, ciudad) values ('L', "Alejandro", "Vigi", "Garduño", "Moneda", "CDMX"); 	--1
INSERT INTO vprofesor (gradoEstudios, nombrePila, apellidoPaterno, apellidoMaterno, calle, ciudad) values ('L', "Marco", "Sanchez", "Perez", "Torres", "CDMX");		--2
INSERT INTO vprofesor (gradoEstudios, nombrePila, apellidoPaterno, apellidoMaterno, calle, ciudad) values ('M', "Roberto", "Aguilar", "Ponce", "Roca", "Morelos");	--3
INSERT INTO vprofesor (gradoEstudios, nombrePila, apellidoPaterno, apellidoMaterno, calle, ciudad) values ('M', "Hugo", "Roman", "Cruz", "Roma", "Nayarit");		--4

--REGISTROS DE ALUMNOS
INSERT INTO alumno (metodoPago, edad, nombrePila, apellidoPaterno, apellidoMaterno) VALUES ("Efectivo", 23, "Miguel", "Rodriguez", "Luna");							--1
INSERT INTO alumno (metodoPago, edad, nombrePila, apellidoPaterno) VALUES ("Credito", 20, "Rodrigo", "Ramirez");													--2
INSERT INTO alumno (metodoPago, edad, nombrePila, apellidoPaterno) VALUES ("Efectivo", 25, "Francisco", "Garcia");													--3
INSERT INTO alumno (metodoPago, edad, nombrePila, apellidoPaterno) VALUES ("Efectivo", 19, "Alan", "Salazar");														--4
INSERT INTO alumno (metodoPago, edad, nombrePila, apellidoPaterno, apellidoMaterno) VALUES ("Credito", 24, "Erick", "Calvillo", "Martinez");						--5

--REGISTRO DE CURSOS
INSERT INTO curso (descripcion, nombreCurso, dificultad, idProfesor, idTema) VALUES ("Curso con acercamiento en HTML y CSS", "Introduccion a HTML y CSS", 'P', 1, 2);				--1
INSERT INTO curso (descripcion, nombreCurso, dificultad, idProfesor, idTema) VALUES ("Curso completo sobre PHP y Javascript", "PHP y Javascript de cero a experto", 'A', 3, 1);		--2
INSERT INTO curso (descripcion, nombreCurso, dificultad, idProfesor, idTema) VALUES ("Curso de redes y seguridad intermedio", "Redes de datos seguras", 'I', 2, 3);					--3
INSERT INTO curso (descripcion, nombreCurso, dificultad, idProfesor, idTema) VALUES ("Curso de programacion movil en android", "Programacion Android", 'I', 4, 4);					--4

--REGISTRO DE INSCRIBE
INSERT INTO inscribe (fecha, idAlumno, idCurso) VALUES ("2021-11-20", 5, 1);
INSERT INTO inscribe (fecha, idAlumno, idCurso) VALUES ("2022-01-10", 2, 2);
INSERT INTO inscribe (fecha, idAlumno, idCurso) VALUES ("2021-04-15", 1, 3);
INSERT INTO inscribe (fecha, idAlumno, idCurso) VALUES ("2020-08-26", 3, 4);
INSERT INTO inscribe (fecha, idAlumno, idCurso) VALUES ("2021-07-03", 4, 1);


--CREACION DE LA TABLA PARA FORMULARIOS
CREATE table FORMULARIO (
	correo varchar(50) not null,
	nombres varchar (50) not null,
	apellidos varchar (50) not null,
	comentario varchar (300) not null
)ENGINE=INNODB;