-- --------------------------------------------------------
-- Host:                         103.193.178.81
-- Versi server:                 8.0.41-0ubuntu0.20.04.1 - (Ubuntu)
-- OS Server:                    Linux
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table etiketferry.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.failed_jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table etiketferry.hargas
CREATE TABLE IF NOT EXISTS `hargas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vip` bigint NOT NULL,
  `ekonomi` bigint NOT NULL,
  `mobil_standar` bigint NOT NULL,
  `mobil_truk` bigint NOT NULL,
  `motor` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.hargas: ~1 rows (lebih kurang)
REPLACE INTO `hargas` (`id`, `vip`, `ekonomi`, `mobil_standar`, `mobil_truk`, `motor`, `created_at`, `updated_at`) VALUES
	(7, 0, 11000, 65000, 162000, 39000, '2024-08-26 20:28:02', '2024-10-25 14:44:10');

-- membuang struktur untuk table etiketferry.histories
CREATE TABLE IF NOT EXISTS `histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tiket_id` bigint NOT NULL,
  `jenis_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `metode_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `bukti_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.histories: ~72 rows (lebih kurang)
REPLACE INTO `histories` (`id`, `tiket_id`, `jenis_pembayaran`, `metode_pembayaran`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
	(1, 1, 'tunai', 'manual', NULL, '2024-10-25 12:13:44', '2024-10-25 12:13:44'),
	(2, 2, 'tunai', 'manual', NULL, '2024-10-25 12:16:26', '2024-10-25 12:16:26'),
	(3, 3, 'tunai', 'manual', NULL, '2024-10-25 15:55:37', '2024-10-25 15:55:37'),
	(4, 4, 'tunai', 'manual', NULL, '2024-10-30 11:46:14', '2024-10-30 11:46:14'),
	(5, 5, 'tunai', 'manual', NULL, '2024-10-30 11:59:06', '2024-10-30 11:59:06'),
	(6, 6, 'tunai', 'manual', NULL, '2024-10-30 12:03:49', '2024-10-30 12:03:49'),
	(7, 7, 'tunai', 'manual', NULL, '2024-10-31 04:00:14', '2024-10-31 04:00:14'),
	(8, 8, 'tunai', 'manual', NULL, '2024-10-31 04:03:30', '2024-10-31 04:03:30'),
	(9, 9, 'tunai', 'manual', NULL, '2024-11-11 08:03:40', '2024-11-11 08:03:40'),
	(10, 10, 'tunai', 'manual', NULL, '2024-11-15 09:50:18', '2024-11-15 09:50:18'),
	(11, 11, 'tunai', 'manual', NULL, '2024-11-15 09:50:22', '2024-11-15 09:50:22'),
	(12, 12, 'tunai', 'manual', NULL, '2024-11-15 10:06:02', '2024-11-15 10:06:02'),
	(13, 13, 'tunai', 'manual', NULL, '2024-11-30 01:18:55', '2024-11-30 01:18:55'),
	(14, 14, 'tunai', 'manual', NULL, '2024-11-30 01:19:10', '2024-11-30 01:19:10'),
	(15, 15, 'tunai', 'manual', NULL, '2024-11-30 01:19:12', '2024-11-30 01:19:12'),
	(16, 16, 'tunai', 'manual', NULL, '2024-11-30 01:19:13', '2024-11-30 01:19:13'),
	(17, 17, 'tunai', 'manual', NULL, '2024-11-30 01:19:16', '2024-11-30 01:19:16'),
	(18, 18, 'tunai', 'manual', NULL, '2024-11-30 01:19:17', '2024-11-30 01:19:17'),
	(19, 19, 'tunai', 'manual', NULL, '2024-11-30 01:19:18', '2024-11-30 01:19:18'),
	(20, 20, 'tunai', 'manual', NULL, '2024-11-30 01:19:19', '2024-11-30 01:19:19'),
	(21, 21, 'tunai', 'manual', NULL, '2024-11-30 01:19:20', '2024-11-30 01:19:20'),
	(22, 22, 'tunai', 'manual', NULL, '2024-11-30 01:19:22', '2024-11-30 01:19:22'),
	(23, 23, 'tunai', 'manual', NULL, '2024-11-30 01:19:24', '2024-11-30 01:19:24'),
	(24, 24, 'tunai', 'manual', NULL, '2024-11-30 01:19:25', '2024-11-30 01:19:25'),
	(25, 25, 'tunai', 'manual', NULL, '2024-11-30 01:19:26', '2024-11-30 01:19:26'),
	(26, 26, 'tunai', 'manual', NULL, '2024-11-30 01:19:27', '2024-11-30 01:19:27'),
	(27, 27, 'tunai', 'manual', NULL, '2024-11-30 01:19:28', '2024-11-30 01:19:28'),
	(28, 28, 'tunai', 'manual', NULL, '2024-11-30 01:19:31', '2024-11-30 01:19:31'),
	(29, 29, 'tunai', 'manual', NULL, '2024-11-30 01:19:32', '2024-11-30 01:19:32'),
	(30, 30, 'tunai', 'manual', NULL, '2024-11-30 01:19:35', '2024-11-30 01:19:35'),
	(31, 31, 'tunai', 'manual', NULL, '2024-11-30 01:19:36', '2024-11-30 01:19:36'),
	(32, 32, 'tunai', 'manual', NULL, '2024-11-30 01:19:37', '2024-11-30 01:19:37'),
	(33, 33, 'tunai', 'manual', NULL, '2024-11-30 01:19:38', '2024-11-30 01:19:38'),
	(34, 34, 'tunai', 'manual', NULL, '2024-11-30 01:19:39', '2024-11-30 01:19:39'),
	(35, 35, 'tunai', 'manual', NULL, '2024-11-30 01:19:40', '2024-11-30 01:19:40'),
	(36, 36, 'tunai', 'manual', NULL, '2024-11-30 01:19:41', '2024-11-30 01:19:41'),
	(37, 37, 'tunai', 'manual', NULL, '2024-11-30 01:19:43', '2024-11-30 01:19:43'),
	(38, 38, 'tunai', 'manual', NULL, '2024-11-30 01:19:44', '2024-11-30 01:19:44'),
	(39, 39, 'tunai', 'manual', NULL, '2024-11-30 01:19:45', '2024-11-30 01:19:45'),
	(40, 40, 'tunai', 'manual', NULL, '2024-11-30 01:19:46', '2024-11-30 01:19:46'),
	(41, 41, 'tunai', 'manual', NULL, '2024-11-30 01:19:47', '2024-11-30 01:19:47'),
	(42, 42, 'tunai', 'manual', NULL, '2024-11-30 01:19:48', '2024-11-30 01:19:48'),
	(43, 43, 'tunai', 'manual', NULL, '2024-11-30 01:19:49', '2024-11-30 01:19:49'),
	(44, 44, 'tunai', 'manual', NULL, '2024-11-30 01:19:50', '2024-11-30 01:19:50'),
	(45, 45, 'tunai', 'manual', NULL, '2024-11-30 01:19:51', '2024-11-30 01:19:51'),
	(46, 46, 'tunai', 'manual', NULL, '2024-11-30 01:19:52', '2024-11-30 01:19:52'),
	(47, 47, 'tunai', 'manual', NULL, '2024-11-30 01:55:04', '2024-11-30 01:55:04'),
	(48, 48, 'tunai', 'manual', NULL, '2024-12-03 05:12:51', '2024-12-03 05:12:51'),
	(49, 49, 'tunai', 'manual', NULL, '2024-12-31 05:40:56', '2024-12-31 05:40:56'),
	(50, 50, 'tunai', 'manual', NULL, '2024-12-31 05:48:50', '2024-12-31 05:48:50'),
	(51, 51, 'tunai', 'manual', NULL, '2024-12-31 05:56:22', '2024-12-31 05:56:22'),
	(52, 52, 'tunai', 'manual', NULL, '2025-01-25 05:45:46', '2025-01-25 05:45:46'),
	(53, 53, 'tunai', 'manual', NULL, '2025-01-25 05:45:49', '2025-01-25 05:45:49'),
	(54, 54, 'tunai', 'manual', NULL, '2025-02-01 06:45:24', '2025-02-01 06:45:24'),
	(55, 55, 'tunai', 'manual', NULL, '2025-02-01 06:55:16', '2025-02-01 06:55:16'),
	(56, 56, 'tunai', 'manual', NULL, '2025-02-01 07:07:40', '2025-02-01 07:07:40'),
	(57, 57, 'tunai', 'manual', NULL, '2025-02-01 07:53:36', '2025-02-01 07:53:36'),
	(58, 58, 'tunai', 'manual', NULL, '2025-02-01 11:55:42', '2025-02-01 11:55:42'),
	(59, 59, 'tunai', 'manual', NULL, '2025-02-03 00:00:33', '2025-02-03 00:00:33'),
	(60, 60, 'tunai', 'manual', NULL, '2025-02-06 01:08:21', '2025-02-06 01:08:21'),
	(61, 61, 'tunai', 'manual', NULL, '2025-02-06 01:12:38', '2025-02-06 01:12:38'),
	(62, 62, 'tunai', 'manual', NULL, '2025-02-07 04:22:47', '2025-02-07 04:22:47'),
	(63, 63, 'tunai', 'manual', NULL, '2025-02-07 05:20:35', '2025-02-07 05:20:35'),
	(64, 64, 'tunai', 'manual', NULL, '2025-02-07 05:21:28', '2025-02-07 05:21:28'),
	(65, 65, 'tunai', 'manual', NULL, '2025-02-07 05:21:30', '2025-02-07 05:21:30'),
	(66, 66, 'tunai', 'manual', NULL, '2025-02-07 05:26:27', '2025-02-07 05:26:27'),
	(67, 67, 'tunai', 'manual', NULL, '2025-02-07 05:34:20', '2025-02-07 05:34:20'),
	(68, 68, 'tunai', 'manual', NULL, '2025-02-07 07:06:45', '2025-02-07 07:06:45'),
	(69, 69, 'tunai', 'manual', NULL, '2025-02-07 13:57:32', '2025-02-07 13:57:32'),
	(70, 70, 'tunai', 'manual', NULL, '2025-02-08 02:47:00', '2025-02-08 02:47:00'),
	(71, 71, 'tunai', 'manual', NULL, '2025-02-09 17:37:58', '2025-02-09 17:37:58'),
	(72, 72, 'tunai', 'manual', NULL, '2025-02-10 06:26:42', '2025-02-10 06:26:42'),
	(73, 73, 'tunai', 'manual', NULL, '2025-02-11 10:35:15', '2025-02-11 10:35:15');

-- membuang struktur untuk table etiketferry.kapals
CREATE TABLE IF NOT EXISTS `kapals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kapal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kursi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.kapals: ~2 rows (lebih kurang)
REPLACE INTO `kapals` (`id`, `nama_kapal`, `jumlah_kursi`, `jumlah_mobil`, `created_at`, `updated_at`) VALUES
	(20, 'KMP. TENGIRI', '60', '16', '2024-10-25 12:03:57', '2024-11-15 09:24:27'),
	(21, 'KMP. SULTAN MURHUM', '160', '16', '2024-10-25 12:04:22', '2024-11-15 09:24:04');

-- membuang struktur untuk table etiketferry.keberangkatans
CREATE TABLE IF NOT EXISTS `keberangkatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jam_keberangkatan` time NOT NULL,
  `jam_kedatangan` time NOT NULL,
  `berangkat` int NOT NULL DEFAULT '0',
  `tujuan` int NOT NULL DEFAULT '0',
  `kapal_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.keberangkatans: ~21 rows (lebih kurang)
REPLACE INTO `keberangkatans` (`id`, `jam_keberangkatan`, `jam_kedatangan`, `berangkat`, `tujuan`, `kapal_id`, `created_at`, `updated_at`) VALUES
	(1, '06:30:00', '07:30:00', 2, 1, 21, '2025-02-11 07:42:04', '2025-02-11 07:42:04'),
	(2, '06:30:00', '07:30:00', 1, 2, 20, '2025-02-11 07:42:28', '2025-02-11 07:42:28'),
	(3, '08:30:00', '09:30:00', 1, 2, 21, '2025-02-11 07:44:30', '2025-02-11 07:44:30'),
	(4, '08:30:00', '09:30:00', 2, 1, 20, '2025-02-11 07:44:59', '2025-02-11 07:44:59'),
	(5, '10:30:00', '11:30:00', 2, 1, 21, '2025-02-11 07:45:44', '2025-02-11 07:45:44'),
	(6, '10:30:00', '11:30:00', 1, 2, 20, '2025-02-11 07:46:07', '2025-02-11 07:46:07'),
	(7, '12:30:00', '13:30:00', 1, 2, 21, '2025-02-11 07:47:06', '2025-02-11 07:47:06'),
	(8, '12:30:00', '13:30:00', 2, 1, 20, '2025-02-11 07:47:31', '2025-02-11 07:47:31'),
	(9, '14:00:00', '15:00:00', 2, 1, 21, '2025-02-11 07:48:26', '2025-02-11 07:48:26'),
	(10, '14:00:00', '15:00:00', 1, 2, 20, '2025-02-11 07:48:51', '2025-02-11 07:48:51'),
	(11, '16:00:00', '17:00:00', 1, 2, 21, '2025-02-11 07:49:16', '2025-02-11 07:49:16'),
	(12, '18:00:00', '19:00:00', 2, 1, 20, '2025-02-11 07:49:51', '2025-02-11 07:49:51'),
	(13, '18:00:00', '19:00:00', 1, 2, 21, '2025-02-11 07:50:16', '2025-02-11 07:50:16');

-- membuang struktur untuk table etiketferry.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.migrations: ~12 rows (lebih kurang)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_07_29_223439_create_tikets_table', 2),
	(6, '2024_07_29_223448_create_keberangkatans_table', 2),
	(7, '2024_07_29_223456_create_kapals_table', 2),
	(8, '2024_07_29_223502_create_histories_table', 2),
	(9, '2024_07_29_223508_create_hargas_table', 2),
	(10, '2024_07_29_223545_create_penumpangs_table', 2),
	(11, '2024_08_02_180804_create_pelabuhans_table', 3),
	(12, '2024_08_13_092145_add_mobile_to_harga', 4);

-- membuang struktur untuk table etiketferry.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.password_reset_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table etiketferry.pelabuhans
CREATE TABLE IF NOT EXISTS `pelabuhans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelabuhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.pelabuhans: ~2 rows (lebih kurang)
REPLACE INTO `pelabuhans` (`id`, `nama_pelabuhan`, `created_at`, `updated_at`) VALUES
	(1, 'Baubau', NULL, NULL),
	(2, 'Wara', NULL, NULL);

-- membuang struktur untuk table etiketferry.penumpangs
CREATE TABLE IF NOT EXISTS `penumpangs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penumpang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.penumpangs: ~6 rows (lebih kurang)
REPLACE INTO `penumpangs` (`id`, `nik`, `nama_penumpang`, `alamat`, `no_hp`, `user_id`, `created_at`, `updated_at`) VALUES
	(2, '1234567812345678', 'La Duku Ok', 'Baubau', '081132113211', NULL, '2024-07-30 00:16:15', '2024-08-12 08:17:16'),
	(13, '7472042505880004', 'Hayatul Habirun', 'baubau', '081342726770', NULL, '2024-08-19 11:17:16', '2024-08-29 17:46:05'),
	(14, '3211516161514121', 'Azrul', 'Baubau', '08134272677', NULL, '2024-08-19 11:33:09', '2024-08-19 11:33:09'),
	(15, '3277032504880001', 'Hayatul Habirun', 'baubau', '08123123123', NULL, '2024-08-29 18:20:37', '2024-08-29 18:20:37'),
	(16, '8204080309020001', 'Faisal Ardiansyah Darius ', 'baubau ', '083133435348', 7, '2024-10-08 13:06:26', '2025-02-09 17:37:57'),
	(32, '1234567890123456', 'bjh', 'bhnbj', '78779879898989898', 1, '2025-02-10 06:26:42', '2025-02-11 10:35:15');

-- membuang struktur untuk table etiketferry.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.personal_access_tokens: ~3 rows (lebih kurang)
REPLACE INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
	(53, 'App\\Models\\User', 4, 'ASDPbaubau', '336dfb4f3ef956c111395ce676eb159a155cfc384cea82486128b79368200f75', '["*"]', NULL, NULL, '2024-11-15 10:06:32', '2024-11-15 10:06:32'),
	(56, 'App\\Models\\User', 4, 'ASDPbaubau', 'f6bfd8ddbce02e70251005d088006a2899cfb3db284689b21a8719338a433075', '["*"]', NULL, NULL, '2024-11-30 01:22:36', '2024-11-30 01:22:36'),
	(63, 'App\\Models\\User', 1, 'ASDPbaubau', '5099f7bf4959975c24b4e3adf7f6715657393509823f5c98d34a836e7c334483', '["*"]', '2025-02-10 06:29:19', NULL, '2025-02-10 06:29:06', '2025-02-10 06:29:19');

-- membuang struktur untuk table etiketferry.tikets
CREATE TABLE IF NOT EXISTS `tikets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_tiket` bigint NOT NULL,
  `jadwal` date DEFAULT NULL,
  `harga_tiket` bigint NOT NULL,
  `fasilitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penumpang_id` bigint DEFAULT NULL,
  `keberangkatan_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.tikets: ~72 rows (lebih kurang)
REPLACE INTO `tikets` (`id`, `kode_tiket`, `jadwal`, `harga_tiket`, `fasilitas`, `kendaraan`, `plat`, `penumpang_id`, `keberangkatan_id`, `created_at`, `updated_at`) VALUES
	(1, 1729858423758, '2024-10-26', 11000, 'ekonomi', '', NULL, 20, 10, '2024-10-25 12:13:44', '2024-10-25 12:13:44'),
	(2, 1729858585524, '2024-10-30', 50000, 'ekonomi', 'motor', 'DT 1067 BH', 18, 8, '2024-10-25 12:16:26', '2024-10-25 12:16:26'),
	(3, 1729871736393, '2024-10-28', 50000, 'ekonomi', 'motor', 'DT 2715 GH', 17, 10, '2024-10-25 15:55:36', '2024-10-25 15:55:36'),
	(4, 1730288773512, '2024-10-31', 50000, 'ekonomi', 'motor', 'DT 6752 HG', 21, 11, '2024-10-30 11:46:14', '2024-10-30 11:46:14'),
	(5, 1730289545154, '2024-11-01', 76000, 'ekonomi', 'mobil', NULL, 22, 9, '2024-10-30 11:59:06', '2024-10-30 11:59:06'),
	(6, 17302898277, '2024-11-02', 11000, 'ekonomi', '', NULL, 22, 16, '2024-10-30 12:03:48', '2024-10-30 12:03:48'),
	(7, 173034721119, '2024-11-02', 11000, 'ekonomi', '', NULL, 21, 15, '2024-10-31 04:00:13', '2024-10-31 04:00:13'),
	(8, 1730347409692, '2024-11-01', 11000, 'ekonomi', '', NULL, 21, 16, '2024-10-31 04:03:30', '2024-10-31 04:03:30'),
	(9, 1731312219114, '2024-11-12', 50000, 'ekonomi', 'motor', 'DT 2715 GH', 17, 15, '2024-11-11 08:03:40', '2024-11-11 08:03:40'),
	(10, 1731664217896, '2024-11-16', 50000, 'ekonomi', 'motor', 'DT 1676 CG', 16, 21, '2024-11-15 09:50:18', '2024-11-15 09:50:18'),
	(11, 1731664219439, '2024-11-16', 50000, 'ekonomi', 'motor', 'DT 1676 CG', 16, 21, '2024-11-15 09:50:20', '2024-11-15 09:50:20'),
	(12, 1731665161328, '2024-11-18', 50000, 'ekonomi', 'motor', 'DT 9849 BB', 23, 9, '2024-11-15 10:06:01', '2024-11-15 10:06:01'),
	(13, 1732929534315, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:18:55', '2024-11-30 01:18:55'),
	(14, 1732929549507, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:09', '2024-11-30 01:19:09'),
	(15, 1732929550789, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:11', '2024-11-30 01:19:11'),
	(16, 1732929552991, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:13', '2024-11-30 01:19:13'),
	(17, 1732929553929, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:15', '2024-11-30 01:19:15'),
	(18, 173292955694, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:17', '2024-11-30 01:19:17'),
	(19, 1732929557388, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:18', '2024-11-30 01:19:18'),
	(20, 1732929558306, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:19', '2024-11-30 01:19:19'),
	(21, 1732929559362, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:20', '2024-11-30 01:19:20'),
	(22, 173292956038, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:22', '2024-11-30 01:19:22'),
	(23, 1732929563817, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:24', '2024-11-30 01:19:24'),
	(24, 1732929564277, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:25', '2024-11-30 01:19:25'),
	(25, 1732929565737, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:26', '2024-11-30 01:19:26'),
	(26, 17329295664, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:27', '2024-11-30 01:19:27'),
	(27, 1732929568697, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:28', '2024-11-30 01:19:28'),
	(28, 1732929570208, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:31', '2024-11-30 01:19:31'),
	(29, 1732929571561, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:31', '2024-11-30 01:19:31'),
	(30, 1732929572802, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:33', '2024-11-30 01:19:33'),
	(31, 1732929575881, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:36', '2024-11-30 01:19:36'),
	(32, 173292957750, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:37', '2024-11-30 01:19:37'),
	(33, 1732929577900, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:38', '2024-11-30 01:19:38'),
	(34, 1732929578105, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:39', '2024-11-30 01:19:39'),
	(35, 1732929579365, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:40', '2024-11-30 01:19:40'),
	(36, 1732929580903, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:41', '2024-11-30 01:19:41'),
	(37, 1732929582214, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:43', '2024-11-30 01:19:43'),
	(38, 1732929583105, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:44', '2024-11-30 01:19:44'),
	(39, 1732929585810, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:45', '2024-11-30 01:19:45'),
	(40, 1732929586301, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:46', '2024-11-30 01:19:46'),
	(41, 1732929587219, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:47', '2024-11-30 01:19:47'),
	(42, 1732929588496, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:48', '2024-11-30 01:19:48'),
	(43, 1732929589354, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:49', '2024-11-30 01:19:49'),
	(44, 1732929589749, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:50', '2024-11-30 01:19:50'),
	(45, 1732929591862, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:51', '2024-11-30 01:19:51'),
	(46, 1732929592990, '2024-11-30', 11000, 'ekonomi', '', NULL, 17, 16, '2024-11-30 01:19:52', '2024-11-30 01:19:52'),
	(47, 1732931700144, '2024-11-30', 11000, 'ekonomi', '', NULL, 18, 21, '2024-11-30 01:55:03', '2024-11-30 01:55:03'),
	(48, 173320276942, '2024-12-03', 11000, 'ekonomi', '', NULL, 18, 21, '2024-12-03 05:12:50', '2024-12-03 05:12:50'),
	(49, 1735623655772, '2024-12-31', 61000, 'ekonomi', 'motor', 'DT 8389 EG', 24, 21, '2024-12-31 05:40:56', '2024-12-31 05:40:56'),
	(50, 1735624129508, '2024-12-31', 61000, 'ekonomi', 'motor', 'DT 7829 EG', 16, 21, '2024-12-31 05:48:50', '2024-12-31 05:48:50'),
	(51, 1735624581295, '2024-12-31', 61000, 'ekonomi', 'motor', 'DT 7827 EG', 16, 21, '2024-12-31 05:56:22', '2024-12-31 05:56:22'),
	(52, 1737783945798, '2025-01-26', 11000, 'ekonomi', '', NULL, 17, 21, '2025-01-25 05:45:46', '2025-01-25 05:45:46'),
	(53, 1737783948825, '2025-01-26', 11000, 'ekonomi', '', NULL, 17, 21, '2025-01-25 05:45:49', '2025-01-25 05:45:49'),
	(54, 1738392323301, '2025-02-02', 11000, 'ekonomi', '', NULL, 25, 16, '2025-02-01 06:45:24', '2025-02-01 06:45:24'),
	(55, 1738392915666, '2025-02-01', 11000, 'ekonomi', '', NULL, 25, 21, '2025-02-01 06:55:16', '2025-02-01 06:55:16'),
	(56, 1738393659310, '2025-02-02', 11000, 'ekonomi', '', NULL, 17, 16, '2025-02-01 07:07:40', '2025-02-01 07:07:40'),
	(57, 173839641532, '2025-02-04', 277000, 'ekonomi', 'motor', 'DT 2979', 26, 15, '2025-02-01 07:53:36', '2025-02-01 07:53:36'),
	(58, 1738410941560, '2025-02-02', 11000, 'ekonomi', '', NULL, 25, 16, '2025-02-01 11:55:41', '2025-02-01 11:55:41'),
	(59, 1738540831167, '2025-02-03', 11000, 'ekonomi', '', NULL, 17, 16, '2025-02-03 00:00:32', '2025-02-03 00:00:32'),
	(60, 1738804100766, '2025-02-06', 11000, 'ekonomi', '', NULL, 27, 16, '2025-02-06 01:08:21', '2025-02-06 01:08:21'),
	(61, 1738804357711, '2025-02-06', 11000, 'ekonomi', '', NULL, 28, 16, '2025-02-06 01:12:38', '2025-02-06 01:12:38'),
	(62, 1738902165571, '2025-02-07', 11000, 'ekonomi', '', NULL, 17, 16, '2025-02-07 04:22:47', '2025-02-07 04:22:47'),
	(63, 1738905633441, '2025-02-07', 11000, 'ekonomi', '', NULL, 16, 15, '2025-02-07 05:20:35', '2025-02-07 05:20:35'),
	(64, 1738905687206, '2025-02-07', 11000, 'ekonomi', '', NULL, 16, 15, '2025-02-07 05:21:28', '2025-02-07 05:21:28'),
	(65, 1738905689848, '2025-02-07', 11000, 'ekonomi', '', NULL, 16, 15, '2025-02-07 05:21:30', '2025-02-07 05:21:30'),
	(66, 1738905985306, '2025-02-07', 11000, 'ekonomi', '', NULL, 29, 21, '2025-02-07 05:26:26', '2025-02-07 05:26:26'),
	(67, 173890646020, '2025-02-08', 11000, 'ekonomi', '', NULL, 28, 9, '2025-02-07 05:34:20', '2025-02-07 05:34:20'),
	(68, 1738912004937, '2025-02-08', 11000, 'ekonomi', '', NULL, 30, 11, '2025-02-07 07:06:44', '2025-02-07 07:06:44'),
	(69, 1738936651679, '2025-02-07', 11000, 'ekonomi', '', NULL, 31, 16, '2025-02-07 13:57:32', '2025-02-07 13:57:32'),
	(70, 1738982818253, '2025-02-09', 11000, 'ekonomi', '', NULL, 29, 15, '2025-02-08 02:47:00', '2025-02-08 02:47:00'),
	(71, 173912267685, '2025-02-10', 11000, 'ekonomi', '', NULL, 16, 14, '2025-02-09 17:37:57', '2025-02-09 17:37:57'),
	(72, 1739168801438, '2025-02-10', 11000, 'ekonomi', '', NULL, 32, 49, '2025-02-10 06:26:42', '2025-02-10 06:26:42'),
	(73, 1739270115495, '2025-02-13', 11000, 'ekonomi', '', NULL, 32, 10, '2025-02-11 10:35:15', '2025-02-11 10:35:15');

-- membuang struktur untuk table etiketferry.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','petugas_tiket','member') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel etiketferry.users: ~13 rows (lebih kurang)
REPLACE INTO `users` (`id`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin@gmail.com', NULL, '$2y$12$jro8NpkQX0GRm..47Hpm/etV4vJrTMhAv41YbZidBQ82FFrg.6kFu', 'admin', NULL, '2024-07-29 13:39:14', '2025-02-11 10:35:15'),
	(2, 'hayatulhabirun@gmail.com', NULL, '$2y$12$xDZQW/8glj0GXXUoMPQLaeC52x9rAwVoDHFfQx/zXIl28VDSzzMWO', 'member', NULL, '2024-10-25 04:10:37', '2024-12-03 05:12:50'),
	(3, 'hayat@gmail.com', NULL, '$2y$12$K.Typv30vcefwBQk/lZql.GXhSau/npf0WEPLzAP/Zilt.GAy0MeK', NULL, NULL, '2024-10-25 12:16:26', '2024-10-25 12:16:26'),
	(4, 'triylstni19@gmail.com', NULL, '$2y$12$l.hRbNYNb8hnIyTTZ6G5qu2IpJEcfk4e91OCuGudtY/UXBw/zPneG', NULL, NULL, '2024-10-25 15:55:36', '2025-02-08 02:46:59'),
	(5, 'meisyahranibunga@gmail.com', NULL, '$2y$12$6Te/JAAPxAsX2oY65bxYme8dUJM5cZ.hlpzhBCFxGr1HXXuXBTfrK', NULL, NULL, '2024-10-30 11:46:13', '2024-10-30 11:46:13'),
	(6, 'triylstni@gmail.com', NULL, '$2y$12$y51AVUe47aVIQwRLlCqk9.k.v0D2IQf3oLXYykUDFUOcgQbibXW3S', NULL, NULL, '2024-10-30 12:03:48', '2025-02-03 00:00:32'),
	(7, 'faisaldarius7@gmail.com', NULL, '$2y$12$4mzUOnUoO9KN9BJn1O5A1uGYXeuojXe5JXzoNLlV4FmEFRf0n3na6', NULL, NULL, '2024-11-15 09:50:17', '2025-02-09 17:37:57'),
	(8, 'vany@gmail.com', NULL, '$2y$12$yWHPrp7RY5WHKE3cqzY3t.sjOXg67x7vDJkZo46mn42KES1VZCIDW', NULL, NULL, '2024-12-31 05:40:56', '2024-12-31 05:40:56'),
	(9, 'faisaldarius77@gmail.com', NULL, '$2y$12$w6XgLGotT.B.V7kJAWtcCuUCjsrn9i81Pn4eEXHUWiWDBGInbrfaS', NULL, NULL, '2024-12-31 05:56:21', '2024-12-31 05:56:21'),
	(10, 'kmdiin03@gmail.com', NULL, '$2y$12$PGk9whsSQJH0zcvCHe9LTuzBGokDtZU0jpy0rjMOA5M1SjSppECnO', NULL, NULL, '2025-02-01 06:55:15', '2025-02-01 06:55:15'),
	(11, 'kmdiin.03@gmail.com', NULL, '$2y$12$0PZGm77evm9N1zrrnlnlmu.h7WU4X7siTboyeK9Ry3uSAA0O6dPnC', NULL, NULL, '2025-02-01 07:53:36', '2025-02-01 07:53:36'),
	(12, 'testingdata@gmail.com', NULL, '$2y$12$ZaOuMjK3OyQHhhrLjGLdvOvJDKZp29vRsPwLmAbrqnoheBdVP6y6q', NULL, NULL, '2025-02-07 13:57:31', '2025-02-07 13:57:31'),
	(13, 'sgtrss03@gmail.com', NULL, '$2y$12$i52kzt8k8Ub7v8gZ8YYyQuqO0g/cqxhJJZ3Pa4LuoKAQjJvt2tGi2', NULL, NULL, '2025-02-10 06:26:42', '2025-02-10 06:26:42');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
