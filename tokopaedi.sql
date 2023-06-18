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

-- Dumping structure for table tokopaedi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tokopaedi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.migrations: ~6 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_06_14_015645_create_categories_table', 1),
	(6, '2023_06_14_020448_create_products_table', 1);

-- Dumping structure for table tokopaedi.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tokopaedi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table tokopaedi.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_product` varchar(255) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.products: ~16 rows (approximately)
REPLACE INTO `products` (`id`, `created_at`, `updated_at`, `name_product`, `category_id`, `slug`, `price`, `image`) VALUES
	(1, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Eveniet est.', 1, 'mollitia-perferendis-ullam-dolorem-numquam-mollitia-ducimus-eos', 616662194, 'Vel vitae earum.'),
	(2, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Enim harum quia.', 1, 'distinctio-qui-veniam-possimus-temporibus', 450374436, 'Ab animi.'),
	(3, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Ad officia.', 1, 'eos-est-amet-aperiam-eveniet', 1032626287, 'Autem laboriosam.'),
	(4, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Facilis nihil.', 1, 'error-natus-vel-est', 1347750249, 'Est debitis sapiente.'),
	(5, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Harum ullam quisquam.', 1, 'ut-magnam-occaecati-voluptatem-enim-minima-itaque', 1026223312, 'Omnis accusamus nisi.'),
	(6, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Voluptatum sed quisquam.', 1, 'id-nam-error-laborum-in-voluptates', 655526806, 'Aut vel occaecati.'),
	(7, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Minus porro.', 1, 'ratione-perferendis-eaque-esse-sit-et-nesciunt-nihil-fuga', 1593843692, 'Minima nobis.'),
	(8, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Accusantium voluptatum.', 1, 'reprehenderit-pariatur-vel-vel-deleniti', 1337548611, 'Facere consequatur deleniti.'),
	(9, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Maxime et.', 1, 'rem-sed-ex-non-voluptas', 299023184, 'Unde natus.'),
	(10, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Deserunt eos sit.', 1, 'rem-et-voluptates-voluptate-ut-omnis', 1271495808, 'Tenetur odit magnam.'),
	(11, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Occaecati veritatis a.', 1, 'ducimus-ad-corrupti-quae-voluptatibus-dolor-sit', 1268060788, 'Et dolorem doloribus.'),
	(12, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Accusantium repellendus non.', 1, 'placeat-eum-omnis-dolores-dolor-consequatur-ut', 2093907486, 'Quo omnis.'),
	(13, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Voluptas officia.', 1, 'id-nulla-nostrum-omnis-et-excepturi-eum-delectus', 1580365117, 'Molestias illum assumenda.'),
	(14, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Sit magnam.', 1, 'eos-rerum-et-voluptate-vitae-accusamus-et', 508468352, 'Consectetur repellendus.'),
	(15, '2023-06-15 06:15:10', '2023-06-15 06:15:10', 'Est nisi.', 1, 'non-quia-nam-ut-consequatur-accusamus-beatae', 1783651830, 'Iure porro.'),
	(16, '2023-06-15 19:30:58', '2023-06-15 19:30:58', 'axekk', 2, 'axekk', 890, 'product-images/cBtpoCgIsAuI3wy2iDjhd8S0ST9ynKid74XjcGeI.jpg');

-- Dumping structure for table tokopaedi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tokopaedi.users: ~4 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Wildan Abdilah', 'wildanabdilah54@gmail.com', 'wildanabdi', NULL, '$2y$10$8rGG/yFtCmwrhxNuz.aeN.AxNX1ZzvPkzBlgLyzEOpMM4mDE/OSZ.', NULL, '2023-06-15 06:15:10', '2023-06-15 06:15:10'),
	(2, 'Ms. Aisha Block DDS', 'fahey.dedrick@example.com', 'pwhite', '2023-06-15 06:15:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B5SC5Qo2Fa', '2023-06-15 06:15:10', '2023-06-15 06:15:10'),
	(3, 'Roselyn Corkery', 'hertha.boyer@example.com', 'stiedemann.gonzalo', '2023-06-15 06:15:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Q4eGbtx4tB', '2023-06-15 06:15:10', '2023-06-15 06:15:10'),
	(4, 'Anabel Keebler Sr.', 'theo35@example.org', 'manuela.harvey', '2023-06-15 06:15:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xpG6jw7f5k', '2023-06-15 06:15:10', '2023-06-15 06:15:10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
