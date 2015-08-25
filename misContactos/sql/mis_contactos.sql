
CREATE database mis_contactos;
USE mis_contactos;
create table contactos(
 email varchar(50) not null,
 nombre varchar(50) not null,
 sexo char(1),
 nacimiento date,
 telefono varchar(13),
 pais varchar(50) not null,
 imagen varchar(50),
 primary key(email),
 fulltext key buscador(email,nombre,sexo,telefono,pais,imagen)
)engine=MyISAM DEFAULT CHARSET=latin1;
create table pais(
	id_pais int not null auto_increment,
	pais varchar(50) not null,
	primary key(id_pais)
)engine=MyISAM DEFAULT CHARSET=latin1;
insert into pais values 
(1,"Mexico"),
(2,"El Salvador"),
(3,"Argentina"),
(4,"Brasil"),
(5,"Honduras"),
(6,"Panama"),
(7,"USA"),
(8,"Guatemala"),
(9,"Panama"),
(10,"Canada")
;
