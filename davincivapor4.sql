# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-10-04 19:51:54
# Generator: MySQL-Front 6.1  (Build 1.0)


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
#
# Data for table "articulos"
#

INSERT INTO `articulos` VALUES (1,'Avenger',4,1,6,5960,'fdafa',1,'avenger'),(2,'Avenger Tank',4,1,7,2500,'asdfasdf',1,'avengertank'),(3,'Drag',3,2,6,4500,'asdfasdf',1,'drag'),(4,'I Priv',1,2,6,6950,'asdfasdf',1,'ipriv'),(5,'Mojo',3,2,5,4000,'asdfasdf',1,'mojo'),(6,'Nrg Tank',2,1,7,2500,'asdfasdf',1,'nrgtank'),(7,'Revenger',2,2,6,3500,'asdfafdgdzga',1,'revenger'),(8,'Saber',4,2,5,2200,'adfg',1,'saber'),(9,'Tfv12',1,1,7,1540,'afdga',1,'tfv12'),(10,'Uforce',3,1,7,1800,'fdgafdg',1,'uforce'),(11,'Vape Pen 22',1,2,5,2600,'adfg',1,'vapepen22'),(12,'Veco',2,2,5,2400,'adfg',1,'veco'),(13,'Coil Smok TFV8',1,4,7,250,'fdsfdsfdsfdsfs',1,'coiltfv8'),(14,'Coil Smok TFV12',1,4,7,600,'fsdw432324rerer',1,'coiltfv12'),(15,'Coil Vaporesso Nrg',2,4,7,600,'qwertyhnbvs',1,'coilnrg'),(16,'Coil Avenger ',4,4,7,750,'euwhfyubfyu',1,'coilavenger'),(17,'Element Serie Tradicional',5,3,3,1100,'UHEYWENWQI',1,'element6mg'),(18,'Element Serie Tradicional',5,3,2,1100,'fesererwe',1,'element3mg'),(19,'Element Serie Tradicional',5,3,1,1100,'erewrewrewrew',1,'element0mg'),(20,'Element Serie Tradicional',5,3,4,1100,'erewrewrewrew',1,'element12mg');

#
# Structure for table "categoria"
#

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
#
# Data for table "marca"
#

INSERT INTO `marca` VALUES (1,'SMOK'),(2,'VAPORESSO'),(3,'VOOPOO'),(4,'IJOY'),(5,'ELEMENT'),(6,'NASTY'),(7,'PALERMO VAPORS');

#
# Structure for table "subcategoria"
#

CREATE TABLE `subcategoria` (
  `ID_Subcategoria` int(11) NOT NULL,
  `Subcategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Subcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
#
# Data for table "subcategoria"
#

INSERT INTO `subcategoria` VALUES (1,'0mg'),(2,'3mg'),(3,'6mg'),(4,'12mg'),(5,'STARTER KITS'),(6,'FULL MOD'),(7,'COMERCIALES'),(8,'ARTESANAL');
