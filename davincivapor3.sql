# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-10-04 16:42:57
# Generator: MySQL-Front 6.1  (Build 1.20)


#
# Structure for table "articulos"
#

CREATE TABLE `articulos` (
  `ID_Articulo` int(11) NOT NULL,
  `Nombre_Articulo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `ID_Marca` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `ID_Subcategoria` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Articulo_Descripcion` longtext COLLATE latin1_spanish_ci NOT NULL,
  `Habilitado` int(11) DEFAULT NULL,
  `Imgname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Articulo`),
  KEY `id_marca` (`ID_Marca`),
  KEY `id_categoria` (`ID_Categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "articulos"
#

INSERT INTO `articulos` VALUES (1,'Avenger',4,2,6,5960,'fdafa',1,'avenger.jpg'),(2,'Avenger Tank',4,1,7,2500,'asdfasdf',1,'avengertank.jpg'),(3,'Drag',3,2,6,4500,'asdfasdf',1,'drag.jpg'),(4,'I Priv',1,2,6,6950,'asdfasdf',1,'ipriv.jpg'),(5,'Mojo',3,2,5,4000,'asdfasdf',1,'mojo.jpg'),(6,'Nrg Tank',2,1,7,2500,'asdfasdf',1,'nrgtank.jpg'),(7,'Revenger',2,2,6,3500,'asdfafdgdzga',1,'revenger.jpg'),(8,'Saber',4,2,5,2200,'adfg',1,'saber.jpg'),(9,'Tfv12',1,1,7,1540,'afdga',1,'tfv12.jpg'),(10,'Uforce',3,1,7,1800,'fdgafdg',1,'uforce.jpg'),(11,'Vape Pen 22',1,2,5,2600,'adfg',1,'vapepen22.jpg'),(12,'Veco',2,2,5,2400,'adfg',1,'veco.jpg');

#
# Structure for table "categoria"
#

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "categoria"
#

INSERT INTO `categoria` VALUES (1,'ATOMIZADOR'),(2,'MODS'),(3,'LIQUIDOS'),(4,'RESISTENCIAS');

#
# Structure for table "marca"
#

CREATE TABLE `marca` (
  `ID_Marca` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Marca` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_Marca`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "marca"
#

INSERT INTO `marca` VALUES (1,'SMOK'),(2,'VAPORESSO'),(3,'VOOPOO'),(4,'IJOY');

#
# Structure for table "subcategoria"
#

CREATE TABLE `subcategoria` (
  `ID_Subcategoria` int(11) NOT NULL,
  `Subcategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Subcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "subcategoria"
#

INSERT INTO `subcategoria` VALUES (1,'0mg'),(2,'3mg'),(3,'6mg'),(4,'12mg'),(5,'STARTER KITS'),(6,'FULL MOD'),(7,'COMERCIALES'),(8,'ARTESANAL');
