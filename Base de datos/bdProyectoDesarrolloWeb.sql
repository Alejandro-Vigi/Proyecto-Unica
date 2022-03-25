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