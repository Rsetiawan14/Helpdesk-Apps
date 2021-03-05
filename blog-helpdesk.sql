-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 05:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog-helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIK` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `NIK`, `nama`, `divisi`, `bagian`, `created_at`, `updated_at`) VALUES
(1, '', '12', 'ical', 'IT', 'IT', '2020-02-12 07:25:31', NULL),
(2, '8', '15', 'Ini Apa', 'OB', 'OB', '2020-02-18 06:28:32', '2020-02-18 06:28:32'),
(3, '9', '15', 'Ini Apa', 'OB', 'OB', '2020-02-18 06:30:28', '2020-02-18 06:30:28'),
(4, '10', '2018', 'Sahid Sanjaya', 'IT', 'Infrastructure', '2020-02-18 06:47:30', '2020-02-18 06:47:30'),
(5, '11', '12', 'Agung Mulawan', 'IT', 'Data', '2020-02-23 03:34:22', '2020-02-23 03:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_27_102244_create_karyawan_table', 1),
(5, '2020_01_27_110501_create_helpdeskreq_table', 2),
(6, '2020_02_11_103244_change_helpdeskreq_to_employee_table', 3),
(7, '2020_02_11_123043_drop_helpdeskreq_table', 4),
(8, '2020_02_11_123156_drop_employee_table', 4),
(9, '2020_02_11_130835_create_employee_table', 5),
(10, '2020_02_12_104318_create_mstreport_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mstreport`
--

CREATE TABLE `mstreport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_req` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_req` date NOT NULL,
  `laporan` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan_req` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tech` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_tech` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_tech` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mstreport`
--

INSERT INTO `mstreport` (`id`, `status`, `user_id`, `nama_req`, `tgl_req`, `laporan`, `catatan_req`, `nama_tech`, `catatan_tech`, `tgl_tech`, `created_at`, `updated_at`) VALUES
(20, '3', '1', 'Ical', '2020-02-25', 'Instalasi', 'printer', 'Ical', 'sudah diperbaiki', '2020-02-25', '2020-02-25 04:31:16', '2020-02-24 21:31:16'),
(21, '2', '1', 'Ical', '2020-03-02', 'Instalasi', 'printer baru', 'Ical', 'sudah bisa', '2020-03-02', '2020-03-02 11:07:41', '2020-03-02 04:07:41'),
(22, '1', '1', 'Ical', '2020-03-03', 'Email', 'user baru', NULL, NULL, NULL, '2020-03-03 13:41:15', '2020-03-03 06:41:13'),
(23, '0', '1', 'Ical', '2020-03-03', 'Instalasi', 'printer', NULL, NULL, NULL, '2020-03-03 06:40:46', '2020-03-03 06:40:46'),
(24, '1', '1', 'Ical', '2020-03-12', 'Perbaikan', 'PC rusak', NULL, NULL, NULL, '2020-03-12 04:14:04', '2020-03-11 21:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'Ical', 'affan.tampubolon@gmail.com', NULL, '$2y$10$WUC3Crfom83ziSy9BXYrJOCdgkqt3sNKsMkhCLVp.MGpTf6zE/FZi', 'Q1cZLZ8iCRcdhCSdPTFnFJDYjGq18WzxHpBPnA5hbEdHDZicovEbFYnvpnH5', '2020-02-10 20:47:19', '2020-02-10 20:47:19'),
(9, 'Karyawan', 'Ini Apa', 'iniitu@yahoo.com', NULL, '$2y$10$M/kCqWq.dK8W8uqUyWn19eyz9BLT1HPFIW/IQcLbvZ17ev3F8brs6', 'CRLmAzesyM00ch5RN1rcEv1A0JfJjF6HJlcxGIFNBwhyuDpdnzqbrF15ut69', '2020-02-18 06:30:28', '2020-02-18 06:30:28'),
(10, 'TI', 'Sahid Sanjaya', 'sahid@zimbra.com', NULL, '$2y$10$2nR6.sA1vH8fifr5JCcMS.J8jAMs7T/tFkoSFxuuibaEQpufA6IHm', 'Uo5myYWAX5xlE3rtSymYLOO88rxhMJXuaDjeNuk8xkbKELFVyadnG9cXbkLs', '2020-02-18 06:47:30', '2020-02-18 06:47:30'),
(11, 'Karyawan', 'Agung Mulawan', 'agung@zimbra.com', NULL, '$2y$10$g1ZnDEPBvR8ahHH0qzwI..kcShateQoHWM/7yWrlJezjEQvNMZIWy', 'TyF2EPLGRw90LCIvXKVoRlfCKlWUCc43BKWrxp6hGMzKTlvVyOPFC0ARr1ou', '2020-02-23 03:34:21', '2020-02-23 03:34:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstreport`
--
ALTER TABLE `mstreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mstreport`
--
ALTER TABLE `mstreport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
