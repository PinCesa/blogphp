# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: itec_test
# Generation Time: 2019-11-18 12:45:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `nombre`)
VALUES
	(1,'PHP'),
	(2,'Java'),
	(3,'Javascript'),
	(4,'Python');

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table publicaciones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `publicaciones`;

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) unsigned DEFAULT NULL,
  `categoria_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_publicaciones_user_id` (`user_id`),
  KEY `fk_publicaciones_categorias_id` (`categoria_id`),
  CONSTRAINT `fk_publicaciones_categorias_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  CONSTRAINT `fk_publicaciones_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;

INSERT INTO `publicaciones` (`id`, `titulo`, `descripcion`, `image`, `creado`, `actualizado`, `user_id`, `categoria_id`)
VALUES
	(1,'Novedades de PHP 7.3','Hoy mientras comía me he visto esta charla de Rasmus Lerdorf (el creador de PHP) en la que habla de las novedades que trae la versión 7.3 de PHP y he decidido resumir en este artículo los principales puntos de la misma:','https://appinventiv.com/wp-content/uploads/sites/1/2018/06/PHP-Frameworks-Guide-Top-10-Best-PHP-Framework-2019.png','2019-11-18 00:27:33','2019-11-18 00:27:33',1,1),
	(2,'Las 3 mejores novedades de Python 3.5','Python 3.4 se lanzó hace más de un año y medio. Y es la versión con más acogida después de la 2.7 que sigue siendo la más usada hasta el momento. Hace unos días se hizo oficial el lanzamiento de Python 3.5.0; que estaba programado originalmente para final','https://library.kissclipart.com/20181208/pwe/kissclipart-python-programming-a-beginners-guide-to-learn-py-c106bf0c27f1f5a5.jpg','2019-11-18 00:32:30','2019-11-18 00:32:30',1,4);

/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `reg_date`, `avatar`)
VALUES
	(1,'jose','perez','4d186321c1a7f0f354b297e8914ab240','j.perez@itecriocuarto.org.ar','2019-11-18 12:42:53','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFpAZq2cySRRYaBLuGkvdWMMEmbUuHK5PWHwW_h3R6iQQKeZqEmg&s');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
