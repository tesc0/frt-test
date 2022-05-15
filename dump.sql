-- --------------------------------------------------------
-- Host:                         192.168.10.10
-- Server version:               5.7.38-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Verzió:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for frt
CREATE DATABASE IF NOT EXISTS `frt` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `frt`;

-- Dumping structure for tábla frt.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint(20) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.answers: ~73 rows (approximately)
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`id`, `question_id`, `answer`, `correct`, `created_at`, `updated_at`) VALUES
	(1, 1, 'teszt válasz 1/1', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(2, 1, 'teszt válasz 1/2', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(3, 1, 'teszt válasz 1/3', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(4, 1, 'teszt válasz 1/4', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(5, 1, 'teszt válasz 1/5', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(6, 1, 'teszt válasz 1/6', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(7, 2, 'teszt válasz 2/1', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(8, 2, 'teszt válasz 2/2', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(9, 2, 'teszt válasz 2/3', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(10, 2, 'teszt válasz 2/4', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(11, 2, 'teszt válasz 2/5', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(12, 2, 'teszt válasz 2/6', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(13, 13, 'Igen132', 0, '2022-05-15 15:20:44', '2022-05-15 16:38:26'),
	(14, 3, 'teszt válasz 3/2', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(15, 3, 'teszt válasz 3/3', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(16, 3, 'teszt válasz 3/4', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(17, 4, 'teszt válasz 4/1', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(18, 4, 'teszt válasz 4/2', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(19, 4, 'teszt válasz 4/3', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(20, 4, 'teszt válasz 4/4', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(21, 5, 'teszt válasz 5/1', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(22, 5, 'teszt válasz 5/2', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(23, 5, 'teszt válasz 5/3', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(24, 5, 'teszt válasz 5/4', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(25, 5, 'teszt válasz 5/5', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(26, 6, 'teszt válasz 6/1', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(27, 6, 'teszt válasz 6/2', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(28, 6, 'teszt válasz 6/3', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(29, 6, 'teszt válasz 6/4', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(30, 6, 'teszt válasz 6/5', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(31, 7, 'teszt válasz 7/1', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(32, 7, 'teszt válasz 7/2', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(33, 7, 'teszt válasz 7/3', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(34, 7, 'teszt válasz 7/4', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(35, 7, 'teszt válasz 7/5', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(36, 8, 'teszt válasz 8/1', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(37, 8, 'teszt válasz 8/2', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(38, 8, 'teszt válasz 8/3', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(39, 8, 'teszt válasz 8/4', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(40, 8, 'teszt válasz 8/5', 0, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(41, 8, 'teszt válasz 8/6', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(42, 9, 'teszt válasz 9/1', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(43, 9, 'teszt válasz 9/2', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(44, 9, 'teszt válasz 9/3', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(45, 9, 'teszt válasz 9/4', 1, '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(46, 9, 'teszt válasz 9/5', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(47, 9, 'teszt válasz 9/6', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(48, 10, 'teszt válasz 10/1', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(49, 10, 'teszt válasz 10/2', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(50, 10, 'teszt válasz 10/3', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(51, 10, 'teszt válasz 10/4', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(52, 10, 'teszt válasz 10/5', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(53, 10, 'teszt válasz 10/6', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(54, 11, 'Igen11', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(55, 11, 'Nem11', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(56, 12, 'Igen12', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(57, 12, 'Nem12', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(58, 13, 'Igen13', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(59, 13, 'Nem13', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(60, 14, 'Igen14', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(61, 14, 'Nem14', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(62, 15, 'Igen15', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(63, 15, 'Nem15', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(64, 16, 'Igen16', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(65, 16, 'Nem16', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(66, 17, 'Igen17', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(67, 17, 'Nem17', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(68, 18, 'Igen18', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(69, 18, 'Nem18', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(70, 19, 'Igen19', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(71, 19, 'Nem19', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(72, 20, 'Igen20', 0, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(73, 20, 'Nem20', 1, '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(74, 13, 'sdgsdg sds', 0, '2022-05-15 16:38:51', '2022-05-15 16:38:51'),
	(75, 13, 'fghfgfgh', 1, '2022-05-15 16:39:06', '2022-05-15 16:39:06');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;

-- Dumping structure for tábla frt.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for tábla frt.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_05_13_135219_create_quiz_table', 1),
	(6, '2022_05_13_135256_create_questions_table', 1),
	(7, '2022_05_13_135310_create_answers_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for tábla frt.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for tábla frt.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for tábla frt.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('binary','multiple') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'binary',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.questions: ~20 rows (approximately)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `question`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'teszt kérdés 1', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(2, 'teszt kérdés 2', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(3, 'teszt kérdés 3', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(4, 'teszt kérdés 4', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(5, 'teszt kérdés 5', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(6, 'teszt kérdés 6', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(7, 'teszt kérdés 7', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(8, 'teszt kérdés 8', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(9, 'teszt kérdés 9', 'multiple', '2022-05-15 15:20:44', '2022-05-15 15:20:44'),
	(10, 'teszt kérdés 10', 'multiple', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(11, 'teszt kérdés 11', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(12, 'teszt kérdés 12', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(13, 'teszt kérdés 13', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(14, 'teszt kérdés 14', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(15, 'teszt kérdés 15', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(16, 'teszt kérdés 16', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(17, 'teszt kérdés 17', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(18, 'teszt kérdés 18', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(19, 'teszt kérdés 19', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(20, 'teszt kérdés 20', 'binary', '2022-05-15 15:20:45', '2022-05-15 15:20:45'),
	(21, 'teszt32', 'multiple', '2022-05-15 16:02:48', '2022-05-15 16:02:48');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Dumping structure for tábla frt.quiz
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `started` tinyint(4) NOT NULL,
  `done` tinyint(4) NOT NULL,
  `time_left` smallint(6) DEFAULT NULL,
  `answered` tinyint(4) DEFAULT NULL,
  `correct_answers` tinyint(4) DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit_date` datetime DEFAULT NULL,
  `type` enum('binary','multiple') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'binary',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.quiz: ~0 rows (approximately)
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` (`id`, `started`, `done`, `time_left`, `answered`, `correct_answers`, `guest_name`, `guest_lastname`, `guest_email`, `submit_date`, `type`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 291, 5, 5, 'Sánta Zsolt', 'Sánta', 'zs0lt.santa@gmail.com', '2022-05-15 15:21:40', 'binary', '2022-05-15 15:21:31', '2022-05-15 15:21:40'),
	(2, 1, 1, 286, 10, 13, 'Sánta Zsolt', 'Sánta', 'teszt@teszt.hu', '2022-05-15 15:22:17', 'multiple', '2022-05-15 15:22:02', '2022-05-15 15:22:17'),
	(3, 1, 0, NULL, NULL, NULL, 'dsfgsd s', 'dssd', 'dgsd@asd.fr', NULL, 'multiple', '2022-05-15 15:24:37', '2022-05-15 15:24:37'),
	(4, 1, 1, 0, 0, 0, 'tesc0', 'Zsolt', 'teszt@teszt.hu', '2022-05-15 15:25:49', 'binary', '2022-05-15 15:25:39', '2022-05-15 15:25:49'),
	(5, 1, 1, 0, 0, 0, 'Sánta Zsolt', '34', '5', '2022-05-15 21:37:23', 'multiple', '2022-05-15 21:37:12', '2022-05-15 21:37:23'),
	(6, 1, 0, NULL, NULL, NULL, 'fsaf', 'dgsdg', 'sdgds', NULL, 'multiple', '2022-05-15 21:39:17', '2022-05-15 21:39:17'),
	(7, 1, 0, NULL, NULL, NULL, 'fsaf', 'dgsdg', 'sdgds', NULL, 'multiple', '2022-05-15 21:40:23', '2022-05-15 21:40:23'),
	(8, 1, 0, NULL, NULL, NULL, 'fsaf', 'dgsdg', 'sdgds', NULL, 'multiple', '2022-05-15 21:41:31', '2022-05-15 21:41:31'),
	(9, 1, 0, NULL, NULL, NULL, 'l', 'kk', 'hj', NULL, 'binary', '2022-05-15 21:42:02', '2022-05-15 21:42:02'),
	(10, 1, 0, NULL, NULL, NULL, 'lf', 'kk', 'hj', NULL, 'binary', '2022-05-15 21:42:24', '2022-05-15 21:42:24'),
	(11, 1, 0, NULL, NULL, NULL, 'lf', 'kk', 'hj', NULL, 'binary', '2022-05-15 21:42:48', '2022-05-15 21:42:48'),
	(12, 1, 0, NULL, NULL, NULL, 'lf', 'kk', 'hj', NULL, 'binary', '2022-05-15 21:43:01', '2022-05-15 21:43:01'),
	(13, 1, 1, 291, 3, 1, 'lf', 'kk', 'hj', '2022-05-15 21:43:22', 'binary', '2022-05-15 21:43:12', '2022-05-15 21:43:22');
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;

-- Dumping structure for tábla frt.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table frt.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Test Admin', 'test@teszt.hu', '2022-05-15 15:20:44', '$2y$10$.EaydMLAulBXIctG9.T6CuMWSBEiyHT0G1.jKmQu0jgjiHrA1x446', 'ZaBLTNUtEQ', '2022-05-15 15:20:44', '2022-05-15 15:20:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
