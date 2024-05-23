create database sistema;
use sistema;

create table usuarios
(
    idUsuario        int  primary key auto_increment,
    login            varchar(20),
    password        varchar(50),
    nombre            varchar(50)
);
select * from usuarios;

insert into usuarios values(null, 'mar y ana', sha1('211105'), 'Erika Mariana');
insert into usuarios values(null, 'ibone', sha1('1212'), 'Ivonne Itzel');
insert into usuarios values(null, 'One', sha1('tontosTodos'), 'Maytee Nataly');
insert into usuarios values(null, 'Joshi', sha1('rafita06'), 'Josue Rafael');
insert into usuarios values(null, 'pilin', sha1('pilin12'), 'Sebastian');
insert into usuarios values(null, 'brokas', sha1('TontoELqueLoleea'), 'Alfredo Nava');
insert into usuarios values(null, 'jose', sha1('pastelitos'), 'Angel');
insert into usuarios values(null, 'chupirul', sha1('elcupirul1'), 'Guadalupe');
insert into usuarios values(null, 'chavas', sha1('chava123'), 'Salvador');
insert into usuarios values(null, 'papita2000', sha1('papita3mil'), 'Leonardo');
insert into usuarios values(null, 'FazePlatanito', sha1('aguacate23'), 'Tomas');
insert into usuarios values(null, 'misterTilin', sha1('alexisPro'), 'Alexis');
insert into usuarios values(null, 'Juan', sha1('pacman2056'), 'Eduardo');
insert into usuarios values(null, 'Dlywax', sha1('Dylan14108809'), 'Dylan Osmar');
insert into usuarios values(null, 'me encanta Lula', sha1('123456789'), 'Hector Andrey');
insert into usuarios values(null, 'furina', sha1('19289'), 'Abraham');
insert into usuarios values(null, 'german1', sha1('german2'), 'Gustavo');
insert into usuarios values(null, 'alfa14', sha1('polloconpapas123'), 'Miguel Angel');


create table alumnos
(
    matricula varchar(8) primary key ,
    apellidos varchar(40),
    nombre varchar(40),
    fecha_nacimiento datetime,
    direccion varchar(50),
    telefono varchar(15),
    correo varchar(30),
    tutor varchar(70)
);
insert into alumnos values(898,'Alvarez Rosiles','Erika Mariana','2006-05-20','Dalia#150','445-117-0480', 'marijaegeruwu@gmail.com','Martha');
insert into alumnos values(7598,'Gasca Ruiz','Maytee Nataly','2007-05-31','tecnologico#4',445-224-9380, 'maytegasca@gmail.com','Janet');
insert into alumnos values(30879,'Alvarez Rosiles','Erika Mariana','2006-05-20','Dalia#150',445-117-0480, 'marijaegeruwu@gmail.com','Martha');

select * from usuarios;
select * from alumnos;