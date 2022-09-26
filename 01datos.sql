CREATE TABLE `table1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('GLEINER DE JESUS', 'DIAZ MORENO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('GUSTAVO MARIO', 'BELTRÁN GALLEGO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('STEVEN JESUS', 'GUZMÁN ESPITIA', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('JEISON MANUEL', 'RUIZ SOLANO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('JUAN MANUEL', 'PÉREZ LLORENTE', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('JULIAN JESSID', 'WALDO COGOLLO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('JULIAN ERNEY', 'ARATECO SANCHEZ', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ('JOHNATAN ESTEBAN', 'CASTRO PADILLA', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'ELKIN JOSE', 'SIERRA GOMEZ', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'LUIS MIGUEL', 'RAMOS MARQUEZ', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'ENRIQUE MANUEL', 'MESTRA BERROCAL', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'ANGEL MIGUEL', 'TABORDA MIRANDA', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'RODOLFO NO', 'ROHATAN BASSIL', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'LILIANA ANDREA', 'ORTEGA MERCADO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'CRISTIAN JOSE', 'MARTINEZ POLO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'JOSE NICOLAS', 'PEREIRA GALARCIO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'JUAN DANIEL', 'GARCIA CARDOZO', 'Desarrollo Web');
INSERT INTO table1 (nombre, apellido, descripcion) VALUES ( 'JHONATAN', 'BANDA RODRÍGUEZ', 'Desarrollo Web');



CREATE TABLE `table2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idtabla1` int NOT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `nacimiento` datetime DEFAULT NULL,
  `fecha2` date DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IdTabla1_idx` (`idtabla1`),
  CONSTRAINT `IdTabla1_fk` FOREIGN KEY (`idtabla1`) REFERENCES `table1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci


INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('1', 'Hombre', 'bogota', 'NOW()' ,'CURDATE()', '2100','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('2', 'Hombre', 'cali', 'NOW()' ,'CURDATE()', '1000','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('3', 'Mujer', 'cucuta', 'NOW()' ,'CURDATE()', '2000','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('4', 'Hombre', 'monteria', 'NOW()' ,'CURDATE()', '3000','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('5', 'Mujer', 'sincelejo', 'NOW()' ,'CURDATE()', '400','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('6', 'Hombre', 'pasto', 'NOW()' ,'CURDATE()', '500','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('7', 'Hombre', 'medellin', 'NOW()' ,'CURDATE()', '600','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('8', 'Hombre', 'mnteria', 'NOW()' ,'CURDATE()', '700','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('9', 'Hombre', 'barranquilla', 'NOW()' ,'CURDATE()', '800','correo@gmail.com');
INSERT INTO table2 (idtabla1, genero, ciudad, nacimiento ,fecha2, valor, email) 
VALUES ('10', 'Mujer', 'bogota', 'NOW()' ,'CURDATE()', '1100','correo@gmail.com');
