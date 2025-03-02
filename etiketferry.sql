-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: etiketferry
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hargas`
--

DROP TABLE IF EXISTS `hargas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hargas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vip` bigint NOT NULL,
  `ekonomi` bigint NOT NULL,
  `mobil_standar` bigint NOT NULL,
  `mobil_truk` bigint NOT NULL,
  `motor` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hargas`
--

LOCK TABLES `hargas` WRITE;
/*!40000 ALTER TABLE `hargas` DISABLE KEYS */;
INSERT INTO `hargas` VALUES (7,0,11000,65000,162000,39000,'2024-08-26 20:28:02','2024-10-25 14:44:10');
/*!40000 ALTER TABLE `hargas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `histories`
--

DROP TABLE IF EXISTS `histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tiket_id` bigint NOT NULL,
  `jenis_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `metode_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `bukti_pembayaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `histories`
--

LOCK TABLES `histories` WRITE;
/*!40000 ALTER TABLE `histories` DISABLE KEYS */;
INSERT INTO `histories` VALUES (1,1,'tunai','manual',NULL,'2024-10-25 12:13:44','2024-10-25 12:13:44'),(2,2,'tunai','manual',NULL,'2024-10-25 12:16:26','2024-10-25 12:16:26'),(3,3,'tunai','manual',NULL,'2024-10-25 15:55:37','2024-10-25 15:55:37'),(4,4,'tunai','manual',NULL,'2024-10-30 11:46:14','2024-10-30 11:46:14'),(5,5,'tunai','manual',NULL,'2024-10-30 11:59:06','2024-10-30 11:59:06'),(6,6,'tunai','manual',NULL,'2024-10-30 12:03:49','2024-10-30 12:03:49'),(7,7,'tunai','manual',NULL,'2024-10-31 04:00:14','2024-10-31 04:00:14'),(8,8,'tunai','manual',NULL,'2024-10-31 04:03:30','2024-10-31 04:03:30'),(9,9,'tunai','manual',NULL,'2024-11-11 08:03:40','2024-11-11 08:03:40'),(10,10,'tunai','manual',NULL,'2024-11-15 09:50:18','2024-11-15 09:50:18'),(11,11,'tunai','manual',NULL,'2024-11-15 09:50:22','2024-11-15 09:50:22'),(12,12,'tunai','manual',NULL,'2024-11-15 10:06:02','2024-11-15 10:06:02'),(13,13,'tunai','manual',NULL,'2024-11-30 01:18:55','2024-11-30 01:18:55'),(14,14,'tunai','manual',NULL,'2024-11-30 01:19:10','2024-11-30 01:19:10'),(15,15,'tunai','manual',NULL,'2024-11-30 01:19:12','2024-11-30 01:19:12'),(16,16,'tunai','manual',NULL,'2024-11-30 01:19:13','2024-11-30 01:19:13'),(17,17,'tunai','manual',NULL,'2024-11-30 01:19:16','2024-11-30 01:19:16'),(18,18,'tunai','manual',NULL,'2024-11-30 01:19:17','2024-11-30 01:19:17'),(19,19,'tunai','manual',NULL,'2024-11-30 01:19:18','2024-11-30 01:19:18'),(20,20,'tunai','manual',NULL,'2024-11-30 01:19:19','2024-11-30 01:19:19'),(21,21,'tunai','manual',NULL,'2024-11-30 01:19:20','2024-11-30 01:19:20'),(22,22,'tunai','manual',NULL,'2024-11-30 01:19:22','2024-11-30 01:19:22'),(23,23,'tunai','manual',NULL,'2024-11-30 01:19:24','2024-11-30 01:19:24'),(24,24,'tunai','manual',NULL,'2024-11-30 01:19:25','2024-11-30 01:19:25'),(25,25,'tunai','manual',NULL,'2024-11-30 01:19:26','2024-11-30 01:19:26'),(26,26,'tunai','manual',NULL,'2024-11-30 01:19:27','2024-11-30 01:19:27'),(27,27,'tunai','manual',NULL,'2024-11-30 01:19:28','2024-11-30 01:19:28'),(28,28,'tunai','manual',NULL,'2024-11-30 01:19:31','2024-11-30 01:19:31'),(29,29,'tunai','manual',NULL,'2024-11-30 01:19:32','2024-11-30 01:19:32'),(30,30,'tunai','manual',NULL,'2024-11-30 01:19:35','2024-11-30 01:19:35'),(31,31,'tunai','manual',NULL,'2024-11-30 01:19:36','2024-11-30 01:19:36'),(32,32,'tunai','manual',NULL,'2024-11-30 01:19:37','2024-11-30 01:19:37'),(33,33,'tunai','manual',NULL,'2024-11-30 01:19:38','2024-11-30 01:19:38'),(34,34,'tunai','manual',NULL,'2024-11-30 01:19:39','2024-11-30 01:19:39'),(35,35,'tunai','manual',NULL,'2024-11-30 01:19:40','2024-11-30 01:19:40'),(36,36,'tunai','manual',NULL,'2024-11-30 01:19:41','2024-11-30 01:19:41'),(37,37,'tunai','manual',NULL,'2024-11-30 01:19:43','2024-11-30 01:19:43'),(38,38,'tunai','manual',NULL,'2024-11-30 01:19:44','2024-11-30 01:19:44'),(39,39,'tunai','manual',NULL,'2024-11-30 01:19:45','2024-11-30 01:19:45'),(40,40,'tunai','manual',NULL,'2024-11-30 01:19:46','2024-11-30 01:19:46'),(41,41,'tunai','manual',NULL,'2024-11-30 01:19:47','2024-11-30 01:19:47'),(42,42,'tunai','manual',NULL,'2024-11-30 01:19:48','2024-11-30 01:19:48'),(43,43,'tunai','manual',NULL,'2024-11-30 01:19:49','2024-11-30 01:19:49'),(44,44,'tunai','manual',NULL,'2024-11-30 01:19:50','2024-11-30 01:19:50'),(45,45,'tunai','manual',NULL,'2024-11-30 01:19:51','2024-11-30 01:19:51'),(46,46,'tunai','manual',NULL,'2024-11-30 01:19:52','2024-11-30 01:19:52'),(47,47,'tunai','manual',NULL,'2024-11-30 01:55:04','2024-11-30 01:55:04');
/*!40000 ALTER TABLE `histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kapals`
--

DROP TABLE IF EXISTS `kapals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kapals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kapal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kursi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_mobil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kapals`
--

LOCK TABLES `kapals` WRITE;
/*!40000 ALTER TABLE `kapals` DISABLE KEYS */;
INSERT INTO `kapals` VALUES (20,'KMP. TENGIRI','60','16','2024-10-25 12:03:57','2024-11-15 09:24:27'),(21,'KMP. SULTAN MURHUM','160','16','2024-10-25 12:04:22','2024-11-15 09:24:04');
/*!40000 ALTER TABLE `kapals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keberangkatans`
--

DROP TABLE IF EXISTS `keberangkatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keberangkatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jam_keberangkatan` time NOT NULL,
  `jam_kedatangan` time NOT NULL,
  `berangkat` int NOT NULL DEFAULT '0',
  `tujuan` int NOT NULL DEFAULT '0',
  `kapal_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keberangkatans`
--

LOCK TABLES `keberangkatans` WRITE;
/*!40000 ALTER TABLE `keberangkatans` DISABLE KEYS */;
INSERT INTO `keberangkatans` VALUES (8,'07:00:00','08:00:00',1,2,20,'2024-10-25 12:08:23','2024-10-25 15:12:44'),(9,'07:00:00','08:00:00',2,1,21,'2024-10-25 12:08:51','2024-10-25 15:44:20'),(10,'09:00:00','10:00:00',2,1,20,'2024-10-25 12:09:22','2024-10-25 15:45:36'),(11,'09:00:00','10:00:00',1,2,21,'2024-10-25 15:16:30','2024-10-25 15:46:16'),(12,'11:00:00','12:00:00',1,2,20,'2024-10-25 15:18:39','2024-10-25 15:47:12'),(13,'11:00:00','12:00:00',2,1,21,'2024-10-25 15:48:14','2024-10-25 15:48:14'),(14,'13:00:00','14:00:00',2,1,20,'2024-10-25 15:49:29','2024-11-11 07:55:43'),(15,'13:00:00','14:00:00',1,2,21,'2024-10-25 15:50:24','2024-11-11 07:56:36'),(16,'15:00:00','16:00:00',1,2,20,'2024-10-25 15:51:20','2024-11-11 07:57:27'),(17,'15:00:00','16:00:00',2,1,21,'2024-10-25 15:51:49','2024-11-11 07:57:45'),(20,'17:00:00','18:00:00',2,1,20,'2024-11-11 08:00:00','2024-11-11 08:00:00'),(21,'17:00:00','18:00:00',1,2,21,'2024-11-11 08:00:36','2024-11-11 08:00:36');
/*!40000 ALTER TABLE `keberangkatans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_07_29_223439_create_tikets_table',2),(6,'2024_07_29_223448_create_keberangkatans_table',2),(7,'2024_07_29_223456_create_kapals_table',2),(8,'2024_07_29_223502_create_histories_table',2),(9,'2024_07_29_223508_create_hargas_table',2),(10,'2024_07_29_223545_create_penumpangs_table',2),(11,'2024_08_02_180804_create_pelabuhans_table',3),(12,'2024_08_13_092145_add_mobile_to_harga',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelabuhans`
--

DROP TABLE IF EXISTS `pelabuhans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelabuhans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelabuhan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelabuhans`
--

LOCK TABLES `pelabuhans` WRITE;
/*!40000 ALTER TABLE `pelabuhans` DISABLE KEYS */;
INSERT INTO `pelabuhans` VALUES (1,'Baubau',NULL,NULL),(2,'Wara',NULL,NULL);
/*!40000 ALTER TABLE `pelabuhans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penumpangs`
--

DROP TABLE IF EXISTS `penumpangs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penumpangs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penumpang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penumpangs`
--

LOCK TABLES `penumpangs` WRITE;
/*!40000 ALTER TABLE `penumpangs` DISABLE KEYS */;
INSERT INTO `penumpangs` VALUES (2,'1234567812345678','La Duku Ok','Baubau','081132113211',NULL,'2024-07-30 00:16:15','2024-08-12 08:17:16'),(13,'7472042505880004','Hayatul Habirun','baubau','081342726770',NULL,'2024-08-19 11:17:16','2024-08-29 17:46:05'),(14,'3211516161514121','Azrul','Baubau','08134272677',NULL,'2024-08-19 11:33:09','2024-08-19 11:33:09'),(15,'3277032504880001','Hayatul Habirun','baubau','08123123123',NULL,'2024-08-29 18:20:37','2024-08-29 18:20:37'),(16,'8204080309020001','Faisal Ardiansyah Darius ','Jl. Erlangga Pos 2','083133435348',7,'2024-10-08 13:06:26','2024-11-15 09:50:17'),(17,'7472024605070003','mei','lamangga','081210364364',4,'2024-10-08 13:14:09','2024-11-30 01:18:55'),(18,'3277032205990001','FITRI','Jl. Dr. Wahidin Belakang No. 79 Kel. Wameo Kec. Batupoaro Kota Baubau Prov Sultra (Depan Apotik Anita Farma)','081342726770',2,'2024-10-25 04:10:04','2024-11-30 01:55:03'),(19,'3277032205990009','FITRI','Jl. Dr. Wahidin Belakang No. 79 ','086786786868',2,'2024-10-25 04:12:33','2024-10-25 09:22:26'),(23,'3467837583927492','tri yulistiani','keraton','082349598450',4,'2024-11-15 10:06:01','2024-11-15 10:06:01');
/*!40000 ALTER TABLE `penumpangs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (49,'App\\Models\\User',7,'ASDPbaubau','a415da0b539d4a99fab579e83d8f12d41fe60e85c50cce568fabaa09cf65795f','[\"*\"]',NULL,NULL,'2024-11-15 09:59:56','2024-11-15 09:59:56'),(50,'App\\Models\\User',7,'ASDPbaubau','28346c088620975c788e831d79278a3692287f35b8b8c52ffa4341bc53c4909c','[\"*\"]',NULL,NULL,'2024-11-15 09:59:57','2024-11-15 09:59:57'),(51,'App\\Models\\User',7,'ASDPbaubau','64910e6c63de3131abac8e754646c3ed46ae59ff091a80ec51cf592273c05e87','[\"*\"]',NULL,NULL,'2024-11-15 10:00:24','2024-11-15 10:00:24'),(52,'App\\Models\\User',7,'ASDPbaubau','6817f7488e9be50a76ad792459a26221f3d4de434571383b768a5fc1a217b401','[\"*\"]',NULL,NULL,'2024-11-15 10:00:25','2024-11-15 10:00:25'),(53,'App\\Models\\User',4,'ASDPbaubau','336dfb4f3ef956c111395ce676eb159a155cfc384cea82486128b79368200f75','[\"*\"]',NULL,NULL,'2024-11-15 10:06:32','2024-11-15 10:06:32'),(56,'App\\Models\\User',4,'ASDPbaubau','f6bfd8ddbce02e70251005d088006a2899cfb3db284689b21a8719338a433075','[\"*\"]',NULL,NULL,'2024-11-30 01:22:36','2024-11-30 01:22:36');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tikets`
--

DROP TABLE IF EXISTS `tikets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tikets` (
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tikets`
--

LOCK TABLES `tikets` WRITE;
/*!40000 ALTER TABLE `tikets` DISABLE KEYS */;
INSERT INTO `tikets` VALUES (1,1729858423758,'2024-10-26',11000,'ekonomi','',NULL,20,10,'2024-10-25 12:13:44','2024-10-25 12:13:44'),(2,1729858585524,'2024-10-30',50000,'ekonomi','motor','DT 1067 BH',18,8,'2024-10-25 12:16:26','2024-10-25 12:16:26'),(3,1729871736393,'2024-10-28',50000,'ekonomi','motor','DT 2715 GH',17,10,'2024-10-25 15:55:36','2024-10-25 15:55:36'),(4,1730288773512,'2024-10-31',50000,'ekonomi','motor','DT 6752 HG',21,11,'2024-10-30 11:46:14','2024-10-30 11:46:14'),(5,1730289545154,'2024-11-01',76000,'ekonomi','mobil',NULL,22,9,'2024-10-30 11:59:06','2024-10-30 11:59:06'),(6,17302898277,'2024-11-02',11000,'ekonomi','',NULL,22,16,'2024-10-30 12:03:48','2024-10-30 12:03:48'),(7,173034721119,'2024-11-02',11000,'ekonomi','',NULL,21,15,'2024-10-31 04:00:13','2024-10-31 04:00:13'),(8,1730347409692,'2024-11-01',11000,'ekonomi','',NULL,21,16,'2024-10-31 04:03:30','2024-10-31 04:03:30'),(9,1731312219114,'2024-11-12',50000,'ekonomi','motor','DT 2715 GH',17,15,'2024-11-11 08:03:40','2024-11-11 08:03:40'),(10,1731664217896,'2024-11-16',50000,'ekonomi','motor','DT 1676 CG',16,21,'2024-11-15 09:50:18','2024-11-15 09:50:18'),(11,1731664219439,'2024-11-16',50000,'ekonomi','motor','DT 1676 CG',16,21,'2024-11-15 09:50:20','2024-11-15 09:50:20'),(12,1731665161328,'2024-11-18',50000,'ekonomi','motor','DT 9849 BB',23,9,'2024-11-15 10:06:01','2024-11-15 10:06:01'),(13,1732929534315,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:18:55','2024-11-30 01:18:55'),(14,1732929549507,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:09','2024-11-30 01:19:09'),(15,1732929550789,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:11','2024-11-30 01:19:11'),(16,1732929552991,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:13','2024-11-30 01:19:13'),(17,1732929553929,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:15','2024-11-30 01:19:15'),(18,173292955694,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:17','2024-11-30 01:19:17'),(19,1732929557388,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:18','2024-11-30 01:19:18'),(20,1732929558306,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:19','2024-11-30 01:19:19'),(21,1732929559362,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:20','2024-11-30 01:19:20'),(22,173292956038,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:22','2024-11-30 01:19:22'),(23,1732929563817,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:24','2024-11-30 01:19:24'),(24,1732929564277,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:25','2024-11-30 01:19:25'),(25,1732929565737,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:26','2024-11-30 01:19:26'),(26,17329295664,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:27','2024-11-30 01:19:27'),(27,1732929568697,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:28','2024-11-30 01:19:28'),(28,1732929570208,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:31','2024-11-30 01:19:31'),(29,1732929571561,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:31','2024-11-30 01:19:31'),(30,1732929572802,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:33','2024-11-30 01:19:33'),(31,1732929575881,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:36','2024-11-30 01:19:36'),(32,173292957750,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:37','2024-11-30 01:19:37'),(33,1732929577900,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:38','2024-11-30 01:19:38'),(34,1732929578105,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:39','2024-11-30 01:19:39'),(35,1732929579365,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:40','2024-11-30 01:19:40'),(36,1732929580903,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:41','2024-11-30 01:19:41'),(37,1732929582214,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:43','2024-11-30 01:19:43'),(38,1732929583105,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:44','2024-11-30 01:19:44'),(39,1732929585810,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:45','2024-11-30 01:19:45'),(40,1732929586301,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:46','2024-11-30 01:19:46'),(41,1732929587219,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:47','2024-11-30 01:19:47'),(42,1732929588496,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:48','2024-11-30 01:19:48'),(43,1732929589354,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:49','2024-11-30 01:19:49'),(44,1732929589749,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:50','2024-11-30 01:19:50'),(45,1732929591862,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:51','2024-11-30 01:19:51'),(46,1732929592990,'2024-11-30',11000,'ekonomi','',NULL,17,16,'2024-11-30 01:19:52','2024-11-30 01:19:52'),(47,1732931700144,'2024-11-30',11000,'ekonomi','',NULL,18,21,'2024-11-30 01:55:03','2024-11-30 01:55:03');
/*!40000 ALTER TABLE `tikets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin@gmail.com',NULL,'$2y$12$u7zy2Jf01N9AmHmuABjQ9.j8XbskTJHoaQ1dSijzUwmLubc7jW1kO','admin',NULL,'2024-07-29 13:39:14','2024-07-29 13:39:14'),(2,'hayatulhabirun@gmail.com',NULL,'$2y$12$jzOPmAq0v0tRjwPCkJLdVubpP2JrlOiC3CP/4f26vJa/7pkO458gG','member',NULL,'2024-10-25 04:10:37','2024-11-30 01:55:01'),(3,'hayat@gmail.com',NULL,'$2y$12$K.Typv30vcefwBQk/lZql.GXhSau/npf0WEPLzAP/Zilt.GAy0MeK',NULL,NULL,'2024-10-25 12:16:26','2024-10-25 12:16:26'),(4,'triylstni19@gmail.com',NULL,'$2y$12$Mg.8jdYTLIeWaMJUCAhYGeVmxPVJZNaMokDoDeZPM7cjPEcBHuxY.',NULL,NULL,'2024-10-25 15:55:36','2024-11-30 01:19:52'),(5,'meisyahranibunga@gmail.com',NULL,'$2y$12$6Te/JAAPxAsX2oY65bxYme8dUJM5cZ.hlpzhBCFxGr1HXXuXBTfrK',NULL,NULL,'2024-10-30 11:46:13','2024-10-30 11:46:13'),(6,'triylstni@gmail.com',NULL,'$2y$12$KrGaKkRHavA11bIwDpaioewlP4yGQWBd6d39ys16/K9.m03OaKbEe',NULL,NULL,'2024-10-30 12:03:48','2024-10-30 12:03:48'),(7,'faisaldarius7@gmail.com',NULL,'$2y$12$jNvIoIcWpJDG6y.boSo9Fe7BFU.OFXJNHYEj58e8jpxVX2pLpmV6S',NULL,NULL,'2024-11-15 09:50:17','2024-11-15 09:50:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-03  3:40:43
