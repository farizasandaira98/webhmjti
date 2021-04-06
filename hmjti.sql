-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 11:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmjti`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_artikel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_artikel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_tambahan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul_artikel`, `deskripsi`, `sumber`, `jenis_artikel`, `foto_tambahan`, `created_at`, `updated_at`) VALUES
(7, 'Baku Hantam Tdak Rame Rame', 'Walid', 'Pak Samsuri', 'tutorial dan info', 'Baku Hantam Tdak Rame Rame_tutorial dan info.jpg', '2021-02-28 00:16:59', '2021-02-28 00:17:17'),
(8, 'asdsafsdfsdf', 'sadfasdassxcasqsd', 'asdasdasfcvxcasd', 'tutorial dan info', 'asdsafsdfsdf_tutorial dan info.jpg', '2021-03-26 21:40:37', '2021-03-26 21:40:37'),
(9, 'sdfgdfhfghfgh', 'eyghbgfhfgh', 'dfghdfghdfgrwt', 'tutorial dan info', 'sdfgdfhfghfgh_tutorial dan info.jpg', '2021-03-26 21:40:53', '2021-03-26 21:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggotas`
--

CREATE TABLE `data_anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lapangan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_domisili` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tinggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_keaktifan` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_anggotas`
--

INSERT INTO `data_anggotas` (`id`, `npk`, `nim`, `nama`, `nama_lapangan`, `tempat_lahir`, `tanggal_lahir`, `alamat_domisili`, `alamat_tinggal`, `email`, `nomor_hp`, `foto`, `status_keaktifan`, `id_status`, `updated_at`, `created_at`) VALUES
(4, 'NPK/HMJ/TI/12-13/XIV/223', '345345435', 'Ahmad', 'Tayo', 'Asgard', '2021-04-07', 'America', 'Lebanon', 'walid@gmail.com', '08658723454545', '345345435_Ahmad.jpg', 'aktif', 2, '2021-04-06 09:34:56', '2021-04-06 09:34:56'),
(5, 'NPK/HMJ/TI/12-45/XIV/223', '175410034', 'Kipu', 'Toara', 'Sindue', '2021-04-07', 'Turkey', 'Ayam', 'walid@gmail.com', '08658723454545', '175410034_Kipu.jpg', 'nonaktif', 1, '2021-04-06 09:35:51', '2021-04-06 09:35:51'),
(6, 'NPK/HMJ/TI/12-233/XIV/54', '123123123', 'Sergio Ramos', 'Rundo', 'Mexico', '2021-04-14', 'Killer', 'Ayam', 'walid@gmail.com', '456345423423', '123123123_Sergio Ramos.jpg', 'aktif', 2, '2021-04-06 09:36:58', '2021-04-06 09:36:58'),
(7, '546435345', '657567567', 'sdfsvdegertg', 'dfsghst', 'ewrtdfgfdg', '2021-04-22', 'Parigi', 'Ayam', 'walid@gmail.com', '45345', '657567567_sdfsvdegertg.jpg', 'nonaktif', 1, '2021-04-06 09:37:37', '2021-04-06 09:37:37'),
(8, '6786876', '678878', 'gfhfbdtnhfbh', 'iytedujdr', 'awvesrw', '2021-04-08', 'wsrtvdseg', '6ehbrtghdd', 'muhfariza98@gmail.com', '456345423423', '678878_gfhfbdtnhfbh.jpg', 'nonaktif', 1, '2021-04-06 09:38:22', '2021-04-06 09:38:22'),
(9, '54447657', '456465', 'dssdfagver', 'ascfasdcew', 'CFDSA', '2021-04-08', 'ascfergvres', 'awefwaxfex', 'hmjti.stmikakakom@gmail.com', 'ascfefcaxef', '456465_dssdfagver.jpg', 'aktif', 2, '2021-04-06 09:39:01', '2021-04-06 09:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `data_kegiatans`
--

CREATE TABLE `data_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `tempat_kegiatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_divisi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kegiatans`
--

INSERT INTO `data_kegiatans` (`id`, `nama_kegiatan`, `deskripsi`, `tanggal_kegiatan`, `tempat_kegiatan`, `foto_kegiatan`, `id_divisi`, `created_at`, `updated_at`) VALUES
(2, 'Pembakaran', 'Hiyaaa', '2021-02-10', 'Alok', '[\"1_Pembakaran.jpg\",\"4c7e9365-686d-484f-913e-f07775b51c1c_Pembakaran.jpg\",\"2_Pembakaran.jpg\"]', 1, '2021-02-23 21:30:08', '2021-02-23 22:55:29'),
(3, '23423798483', '876876ghgfduutgjhu', '2021-03-27', 'Palu', '[\"ardiayawan_23423798483.jpg\"]', 1, '2021-03-26 21:02:19', '2021-03-26 21:03:19'),
(4, '909iuohjhgf', 'kjjhohuohuohuohhuohuoh', '2021-03-26', 'lkhjhbhgvygihujh', '[\"clean-cleaning-funny-2371_909iuohjhgf.jpg\"]', 1, '2021-03-26 21:03:00', '2021-03-26 21:03:00'),
(5, '6754675', 'tgfrjhrthyrghfgv', '2021-04-15', 'rybtryeyegt', '[\"Alfin_6754675.jpg\"]', 2, '2021-04-06 02:40:52', '2021-04-06 02:40:52'),
(6, '4356g4yfw4ey45', 'werdtewfge4y', '2021-04-08', 'g6y4f45dy4f4e5gy4', '[\"Alfin_4356g4yfw4ey45.jpg\",\"Danang_4356g4yfw4ey45.jpg\"]', 2, '2021-04-06 02:41:24', '2021-04-06 02:41:24'),
(7, '546756734f5trtyb', 'rdvtehdthbh', '2021-04-07', '4gy643gvb54fg', '[\"emanuel_546756734f5trtyb.jpg\",\"Alfin_546756734f5trtyb.jpg\"]', 2, '2021-04-06 02:41:54', '2021-04-06 02:41:54'),
(8, 'gdfgdsfgsdfgsdg', '34rt5dsfgdfgiushfuisdhfu', '2021-04-15', 'jasdhjhasfjsdhfjkdshf', '[\"Alfin_gdfgdsfgsdfgsdg.jpg\",\"bilal_gdfgdsfgsdfgsdg.jpg\"]', 3, '2021-04-06 02:44:31', '2021-04-06 02:44:49'),
(9, 'sokdfjsdkof', 'asdkmhnasjkcdhas', '2021-04-07', 'asdoksajdksh', '[\"Danang_sokdfjsdkof.jpg\",\"emanuel_sokdfjsdkof.jpg\"]', 3, '2021-04-06 02:45:25', '2021-04-06 02:45:25'),
(10, '093458340958', 'dsjkhndckjsadghas', '2021-04-21', 'jsdfhyhfjsdhf', '[\"Nita_093458340958.jpg\",\"Eka_093458340958.jpg\"]', 3, '2021-04-06 02:45:53', '2021-04-06 02:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_divisi` varchar(26) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id`, `nama_divisi`) VALUES
(1, 'Internal Division'),
(2, 'Skill Development Division'),
(3, 'Networking Division'),
(4, 'Umum');

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
-- Table structure for table `inventaris_barangs`
--

CREATE TABLE `inventaris_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_barang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris_barangs`
--

INSERT INTO `inventaris_barangs` (`id`, `nama_barang`, `satuan`, `jumlah`, `kondisi`, `sumber_barang`, `created_at`, `updated_at`) VALUES
(2, 'Gundu', 'Kg', '1', 'Rusak', 'HMJ TI', '2021-04-05 20:17:57', '2021-04-05 20:17:57'),
(3, 'Sapu', 'Buah', '1', 'Baik', 'HMJ TI', '2021-04-05 20:18:07', '2021-04-05 20:18:07');

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
(5, '2021_02_08_073715_create_data_anggotas_table', 2),
(11, '2014_10_12_000000_create_users_table', 3),
(12, '2014_10_12_100000_create_password_resets_table', 3),
(13, '2019_08_19_000000_create_failed_jobs_table', 3),
(14, '2021_02_08_071932_create_divisis_table', 3),
(15, '2021_02_08_085236_create_data_anggotas_table', 3),
(16, '2021_02_08_092422_create_data_kegiatans_table', 3),
(17, '2021_02_08_234043_create_status_anggotas_table', 4),
(18, '2021_02_08_234615_create_artikels_table', 5),
(19, '2021_02_08_235310_create_inventaris_barangs_table', 6),
(20, '2021_02_09_015212_create_surat_masuks_table', 7),
(21, '2021_02_09_015647_create_surat_keluars_table', 8),
(22, '2021_02_09_020519_create_pemasukans_table', 9),
(23, '2021_02_09_021309_create_pengeluarans_table', 10);

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
-- Table structure for table `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_nota` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pemasukan` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pemasukan` date NOT NULL,
  `sumber_dana` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `nomor_nota`, `jumlah_pemasukan`, `tanggal_pemasukan`, `sumber_dana`, `nota`, `periode`, `created_at`, `updated_at`) VALUES
(6, 'ab/53/pembelian', '13000', '2021-03-05', 'HMJ TI', 'Rudeus_(Future).jpg_2021-03-05_2020-2021.jpg', '2020-2021', '2021-03-05 04:59:21', '2021-03-05 04:59:21'),
(7, 'az/kg/belibuku', '13000', '2021-03-05', 'HMJ TI', 'Rudeus_(Future).jpg_2021-03-05_2020-2021.jpg', '2020-2021', '2021-03-05 05:01:48', '2021-03-05 05:01:48'),
(8, '4345345345', '56000', '2021-03-12', 'HMJ TI', 'Welcome Scan.jpg_2021-03-12_2020-2021.jpg', '2020-2021', '2021-03-12 03:05:39', '2021-03-12 03:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluarans`
--

CREATE TABLE `pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_nota` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pengeluaran` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `keperluan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluarans`
--

INSERT INTO `pengeluarans` (`id`, `nomor_nota`, `jumlah_pengeluaran`, `tanggal_pengeluaran`, `keperluan`, `nota`, `periode`, `created_at`, `updated_at`) VALUES
(1, '4345345345', '140000', '2021-03-19', 'Beli Sabun Cuci', 'Jadi.jpg_2021-03-19_2020-2021.jpg', '2020-2021', '2021-03-18 10:23:30', '2021-03-18 10:23:30'),
(2, '4345345345', '140000', '2021-03-19', 'Beli Nasi Goreng', 'Ayam-potong-564x355.png_2021-03-19_2020-2021.png', '2020-2021', '2021-03-18 10:23:51', '2021-03-18 10:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `status_anggotas`
--

CREATE TABLE `status_anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_anggota` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_anggotas`
--

INSERT INTO `status_anggotas` (`id`, `status_anggota`) VALUES
(1, 'Purna Anggota'),
(2, 'Anggota Inti');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluars`
--

CREATE TABLE `surat_keluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hal` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat_keluar` date NOT NULL,
  `tujuan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluars`
--

INSERT INTO `surat_keluars` (`id`, `no_surat`, `nama_kegiatan`, `hal`, `tanggal_surat_keluar`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, '123781289372', 'Hiyaaa', 'Hiyya', '2021-03-11', 'SDFJhsjdkfhsdkf', '2021-03-02 03:36:31', '2021-03-02 03:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuks`
--

CREATE TABLE `surat_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `perihal_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_surat` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `no_surat` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_masuks`
--

INSERT INTO `surat_masuks` (`id`, `perihal_surat`, `asal_surat`, `tanggal_surat`, `no_surat`, `created_at`, `updated_at`) VALUES
(2, 'Rapat paripurna', 'asdasdasd', '2021-04-07', '12-90-HMJ TI', '2021-04-05 20:23:11', '2021-04-05 20:23:11'),
(3, 'Rapat paripurna', 'HMJ Peler', '2021-04-08', '123781289372', '2021-04-05 20:23:24', '2021-04-05 20:23:24');

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
(2, 'Fariza', 'muhfariza98@gmail.com', '2021-02-18 01:45:23', '$2y$10$Hhyw0SMiYbbHDTuO0ylVSeX79uN4dfnSHH7PUEluFTGH8ue/gPfwq', NULL, '2021-02-18 01:45:23', '2021-02-18 01:45:23'),
(3, 'Hmj Ti', 'hmjti.stmikakakom@gmail.com', '2021-03-18 20:47:47', '$2y$10$MN/NSpE5Y9i1pHhkIPa1I.LgLi1noWb2ylFiHZE8rmr1hePe0dhfO', NULL, '2021-03-18 20:47:47', '2021-03-18 20:47:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_anggotas`
--
ALTER TABLE `data_anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kegiatans`
--
ALTER TABLE `data_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris_barangs`
--
ALTER TABLE `inventaris_barangs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_anggotas`
--
ALTER TABLE `status_anggotas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `surat_keluars`
--
ALTER TABLE `surat_keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_anggotas`
--
ALTER TABLE `data_anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_kegiatans`
--
ALTER TABLE `data_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris_barangs`
--
ALTER TABLE `inventaris_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengeluarans`
--
ALTER TABLE `pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_anggotas`
--
ALTER TABLE `status_anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_keluars`
--
ALTER TABLE `surat_keluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_masuks`
--
ALTER TABLE `surat_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
