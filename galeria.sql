# Host: localhost  (Version 8.0.21)
# Date: 2020-09-28 10:42:11
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "fotos"
#

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "fotos"
#

INSERT INTO `fotos` VALUES (1,'titulo de teste','bolo.jpg'),(2,'titulo teste2','bolo2.jpg');
