-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 05:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_si`
--

-- --------------------------------------------------------

--
-- Table structure for table `kompetensis`
--

CREATE TABLE `kompetensis` (
  `kodemapel` varchar(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kd1` text NOT NULL,
  `kd2` text NOT NULL,
  `kd3` text NOT NULL,
  `kd4` text NOT NULL,
  `kd5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensis`
--

INSERT INTO `kompetensis` (`kodemapel`, `jenis`, `kd1`, `kd2`, `kd3`, `kd4`, `kd5`) VALUES
('Fisika', 'kd_pengetahuan', 'lorem ipsum hehehe1', 'lorem ipsum hehehe2', 'lorem ipsum hehehe3', 'lorem ipsum hehehe4', 'lorem ipsum hehehe5');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswas`
--

CREATE TABLE `nilai_siswas` (
  `id` int(11) NOT NULL,
  `nisn` int(100) DEFAULT NULL,
  `kode_mapel` varchar(100) DEFAULT NULL,
  `semester` int(10) DEFAULT NULL,
  `nilai_pengetahuan` int(10) NOT NULL,
  `kd_pengetahuan` text,
  `nilai_praktek` int(10) DEFAULT NULL,
  `kd_praktek` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_siswas`
--

INSERT INTO `nilai_siswas` (`id`, `nisn`, `kode_mapel`, `semester`, `nilai_pengetahuan`, `kd_pengetahuan`, `nilai_praktek`, `kd_praktek`) VALUES
(34, 102809708, 'Fisika', 5, 30, 'lorem ipsum hehehe5', 34, NULL),
(35, 102809708, 'Fisika', 5, 30, 'lorem ipsum hehehe5', 34, NULL),
(36, 102809708, 'Fisika', 5, 30, 'lorem ipsum hehehe5', 34, NULL),
(37, 102809708, 'Fisika', 5, 30, 'lorem ipsum hehehe5', 34, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_stores`
--

CREATE TABLE `nilai_stores` (
  `id` int(100) NOT NULL,
  `nisn` int(100) NOT NULL,
  `kode_mapel` varchar(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kd1` int(100) DEFAULT NULL,
  `kd2` int(100) DEFAULT NULL,
  `kd3` int(100) DEFAULT NULL,
  `kd4` int(100) DEFAULT NULL,
  `kd5` int(100) DEFAULT NULL,
  `kd6` int(100) DEFAULT NULL,
  `kd7` int(100) DEFAULT NULL,
  `kd9` int(100) DEFAULT NULL,
  `kd10` int(100) DEFAULT NULL,
  `kd11` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_stores`
--

INSERT INTO `nilai_stores` (`id`, `nisn`, `kode_mapel`, `jenis`, `kd1`, `kd2`, `kd3`, `kd4`, `kd5`, `kd6`, `kd7`, `kd9`, `kd10`, `kd11`) VALUES
(1, 102809708, 'Fisika', 'pengetahuan', 10, 20, 30, 40, 50, NULL, NULL, NULL, NULL, NULL),
(2, 102809708, 'Fisika', 'keterampilan', 10, 20, 30, 40, 50, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `nisn` int(100) NOT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`nisn`, `nama`, `kelas`, `jurusan`, `semester`) VALUES
(102809708, 'Rizky Subagja', '12IPA5', 'IPA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodemapel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `kodemapel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Guru Fisika', 'gurufisika@gmail.com', '$2y$10$KKZ4biEwJCOfz8aM0.6.2./w6QID/ZIxyftGaU.3U2Rd55J2NZlXi', 'Fisika', 'pY61f5Ahqs3p6gPeEdRpV5mhGgKd492cEl13P36cKtYFXyQUHn4iBl2XUBTw', '2017-12-06 02:58:41', '2017-12-06 02:58:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kompetensis`
--
ALTER TABLE `kompetensis`
  ADD PRIMARY KEY (`kodemapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_siswas`
--
ALTER TABLE `nilai_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_stores`
--
ALTER TABLE `nilai_stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`nisn`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_siswas`
--
ALTER TABLE `nilai_siswas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `nilai_stores`
--
ALTER TABLE `nilai_stores`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
