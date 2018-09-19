# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-09-19 13:28:39
# Generator: MySQL-Front 6.1  (Build 1.0)


#
# Structure for table "categoria"
#

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
#
# Data for table "categoria"
#

INSERT INTO `categoria` VALUES (1,'ATOMIZADOR'),(2,'MODS');

#
# Structure for table "marca"
#

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
#
# Data for table "marca"
#

INSERT INTO `marca` VALUES (1,'SMOK'),(2,'VAPORESSO');

#
# Structure for table "articulos"
#

CREATE TABLE `articulos` (
  `id_articulo` int(11) NOT NULL,
  `nombre_articulo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `precio` double NOT NULL,
  `articulo_descripcion` longtext COLLATE latin1_spanish_ci NOT NULL,
  `habilitado` int(11) DEFAULT NULL,
  `imgname` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `id_marca` (`id_marca`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`),
  CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
#
# Data for table "articulos"
#

INSERT INTO `articulos` VALUES (1,'ATOMIZADOR ZEUS',1,1,2500,'LOREM DSAJDNSDHFASBS JDNSAHDBSAH HSDHFBDSAHFSA SDHFBDSFHSHDFUKHDBS SDHFBSDUFBSDUYFBAS',1,'1'),(2,'VAPORESSO REVENGER X',2,2,3800,'JSDANFSAHFISDFOSDYFNSDOUFYF',1,'2'),(3,'SMOK T-PRIV 220W',1,2,4500,'SFANDSDYNFUYSDFIDSHFSDIF',1,'3');
