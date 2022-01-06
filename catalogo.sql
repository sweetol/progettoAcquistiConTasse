-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              8.0.27 - MySQL Community Server - GPL
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database catalog
CREATE DATABASE IF NOT EXISTS `catalog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `catalog`;

-- Dump della struttura di tabella catalog.prodotti
CREATE TABLE IF NOT EXISTS `prodotti` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `prezzo_lordo` float unsigned NOT NULL DEFAULT '0',
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descrizione` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_prodotto` int unsigned NOT NULL,
  `imported` enum('Y','N') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_prodotti_tipo_prodotti` (`tipo_prodotto`),
  CONSTRAINT `FK_prodotti_tipo_prodotti` FOREIGN KEY (`tipo_prodotto`) REFERENCES `tipo_prodotti` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dump dei dati della tabella catalog.prodotti: ~9 rows (circa)
/*!40000 ALTER TABLE `prodotti` DISABLE KEYS */;
INSERT INTO `prodotti` (`id`, `prezzo_lordo`, `nome`, `descrizione`, `tipo_prodotto`, `imported`) VALUES
	(1, 14.99, 'Music CD', '', 8, ''),
	(2, 0.85, 'Chocolate Bar', NULL, 3, ''),
	(3, 12.49, 'Book', NULL, 2, ''),
	(4, 10, 'Box of Chocolate', '', 3, 'Y'),
	(5, 47.5, 'Bottle of Perfume', NULL, 9, 'Y'),
	(6, 18.99, 'Bottle of Perfume', NULL, 9, ''),
	(7, 27.99, 'Bottle of Perfume', NULL, 9, 'Y'),
	(8, 9.75, 'Packet of Headache Pills', NULL, 1, ''),
	(9, 11.25, 'Box of Chocolate', NULL, 3, 'Y');
/*!40000 ALTER TABLE `prodotti` ENABLE KEYS */;

-- Dump della struttura di tabella catalog.tipo_prodotti
CREATE TABLE IF NOT EXISTS `tipo_prodotti` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tax` double NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dump dei dati della tabella catalog.tipo_prodotti: ~9 rows (circa)
/*!40000 ALTER TABLE `tipo_prodotti` DISABLE KEYS */;
INSERT INTO `tipo_prodotti` (`id`, `tipo`, `tax`) VALUES
	(1, 'Medical', 0),
	(2, 'Book', 0),
	(3, 'Food', 0),
	(4, 'Toy', 10),
	(5, 'Notebook', 10),
	(6, 'Tv', 10),
	(7, 'Garden', 10),
	(8, 'CD', 10),
	(9, 'Perfume', 10);
/*!40000 ALTER TABLE `tipo_prodotti` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
