-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 09:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `autas`
--

CREATE TABLE `autas` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `specifikacija_id` int(11) NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cijena` int(11) NOT NULL,
  `godiste` int(11) NOT NULL,
  `kilometraza` int(11) NOT NULL,
  `drzava` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proizvodjac` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gorivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stanje` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naslovna_slika` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autas`
--

INSERT INTO `autas` (`id`, `user_id`, `specifikacija_id`, `naziv`, `cijena`, `godiste`, `kilometraza`, `drzava`, `grad`, `proizvodjac`, `model`, `gorivo`, `stanje`, `naslovna_slika`, `created_at`, `updated_at`) VALUES
(12, 2, 61, 'Audi A3', 12000, 2010, 200000, '2', '5', '3', '2', 'Dizel', 'Polovno', '12_0.07525000 1510734554.jpg', '2017-11-15 07:29:14', '2017-11-15 07:29:14'),
(13, 2, 62, 'Audi A6', 10000, 2002, 250000, '3', '1', '3', '5', 'Dizel', 'Polovno', '13_0.64871300 1510734702.jpg', '2017-11-15 07:31:42', '2017-11-15 07:31:42'),
(14, 2, 63, 'Audi Q7', 77000, 2014, 150000, '2', '6', '3', '11', 'Benzin', 'Polovno', '14_0.39083400 1510734787.jpg', '2017-11-15 07:33:07', '2017-11-15 07:33:07'),
(15, 2, 64, 'BMW X5', 20000, 2012, 210000, '2', '7', '2', '18', 'Dizel', 'Osteceno', '15_0.48074200 1510734909.jpg', '2017-11-15 07:35:09', '2017-11-15 07:35:09'),
(16, 2, 65, 'BMW X6', 120000, 2017, 0, '2', '6', '2', '19', 'Dizel', 'Novo', '16_0.87119500 1510735084.jpg', '2017-11-15 07:38:04', '2017-11-15 07:38:04'),
(17, 2, 66, 'BMW M5', 50000, 2015, 140000, '3', '2', '2', '24', 'Benzin', 'Polovno', '17_0.69915200 1510736307.jpg', '2017-11-15 07:39:29', '2017-11-15 07:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `auta_oprema`
--

CREATE TABLE `auta_oprema` (
  `id` int(10) UNSIGNED NOT NULL,
  `auta_id` int(11) NOT NULL,
  `oprema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auta_oprema`
--

INSERT INTO `auta_oprema` (`id`, `auta_id`, `oprema_id`) VALUES
(90, 12, 1),
(91, 12, 3),
(92, 12, 5),
(93, 12, 6),
(94, 12, 7),
(95, 12, 8),
(96, 12, 14),
(97, 13, 1),
(98, 13, 2),
(99, 13, 3),
(100, 13, 5),
(101, 13, 6),
(102, 13, 7),
(103, 13, 8),
(104, 13, 9),
(105, 13, 10),
(106, 13, 11),
(107, 13, 14),
(108, 14, 1),
(109, 14, 2),
(110, 14, 3),
(111, 14, 4),
(112, 14, 5),
(113, 14, 6),
(114, 14, 7),
(115, 14, 8),
(116, 14, 9),
(117, 14, 10),
(118, 14, 11),
(119, 14, 12),
(120, 14, 13),
(121, 14, 14),
(122, 15, 1),
(123, 15, 2),
(124, 15, 3),
(125, 15, 6),
(126, 15, 7),
(127, 15, 8),
(128, 15, 9),
(129, 15, 13),
(130, 15, 14),
(131, 16, 1),
(132, 16, 2),
(133, 16, 3),
(134, 16, 4),
(135, 16, 5),
(136, 16, 6),
(137, 16, 7),
(138, 16, 8),
(139, 16, 9),
(140, 16, 10),
(141, 16, 11),
(142, 16, 12),
(143, 16, 13),
(144, 16, 14),
(145, 17, 1),
(146, 17, 2),
(147, 17, 3),
(148, 17, 6),
(149, 17, 7),
(150, 17, 8),
(151, 17, 9),
(152, 17, 10),
(153, 17, 11),
(154, 17, 12),
(155, 17, 14);

-- --------------------------------------------------------

--
-- Table structure for table `drzavas`
--

CREATE TABLE `drzavas` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drzavas`
--

INSERT INTO `drzavas` (`id`, `naziv`) VALUES
(1, 'Sve Drzave'),
(2, 'Srbija'),
(3, 'Bosna i Hercegovina');

-- --------------------------------------------------------

--
-- Table structure for table `galerijas`
--

CREATE TABLE `galerijas` (
  `id` int(10) UNSIGNED NOT NULL,
  `auta_id` int(11) NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galerijas`
--

INSERT INTO `galerijas` (`id`, `auta_id`, `naziv`, `created_at`, `updated_at`) VALUES
(11, 12, '12_0.39632300 1510734555.jpg', '2017-11-15 07:29:15', '2017-11-15 07:29:15'),
(12, 12, '12_0.54162100 1510734555.jpg', '2017-11-15 07:29:15', '2017-11-15 07:29:15'),
(13, 13, '13_0.14828000 1510734703.jpg', '2017-11-15 07:31:43', '2017-11-15 07:31:43'),
(14, 13, '13_0.19346400 1510734703.jpg', '2017-11-15 07:31:43', '2017-11-15 07:31:43'),
(15, 14, '14_0.33273100 1510734788.jpg', '2017-11-15 07:33:08', '2017-11-15 07:33:08'),
(16, 14, '14_0.40386600 1510734788.jpg', '2017-11-15 07:33:08', '2017-11-15 07:33:08'),
(17, 14, '14_0.45504500 1510734788.jpg', '2017-11-15 07:33:08', '2017-11-15 07:33:08'),
(18, 15, '15_0.00160700 1510734910.jpg', '2017-11-15 07:35:10', '2017-11-15 07:35:10'),
(19, 15, '15_0.05767000 1510734910.jpg', '2017-11-15 07:35:10', '2017-11-15 07:35:10'),
(20, 15, '15_0.08985100 1510734910.jpg', '2017-11-15 07:35:10', '2017-11-15 07:35:10'),
(21, 15, '15_0.13787200 1510734910.jpg', '2017-11-15 07:35:10', '2017-11-15 07:35:10'),
(22, 16, '16_0.57881000 1510735085.jpg', '2017-11-15 07:38:05', '2017-11-15 07:38:05'),
(23, 16, '16_0.61849400 1510735085.jpg', '2017-11-15 07:38:05', '2017-11-15 07:38:05'),
(24, 16, '16_0.66082300 1510735085.jpg', '2017-11-15 07:38:05', '2017-11-15 07:38:05'),
(25, 16, '16_0.70109800 1510735085.jpg', '2017-11-15 07:38:05', '2017-11-15 07:38:05'),
(26, 17, '17_0.75492700 1510736307.jpg', '2017-11-15 07:58:27', '2017-11-15 07:58:27'),
(27, 17, '17_0.80494300 1510736307.jpg', '2017-11-15 07:58:27', '2017-11-15 07:58:27'),
(28, 17, '17_0.83849000 1510736307.jpg', '2017-11-15 07:58:27', '2017-11-15 07:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `grads`
--

CREATE TABLE `grads` (
  `id` int(10) UNSIGNED NOT NULL,
  `drzava_id` int(11) NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grads`
--

INSERT INTO `grads` (`id`, `drzava_id`, `naziv`) VALUES
(1, 3, 'Bijeljina'),
(2, 3, 'Brcko'),
(3, 3, 'Sarajevo'),
(4, 3, 'Tuzla'),
(5, 2, 'Loznica'),
(6, 2, 'Beograd'),
(7, 2, 'Novi Sad'),
(8, 2, 'Nis');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2017_10_17_073413_create_drzavas_table', 1),
(34, '2017_10_17_073432_create_grads_table', 1),
(36, '2017_10_19_084132_create_models_table', 1),
(37, '2017_10_31_080250_create_autas_table', 2),
(38, '2017_10_31_081147_create_opremas_table', 3),
(42, '2017_10_19_084120_create_proizvodjacs_table', 4),
(43, '2017_10_31_083026_create_oprema_auta_table', 5),
(44, '2017_10_31_081212_create_galerijas_table', 6),
(45, '2017_10_31_081301_create_specifikacijas_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(10) UNSIGNED NOT NULL,
  `proizvodjac_id` int(11) NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `proizvodjac_id`, `naziv`) VALUES
(1, 3, 'A1'),
(2, 3, 'A3'),
(3, 3, 'A4'),
(4, 3, 'A5'),
(5, 3, 'A6'),
(6, 3, 'A7'),
(7, 3, 'A8'),
(8, 3, 'Q2'),
(9, 3, 'Q3'),
(10, 3, 'Q5'),
(11, 3, 'Q7'),
(13, 3, 'TT'),
(14, 2, 'X1'),
(15, 2, 'X2'),
(16, 2, 'X3'),
(17, 2, 'X4'),
(18, 2, 'X5'),
(19, 2, 'X6'),
(20, 2, 'M2'),
(21, 2, 'M3'),
(22, 2, 'M3'),
(23, 2, 'M4'),
(24, 2, 'M5'),
(25, 2, 'M6');

-- --------------------------------------------------------

--
-- Table structure for table `opremas`
--

CREATE TABLE `opremas` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opremas`
--

INSERT INTO `opremas` (`id`, `naziv`) VALUES
(1, 'Airbag'),
(2, 'Alu Felge'),
(3, 'Daljinsko Otkuljcavanje'),
(4, 'Dvozonska klima'),
(5, 'Klima'),
(6, 'ABS kocnice'),
(7, 'Alarm'),
(8, 'Centralna brava'),
(9, 'Digitalna klima'),
(10, 'ESP'),
(11, 'ISOFIX'),
(12, 'Komande na volanu'),
(13, 'Auto kuka'),
(14, 'Servo volan');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjacs`
--

CREATE TABLE `proizvodjacs` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodjacs`
--

INSERT INTO `proizvodjacs` (`id`, `naziv`) VALUES
(1, 'Svi Proizvodjaci'),
(2, 'BMW'),
(3, 'Audi');

-- --------------------------------------------------------

--
-- Table structure for table `specifikacijas`
--

CREATE TABLE `specifikacijas` (
  `id` int(10) UNSIGNED NOT NULL,
  `prenos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapacitet_goriva` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potrosnja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj_vrata` int(11) NOT NULL,
  `broj_sjedista` int(11) NOT NULL,
  `pogon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eksterijer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enterijer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specifikacijas`
--

INSERT INTO `specifikacijas` (`id`, `prenos`, `kapacitet_goriva`, `potrosnja`, `broj_vrata`, `broj_sjedista`, `pogon`, `eksterijer`, `enterijer`, `created_at`, `updated_at`) VALUES
(61, 'Manuelni', '50', '8', 5, 5, 'Prednji', 'Plava', 'Crna', '2017-11-15 07:29:13', '2017-11-15 07:29:13'),
(62, 'Manuelni', '50', '7', 5, 5, 'Zadnji', 'Smedja', 'Crna', '2017-11-15 07:31:42', '2017-11-15 07:31:42'),
(63, 'Automatik', '80', '12', 5, 5, 'Zadnji', 'Crna', 'Crna', '2017-11-15 07:33:07', '2017-11-15 07:33:07'),
(64, 'Manuelni', '80', '10', 5, 5, 'Zadnji', 'Siva', 'Smedja', '2017-11-15 07:35:09', '2017-11-15 07:35:09'),
(65, 'Automatik', '80', '12', 5, 5, '4x4', 'Crna', 'Crna', '2017-11-15 07:38:04', '2017-11-15 07:38:04'),
(66, 'Automatik', '55', '9', 5, 5, 'Zadnji', 'Plava', 'Siva', '2017-11-15 07:39:29', '2017-11-15 07:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `telefon`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mile', '13243252', 'test@test.com', '$2y$10$VEVl.YzEyKIlMy32Q1blauuvzK6OiEwZxvhFJxTP7kxnx8yqK3G8G', 'il8NtvtKVPI0FUzC4cNkZcZNDWJzOZN7LgVJ9A5Of8FmjTQF52ViNlnOTdFf', '2017-11-10 11:42:02', '2017-11-10 11:42:02'),
(2, 'Lemi', '1234', 'mile_cacanovic@hotmail.com', '$2y$10$LwSHxPpnwG/CpvU8b6lTdOy5xIHjLNRyLEk6J3UN3NVg3PTm0VY62', '93MMWdIFoeQdltymlLGBfUydLdONzkIq6ZG7DnKQAnK5mOSClyRuF0wdEWDG', '2017-11-15 07:10:52', '2017-11-15 07:10:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autas`
--
ALTER TABLE `autas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auta_oprema`
--
ALTER TABLE `auta_oprema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drzavas`
--
ALTER TABLE `drzavas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerijas`
--
ALTER TABLE `galerijas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grads`
--
ALTER TABLE `grads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opremas`
--
ALTER TABLE `opremas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodjacs`
--
ALTER TABLE `proizvodjacs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifikacijas`
--
ALTER TABLE `specifikacijas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autas`
--
ALTER TABLE `autas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `auta_oprema`
--
ALTER TABLE `auta_oprema`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `drzavas`
--
ALTER TABLE `drzavas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galerijas`
--
ALTER TABLE `galerijas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `grads`
--
ALTER TABLE `grads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `opremas`
--
ALTER TABLE `opremas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `proizvodjacs`
--
ALTER TABLE `proizvodjacs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `specifikacijas`
--
ALTER TABLE `specifikacijas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
