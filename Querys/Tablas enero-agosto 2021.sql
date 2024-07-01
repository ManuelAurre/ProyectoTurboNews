
create database BDMM;
use BDMM;

create table usuario(
id_usuario int primary key not null auto_increment,
nickname varchar(40) not null,
user_password varchar(200) not null,
nombres varchar(40) not null,
apellidos varchar(40) not null,
telefono decimal not null,
Email varchar(40) not null,
tipoUsuario int default 0,
fecha date,
imagen Longblob,
activo int default 1,
usuario_ingresa varchar(40)

);

create table noticia(
id_noticia int primary key not null auto_increment,
firma varchar(40) not null,
colonia varchar(40) not null,
ciudad varchar(40) not null,
pais varchar(40) not null,
fecha_acontecimiento date,
creacion datetime default current_timestamp,
titulo varchar(40) not null,
descripcion varchar(400) not null,
imagen Longblob ,
videos Longblob ,
EstadoNota int default 1 comment "1. En redaccion- 2.Terminada- 3.Publicada- 4.Borrada",
activo int default 1,
likes int default 0,
KeyWord varchar(300) comment "palabras clave para buscar la noticia",
id_User int not null, 
FOREIGN KEY (id_User) REFERENCES usuario(id_usuario)

);

create table secciones(
id_secciones int primary key not null auto_increment,
nombre varchar(40) not null,
orden int,
color varchar(40) not null,
activo int default 1

);


create table comentarios(
id_comentarios int primary key not null auto_increment,
cuerpo varchar(40) not null,
id_UserC int not null, 
creacion datetime default current_timestamp,
idNoticiaC int not null,
tipo int default 1,
activo int default 1,
FOREIGN KEY (id_UserC) REFERENCES usuario(id_usuario),
FOREIGN KEY (idNoticiaC) REFERENCES noticia(id_noticia)

);


create table Com_comentarios(
id_comentariosC int primary key,
id_UserCC int not null, 
creacion datetime default current_timestamp,
parent_id int,
idNoticiaCC int not null, 
activoC int default 1,
FOREIGN KEY (id_UserCC) REFERENCES usuario(id_usuario),
FOREIGN KEY (idNoticiaCC) REFERENCES noticia(id_noticia)

);

drop table usuario;
drop table noticia;
drop table secciones;
drop table comentarios;
drop table Com_comentarios;

select * from usuario;
select * from noticia;
select * from comentarios;
select * from Com_comentarios;
select * from secciones;

SELECT * FROM usuario WHERE Email = 'test@hotmail.com';
select id_usuario, nickname, tipoUsuario, activo from usuario;

SELECT *  FROM usuario WHERE tipoUsuario = 1 and activo =1;

UPDATE usuario SET activo = '1' WHERE id_usuario = '1';
UPDATE usuario SET tipoUsuario = '2'  WHERE id_usuario = '1';
update noticia set likes=likes+1 where id_noticia = '1';
update comentarios set activo= 1 where id_comentarios = '7';
SELECT *  FROM usuario WHERE id_usuario = 2;

insert into secciones(nombre,orden,color) Values ('Videojuegos',3,'verde');
update noticia set KeyWord='Deporte' where id_noticia = '5';

ALTER TABLE noticia
ADD control varchar(255);