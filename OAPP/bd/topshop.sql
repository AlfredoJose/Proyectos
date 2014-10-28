CREATE TABLE usuarios(
	nombre varchar(100) NULL,
	apellido varchar(100) NULL,
	usuario varchar(10) NULL,
	email varchar(100) NULL,
	clave varchar(100) NULL
	
);



CREATE TABLE anuncios(
	nombre varchar(1000) NOT NULL,
	precio money default '0',
	exsistencias varchar(1000) NOT NULL,
	descipcion varchar(9000) NOT NULL,

	nombre_cliente varchar(1000) NOT NULL,
	email_cliente varchar(1000) NOT NULL,
	telefono_cliente varchar(1000) NOT NULL,
	direcion_cliente varchar(1000) NOT NULL,
	ip varchar(1000) NULL,
	ciudad varchar(100)
);

CREATE TABLE planes_premium(
	nombre varchar(1000) NOT NULL,
	precio money default '0',
	exsistencias varchar(1000) NOT NULL,
	descipcion varchar(9000) NOT NULL,

	nombre_cliente varchar(1000) NOT NULL,
	email_cliente varchar(1000) NOT NULL,
	telefono_cliente varchar(1000) NOT NULL,
	direcion_cliente varchar(1000) NOT NULL,
	ip varchar(1000) NULL
);

INSERT INTO planes_premium (nombre,foto,descripcion,precio) VALUES('Plan OAPP++','','HOPÑLAASKS',1200);
INSERT INTO anuncios(nombre,descripcion,precio,usuario,ip,id,foto,hits) VALUES('His','sdkjsdfksjdfljsdbflsjdbflsjofb','1500','Jgarcia','127.0.1','25','n','1');

--drop table usuarios;
--drop table anuncios;
--truncate table anuncios
--truncate table usuarios
--truncate table planes_premium 
--truncate table logs



ALTER TABLE anuncios ADD foto bytea;
ALTER TABLE anuncios ADD usuario varchar(100);
ALTER TABLE anuncios ADD hits varchar(1000);
ALTER TABLE anuncios ADD foto bytae BINARY;
ALTER TABLE anuncios ADD usuario varchar(100);
ALTER TABLE anuncios ADD itext;
ALTER TABLE anuncios ADD id serial;
ALTER TABLE anuncios ADD yo_soy varchar(100);
ALTER TABLE anuncios ADD estado_articulo varchar(100);
ALTER TABLE usuarios ADD navegador text;
ALTER TABLE usuarios ADD utc text;


ALTER TABLE usuarios ADD anio text;
ALTER TABLE usuarios ADD mes text;
ALTER TABLE usuarios ADD dia text;
ALTER TABLE usuarios ADD hora text;
ALTER TABLE usuarios ADD minuto text;
ALTER TABLE usuarios ADD segundo text;

ALTER TABLE usuarios ADD tel text;


INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Vaso Portatil','El mejor vaso','1500','20','');
INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');INSERT INTO anuncios(nombre,descripcion,precio,existencias,foto) VALUES ('Portatil','El mejorasdasdasdasdvaso','150','2','');

