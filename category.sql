-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table tokopaedi.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_category_unique` (`name_category`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.categories: ~5 rows (approximately)
REPLACE INTO `categories` (`id`, `created_at`, `updated_at`, `name_category`, `slug`, `img`) VALUES
	(1, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Sembako', 'sembako', 'kategori1.png'),
	(2, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Makanan dan Minuman', 'makanan-dan-minuman', 'kategori2.png'),
	(3, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Peralatan bayi', 'peralatan-bayi', 'kategori3.png'),
	(4, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Alat Rumah Tangga', 'alat-rumah-tangga', 'kategori4.png'),
	(5, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Kesehatan dan Kecantikan', 'kesehatan-dan-kecantikan', 'kategori5.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
