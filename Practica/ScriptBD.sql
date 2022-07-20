create database prueba;

use prueba;
create table Usuario(
idUsuario varchar(10) not null,
nombre varchar(50) not null,
apellidoPaterno varchar(50) not null,
apellidoMaterno varchar (50) not null,
sexo char(1) not null,
email varchar(100) not null,
telefono varchar(12) not null,
contrasena varchar(255) not null
);

alter table Usuario 
add constraint pk_Usuario primary key(idUsuario);


insert into Usuario values ('18010378','Jesús Fernando', 'Espinosa', 'Mondragón', 'H','jespinosa378@accitesz.com','351-158-5144','Hola.123' );
insert into Usuario values ('18010379','Francisco', 'López', 'Villanueva', 'H','flopez379@accitesz.com','351-168-5174','Hola.123' );

select*from Usuario where (idUsuario like '18010378' or email like 'jespinosa378@accitesz.com') and contrasena like 'Hola.123';