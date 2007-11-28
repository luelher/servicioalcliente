-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.18-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema servicios
--

CREATE DATABASE IF NOT EXISTS servicios;
USE servicios;

--
-- Definition of table `acciones`
--

DROP TABLE IF EXISTS `acciones`;
CREATE TABLE `acciones` (
  `servicios_id` int(10) unsigned NOT NULL,
  `accion` varchar(1000) NOT NULL,
  `fecha` datetime NOT NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acciones`
--

/*!40000 ALTER TABLE `acciones` DISABLE KEYS */;
INSERT INTO `acciones` (`servicios_id`,`accion`,`fecha`,`id`) VALUES 
 (1,'','2007-11-22 00:00:00',1);
/*!40000 ALTER TABLE `acciones` ENABLE KEYS */;


--
-- Definition of table `entregas`
--

DROP TABLE IF EXISTS `entregas`;
CREATE TABLE `entregas` (
  `servicios_id` int(10) unsigned NOT NULL,
  `observacion` varchar(1000) NOT NULL,
  `fecha` datetime NOT NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entregas`
--

/*!40000 ALTER TABLE `entregas` DISABLE KEYS */;
INSERT INTO `entregas` (`servicios_id`,`observacion`,`fecha`,`id`) VALUES 
 (1,'Equipo entregado al Cliente','2007-11-23 00:00:00',1);
/*!40000 ALTER TABLE `entregas` ENABLE KEYS */;


--
-- Definition of table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `cliente` varchar(10) character set latin1 NOT NULL,
  `situacion` varchar(1000) character set latin1 NOT NULL,
  `observacion` varchar(1000) character set latin1 NOT NULL,
  `fecha` datetime NOT NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  `factura` int(10) unsigned NOT NULL,
  `articulo` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicios`
--

/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` (`cliente`,`situacion`,`observacion`,`fecha`,`id`,`factura`,`articulo`) VALUES 
 ('10050356  ','asdkajsdk as iad liadh as hdah','dsf dfhsf hsdfh usdhf sdh fhsd f jsfs jkf','2007-11-28 00:00:00',3,19887,'LV780G                        ');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
