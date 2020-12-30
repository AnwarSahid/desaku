-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 09:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `danadesa`
--

CREATE TABLE `danadesa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` varchar(255) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `penggunaan` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danadesa`
--

INSERT INTO `danadesa` (`id`, `tanggal`, `pemasukan`, `sumber`, `pengeluaran`, `penggunaan`, `total`, `created_at`, `updated_at`) VALUES
(13, '2020-12-01', '1 M', 'Pemerintah Pusat', '-', '-', '1 M', '2020-12-29 21:55:29.000000', '2020-12-29 21:55:29.000000'),
(14, '2020-12-05', '-', '-', '50 JT', 'Perbaikan Jalan', '950 JT', '2020-12-29 21:56:08.000000', '2020-12-29 21:56:08.000000'),
(15, '2020-12-07', '10 JT', 'Provinsi', '5 JT', 'Web Profile Desa', '955 JT', '2020-12-29 21:57:03.000000', '2020-12-29 21:57:03.000000'),
(16, '2020-12-12', '-', '-', '10 JT', 'Posiandu', '945 JT', '2020-12-29 21:58:05.000000', '2020-12-29 21:58:05.000000'),
(17, '2020-12-14', '50 JT', 'Kabupaten', '-', '-', '995 JT', '2020-12-29 21:59:16.000000', '2020-12-29 21:59:16.000000'),
(18, '2020-12-17', '-', '-', '300 JT', 'Pembangunan Pekon', '695 JT', '2020-12-29 22:00:18.000000', '2020-12-29 22:00:18.000000'),
(19, '2020-12-19', '-', '-', '10 JT', 'Pembayaran Gaji', '685 JT', '2020-12-29 22:00:59.000000', '2020-12-29 22:00:59.000000'),
(20, '2020-12-25', '-', '-', '5 JT', 'Kegiatan Pemuda', '680 JT', '2020-12-29 22:02:16.000000', '2020-12-29 22:02:16.000000'),
(21, '2020-12-11', '-', '-', '10 JT', 'gaji  guru ngaji', '670 JT', '2020-12-29 23:33:57.000000', '2020-12-29 23:33:57.000000');

-- --------------------------------------------------------

--
-- Table structure for table `danaswadaya`
--

CREATE TABLE `danaswadaya` (
  `iddw` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` varchar(255) NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `penggunaan` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danaswadaya`
--

INSERT INTO `danaswadaya` (`iddw`, `tanggal`, `pemasukan`, `sumber`, `pengeluaran`, `penggunaan`, `total`, `created_at`, `updated_at`) VALUES
(9, '2020-11-04', '150 JT', 'Dana Desa', '-', '-', '150 JT', '2020-12-29 22:03:13.000000', '2020-12-29 22:03:13.000000'),
(10, '2020-11-07', '50 JT', 'Pemerintah Pusat', '-', '-', '200 JT', '2020-12-29 22:04:57.000000', '2020-12-29 22:04:57.000000'),
(11, '2020-12-18', '-', '-', '30 JT', 'Renovasi Masjid', '170 JT', '2020-12-29 23:34:55.000000', '2020-12-29 23:34:55.000000'),
(12, '2020-12-19', '-', '-', '50 JT', 'Subsidi Pupuk poktan', '130 JT', '2020-12-29 23:35:45.000000', '2020-12-29 23:35:45.000000'),
(13, '2020-12-24', '20 JT', 'Urunan dana bulanan', '-', '-', '150 JT', '2020-12-29 23:36:19.000000', '2020-12-29 23:36:19.000000'),
(14, '2020-12-25', '-', '-', '10 JT', 'Kegiatan Religi', '140 JT', '2020-12-30 00:24:04.000000', '2020-12-30 00:24:04.000000'),
(15, '2020-12-26', '-', '-', '20 JT', 'Pengadaan Bibit', '120 JT', '2020-12-30 00:24:57.000000', '2020-12-30 00:24:57.000000'),
(16, '2020-12-18', '10 JT', 'Sedekah', '-', '-', '130 JT', '2020-12-30 00:27:33.000000', '2020-12-30 00:27:33.000000');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nik` char(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nama`, `nik`, `tanggal_lahir`, `email`, `jenis_kelamin`, `updated_at`, `created_at`) VALUES
(5, 'Anwar Sahid', '1234567891234567', '2020-12-23', 'anwarsahid@gmail.com', 'Laki-laki', '2020-12-28 10:54:28', '2020-12-27 17:53:38'),
(15, 'anwar', '1234567890123121', '2020-12-11', 'anwar@gmail.com', 'Laki-laki', '2020-12-28 20:52:17', '2020-12-29 03:52:17'),
(16, 'rama', '1200003123009800', '1992-10-07', 'rama@gmail.com', 'Laki-laki', '2020-12-29 23:29:54', '2020-12-30 06:29:54'),
(17, 'Dian Sastro', '8000000089775541', '2001-12-12', 'Dian@yahoo.com', 'Laki-laki', '2020-12-29 23:30:41', '2020-12-30 06:30:41'),
(18, 'muhammad sudirman', '1213213941319121', '2001-01-01', 'Sudir@students.unila.ac.id', 'Laki-laki', '2020-12-29 23:31:43', '2020-12-30 06:31:43'),
(19, 'Yuni', '1821100000099880', '2020-12-02', 'Yuni@yahoo.com', 'Laki-laki', '2020-12-29 23:32:19', '2020-12-30 06:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_12_28_014951_create_table_danadesa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_danadesa`
--

CREATE TABLE `table_danadesa` (
  `id_danadesa` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengeluaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penggunaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_danadesa`
--

INSERT INTO `table_danadesa` (`id_danadesa`, `tanggal`, `pemasukan`, `sumber`, `pengeluaran`, `penggunaan`, `total`, `sisa`, `created_at`, `updated_at`) VALUES
(1, '2020-12-29', '100 jt', 'hibah', '', '', '100 jt', '100 jt', NULL, NULL),
(2, '2020-12-30', '100 jt', 'pemerintah', '', '', '100 jt', '100 jt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2020-12-16', '', '', '50 jt', 'pembangunan', '50 jt', '50 jt', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'anwar sahid', 'afi@gmail.com', NULL, '$2y$10$DyNiyUYcyfbir4t2O74kxuLFm/4Exngkf4MnphTNgRSLj//CCLLv6', NULL, '2020-12-27 21:49:26', '2020-12-27 21:49:26'),
(11, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$pzvKcypLMnOtI1yP4Oz/Cuu9HT4e4vN04ZsrZiizQkYLUvXFXMRbG', NULL, '2020-12-29 09:26:41', '2020-12-29 09:26:41'),
(12, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$VUBugfIFj9TvW3gWdwyQ0efGqggDEhKdA535.bbkGcbzIzkZFX8Hm', NULL, '2020-12-29 09:27:25', '2020-12-29 09:27:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danadesa`
--
ALTER TABLE `danadesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danaswadaya`
--
ALTER TABLE `danaswadaya`
  ADD PRIMARY KEY (`iddw`);

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `table_danadesa`
--
ALTER TABLE `table_danadesa`
  ADD PRIMARY KEY (`id_danadesa`);

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
-- AUTO_INCREMENT for table `danadesa`
--
ALTER TABLE `danadesa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `danaswadaya`
--
ALTER TABLE `danaswadaya`
  MODIFY `iddw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_danadesa`
--
ALTER TABLE `table_danadesa`
  MODIFY `id_danadesa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
