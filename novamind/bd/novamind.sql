create database novamind;

drop database novamind;

use novamind;

/*Creacion de tablas*/

create table users(
	idUser integer not null auto_increment,
	name char(30),
	ap char(30),
	am char(30),
	username varchar (50),
	email varchar(50),
	password varchar(100),
	birthDate date,
	profileImage varchar(30),
	recieveOffers boolean,
	registrationDate date,
	primary key (idUser)
);

create table courses(
	idCourse integer not null auto_increment,
	name char (30),
	description text,
	level tinyint,
	status boolean,
	durationHours numeric(3),
	publicationDate date,
	cost decimal(10, 2),
	startDate date,
	idInstructor integer,
	idCategory integer,
	primary key(idCourse),
	foreign key (idInstructor) references instructors(idInstructor),
    foreign key (idCategory) references categories(idCategory)
);

create table lessons(
	idLesson integer not null auto_increment,
	name char(30),
	description text,
	image varchar(30),
	idLessonType integer,
	idCourse integer,
	primary key(idLesson),
	foreign key (idLessonType) references lessonTypes(idLessonType),
    foreign key (idCourse) references courses(idCourse)
);

create table lessonTypes(
	idLessonType integer not null auto_increment,
	lessonType char(20),
	primary key(idLessonType)
);

create table categories(
	idCategory integer not null auto_increment,
	name char (30),
	primary key (idCategory)
);

create table instructors(
	idInstructor integer not null auto_increment,
	phone varchar(20),
	speciality text,
	status boolean,
	idUser integer not null,
	primary key(idInstructor),
    foreign key (idUser) references users(idUser)
);

create table categoryInstructors(
	idCategory integer, 
	idInstructor integer,
	foreign key (idCategory) references categories(idCategory),
	foreign key (idInstructor) references instrutors(idInstructor)
);

create table usersProgress(
	idProgress integer not null auto_increment,
	status boolean,
	startDate datetime,
	endDate datetime,
	idUser integer,
	idCourse integer,
	progress int,
	primary key(idProgress),
	foreign key (idUser) references users(idUser),
    foreign key (idCourse) references courses(idCourse)
);

create table evaluations(
	idEvaluation integer not null auto_increment,
	type char(20),
	feedback text,
	grade decimal (5,2),
	idUser integer,
	idCourse integer,
	primary key(idEvaluation),
	foreign key (idUser) references users(idUser),
    foreign key (idCourse) references courses(idCourse)
);

create table questions(
	idQuestion integer not null auto_increment,
	question text,
	type char(20),
	correctAnswer text,
	idEvaluation integer,
	primary key (idQuestion),
	foreign key (idEvaluation) references evaluations(idEvaluation)
);

create table options(
	idOption integer not null auto_increment,
	optionText text,
	isCorrect boolean,
	idQuestion integer,
	primary key (idOption),
	foreign key (idQuestion) references questions(idquestion) 
);

create table certifications(
	idCertification integer not null auto_increment,
	certificationDate date,
	primary key(idCertification),
	idUser integer,
	idCourse integer,
	idProgress integer,
	foreign key (idUser) references users(idUser),
    foreign key (idCourse) references courses(idCourse),
    foreign key (idProgress) references usersProgress(idProgress)
);

create table interactionsLessons(
	idInteractionLesson integer not null auto_increment,
	comment text,
	interactionDate date,
	type char(20),
	time time,
	idUser integer,
	idLesson integer,
	primary key(idInteractionLesson),
	foreign key (idUser) references users(idUser),
    foreign key (idLesson) references lessons(idLesson)
);

create table interactionsCourses(
	idInteractionCourse integer not null auto_increment,
	comment text,
	interactionDate date,
	type char(20),
	time time,
	idCourse integer,
	idUser integer,
	primary key(idInteractionCourse),
	foreign key (idCourse) references lessons(idCourse),
	foreign key (idUser) references users(idUser)
);

create table autentication(
	idAutentication integer not null auto_increment,
	sessionToken text,
	sessionStatus boolean,
	sessionStart datetime,
	sessionEnd datetime,
	idUser integer,
	primary key(idAutentication),
	foreign key (idUser) references users(idUser)
);

create table payments(
	idPayment integer not null auto_increment,
	amount decimal (10, 2),
	amountPaid decimal(10,2),
	paymentMethod text,
	paymentDate datetime,
	idUser integer,
	idCourse integer,
	primary key(idPayment),
	foreign key (idUser) references users(idUser),
    foreign key (idCourse) references courses(idcourse)
);

create table support(
	idSupport integer not null auto_increment,
	subject text,
	message text,
	requestDate date,
	completionDate date,
	status enum('Pendiente', 'En proceso', 'Resuelto'),
	response text,
	idUserIssuer integer,
	idUserResponder integer,
	idCourse integer,
	primary key (idSupport),
	foreign key (idUserIssuer) references users(idUser),
    foreign key (idUserResponder) references users(idUser),
    foreign key (idCourse) references courses(idCourse)
);

/*Seleccionar tablas*/



/*Insertar datos*/

insert into users values (0, 'Pamela', 'Garcia', 'Tarelo', 'admin', 'admin123@gmail.com',
'1234', '2004-11-18', 'default.jpg', '1', '2024-11-21')
select * from users where email = 'admin123@gmail.com' and password = '1234';
