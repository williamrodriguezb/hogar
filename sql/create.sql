CREATE DATABASE IF NOT EXISTS hogar;
USE hogar;


CREATE TABLE usuarios(
	usuario_id		int auto_increment not null,
	usuario 		varchar(100),
	credencial 		varchar(100),
	email 			varchar(100),
	apellidos 		varchar(100),
	nombres 		varchar(100),
	foto			varchar(255),
	f_nacimiento 	date,
	role			varchar(50),
	estado 			varchar(50),
	creado			TIMESTAMP default CURRENT_TIMESTAMP,

	CONSTRAINT pk_usuario PRIMARY KEY(usuario_id)


)ENGINE=InnoDb ;
CREATE TABLE hogar(
	hogar_id		integer auto_increment not null,
	usuario_id		int,
	nombre 		    varchar(255),
	creado			TIMESTAMP default CURRENT_TIMESTAMP,

	CONSTRAINT		pk_hogar PRIMARY KEY(hogar_id),
	CONSTRAINT      fk_hogar_usuarios FOREIGN KEY(usuario_id) references usuarios(usuario_id)
)ENGINE=InnoDb ;
