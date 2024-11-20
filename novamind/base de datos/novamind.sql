create database novamind;

use novamind;

/*Creacion de tablas*/

create table usuarios(
	idUsuario integer not null auto_increment,
	nombre char(30),
	apPaterno char(30),
	apMaterno char(30),
	nombreUsuario varchar (50),
	correo varchar(50),
	password varchar(50),
	fechaNacimiento date,
	imagenPerfil varchar(30),
	recibirOferta boolean,
	fechaRegistro date,
	primary key (idUsuario)
)


create table cursos(
	idCurso integer not null auto_increment,
	nombre char (30),
	descripcion text,
	nivel enum('Básico', 'Intermedio', 'Avanzado'),
	estado enum('Activo', 'Inactivo'),
	duracionHoras numeric(3),
	fechaPublicacion date,
	costo decimal(10, 2),
	fechaInicio date,
	primary key(idCurso),
	idInstructor integer ,
	idCategoria integer 
)

create table progresoUsuario(
	idProgreso integer not null auto_increment,
	estado enum('Activo', 'Inactivo'),
	fechaInicio date,
	fechaFin date,
	primary key(idProgreso),
	idUsuario integer,
	idCurso integer 
)

create table tipoLeccion(
	idTipoLeccion integer not null auto_increment,
	tipoLeccion char(20),
	primary key(idTipoLeccion)
)

create table evaluaciones(
	idEvaluacion integer not null auto_increment,
	tipo char(20),
	feedback text,
	calificacion decimal (5,2),
	primary key(idEvaluacion),
	idInstructor integer ,
	idCurso integer
)

create table interacciones(
	idInteraccion integer not null auto_increment,
	comentario text,
	fechaInteraccion date,
	tipo char(20),
	hora time,
	primary key(idInteraccion),
	idUsuario integer ,
	idCurso integer 
)


create table autenticacion(
	idAutenticacion integer not null auto_increment,
	tokenSesion text,
	estadoSesion enum('Activo', 'Inactivo'),
	fechaInicioSesion date,
	fechaFinSesion date,
	primary key(idAutenticacion),
	idUsuario integer 
)

create table preguntas(
	idPregunta integer not null auto_increment,
	pregunta text,
	respuestaCorrecta text,
	primary key (idPregunta),
	idEvaluacion integer
)

create table categorias(
	idCategoria integer not null auto_increment,
	nombre char (30),
	primary key (idCategoria)
)

create table lecciones(
	idLeccion integer not null auto_increment,
	nombre char(30),
	descripcion text,
	imagen varchar(30),
	primary key(idLeccion),
	idTipoLeccion integer ,
	idCurso integer 
)


create table instructores(
	idInstructor integer not null auto_increment,
	nombre char(30),
	apPaterno char(30),
	apMaterno char(30),
	correo varchar(50),
	telefono varchar(20),
	especialidad text,
	estatus enum('Activo', 'Inactivo'),
	primary key(idInstructor),
	idCategoria integer 
)

create table certificaciones(
	idCertificacion integer not null auto_increment,
	fechaCertificado date,
	primary key(idCertificacion),
	idUsuario integer,
	idCurso integer ,
	idProgreso integer 
)

create table pagos(
	idPago integer not null auto_increment,
	monto decimal (10, 2),
	metodoPago text,
	fechaPago date,
	primary key(idPago),
	idUsuario integer ,
	idCurso integer 
)

create table soporte(
	idSoporte integer not null auto_increment,
	asunto text,
	mensaje text,
	fechaSolicitud date,
	fechaCompletado date,
	estado enum('Pendiente', 'En proceso', 'Resuelto'),
	respuesta text,
	primary key (idSoporte),
	idUsuario integer ,
	idCurso integer 
)


/*Asignar llaves foraneas*/

alter table cursos
add constraint fk_cursos_instructor foreign key (idInstructor) references instructores(idInstructor),
add constraint fk_cursos_categoria foreign key (idCategoria) references categorias(idCategoria);

alter table progresoUsuario
add constraint fk_progreso_usuario foreign key (idUsuario) references usuarios(idUsuario),
add constraint fk_progreso_curso foreign key (idCurso) references cursos(idCurso);

alter table evaluaciones
add constraint fk_evaluaciones_instructor foreign key (idInstructor) references instructores(idInstructor),
add constraint fk_evaluaciones_curso foreign key (idCurso) references cursos(idCurso);

alter table interacciones
add constraint fk_interacciones_usuario foreign key (idUsuario) references usuarios(idUsuario),
add constraint fk_interacciones_curso foreign key (idCurso) references cursos(idCurso);

alter table autenticacion
add constraint fk_autenticacion_usuario foreign key (idUsuario) references usuarios(idUsuario);

alter table preguntas
add constraint fk_preguntas_evaluacion foreign key (idEvaluacion) references evaluaciones(idEvaluacion);

alter table lecciones
add constraint fk_lecciones_tipo foreign key (idTipoLeccion) references tipoLeccion(idTipoLeccion),
add constraint fk_lecciones_curso foreign key (idCurso) references cursos(idCurso);

alter table instructores
add constraint fk_instructores_categoria foreign key (idCategoria) references categorias(idCategoria);

alter table certificaciones
add constraint fk_certificaciones_usuario foreign key (idUsuario) references usuarios(idUsuario),
add constraint fk_certificaciones_curso foreign key (idCurso) references cursos(idCurso),
add constraint fk_certificaciones_progreso foreign key (idProgreso) references progresoUsuario(idProgreso);

alter table pagos
add constraint fk_pagos_usuario foreign key (idUsuario) references usuarios(idUsuario),
add constraint fk_pagos_curso foreign key (idCurso) references cursos(idCurso);

alter table soporte
add constraint fk_soporte_usuario foreign key (idUsuario) references usuarios(idUsuario),
add constraint fk_soporte_curso foreign key (idCurso) references cursos(idCurso);


/*Seleccionar tablas*/

select * from autenticacion a ;
select * from categorias c ;
select * from certificaciones c ;
select * from cursos c ;
select * from evaluaciones e ;
select * from instructores i ;
select * from interacciones i ;
select * from lecciones l ;
select * from pagos p ;
select * from preguntas p ;
select * from progresousuario p ;
select * from soporte s ;
select * from tipoleccion t ;
select * from usuarios u ;



/*Insertar datos*/











