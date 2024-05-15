-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2024 at 08:17 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `prenom`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$12$dHxVqhpuo1oF8wtVcs5EXOvaVWvLse2y7674QaYnCGndthhIpMTIO', '2024-05-11 20:04:02', '2024-05-11 20:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_permis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clients_num_permis_unique` (`num_permis`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `password`, `num_permis`, `created_at`, `updated_at`) VALUES
(1, 'Elbaz', 'Youness', '$2y$12$94pAxJyuX247Ue1cfYQ/JuFvMyTmEu8YodueRREdp2P9lvOneiZnO', 'Elbaz', '2024-05-11 19:12:31', '2024-05-11 19:12:31'),
(2, 'Ben', 'Hamza', '$2y$12$94pAxJyuX247Ue1cfYQ/JuFvMyTmEu8YodueRREdp2P9lvOneiZnO', '54248', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_client` bigint UNSIGNED NOT NULL,
  `id_voiture` bigint UNSIGNED NOT NULL,
  `date_debut_location` date NOT NULL,
  `date_fin_location` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `locations_id_client_foreign` (`id_client`),
  KEY `locations_id_voiture_foreign` (`id_voiture`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `id_client`, `id_voiture`, `date_debut_location`, `date_fin_location`, `created_at`, `updated_at`) VALUES
(9, 1, 1, '2024-05-13', '2024-05-21', '2024-05-12 14:09:35', '2024-05-12 14:09:35'),
(8, 1, 5, '2024-05-13', '2024-05-14', '2024-05-12 13:55:23', '2024-05-12 13:55:23'),
(7, 1, 4, '2024-05-12', '2024-05-14', '2024-05-12 13:50:16', '2024-05-12 13:50:16'),
(10, 1, 5, '2024-05-14', '2024-05-23', '2024-05-12 14:09:51', '2024-05-12 14:09:51'),
(11, 2, 5, '2024-05-14', '2024-05-21', '2024-05-12 14:11:38', '2024-05-12 14:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_05_08_154552_create_clients_table', 1),
(2, '2024_05_08_170247_create_voitures_table', 1),
(3, '2024_05_08_170309_create_locations_table', 1),
(4, '2024_05_11_205910_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `voitures`
--

DROP TABLE IF EXISTS `voitures`;
CREATE TABLE IF NOT EXISTS `voitures` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `immatriculation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_assurance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kilometrage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `voitures_immatriculation_unique` (`immatriculation`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `voitures`
--

INSERT INTO `voitures` (`id`, `immatriculation`, `num_assurance`, `kilometrage`, `created_at`, `updated_at`) VALUES
(1, 'XYZ789', '555444333', '45000', '2024-05-11 10:30:00', '2024-05-11 10:30:00'),
(2, 'LMN456', '222333444', '55000', '2024-05-11 10:35:00', '2024-05-11 10:35:00'),
(3, 'OPQ123', '888777666', '48000', '2024-05-11 10:40:00', '2024-05-11 10:40:00'),
(4, 'RST987', '999000111', '7000', '2024-05-11 10:45:00', '2024-05-11 10:45:00'),
(5, 'UVW456', '123456789', '30000', '2024-05-11 10:50:00', '2024-05-11 10:50:00'),
(6, 'JKL123', '987654321', '20000', '2024-05-11 10:55:00', '2024-05-11 10:55:00'),
(7, 'ABC987', '456789123', '10000', '2024-05-11 11:00:00', '2024-05-11 11:00:00'),
(8, 'DEF123', '654987321', '80000', '2024-05-11 11:05:00', '2024-05-11 11:05:00'),
(9, 'GHI456', '789321654', '6000', '2024-05-11 11:10:00', '2024-05-11 11:10:00'),
(10, 'JKL789', '321654987', '40000', '2024-05-11 11:15:00', '2024-05-11 11:15:00'),
(14, 'IKF789', '651654987', '50000', '2024-05-12 12:13:57', '2024-05-12 12:15:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
