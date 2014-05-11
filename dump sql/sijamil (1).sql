-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 12:15 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sijamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_peminjaman` time NOT NULL,
  `keperluan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ket_mahalum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ket_humas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ket_perlengkapan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ket_tolak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_peminjam` int(10) unsigned NOT NULL,
  `id_ruangan` int(10) unsigned NOT NULL,
  `jam_selesai` time NOT NULL,
  `nomor_telepon` text COLLATE utf8_unicode_ci NOT NULL,
  `visible_by_civitas` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `forms_id_peminjam_foreign` (`id_peminjam`),
  KEY `forms_id_ruangan_foreign` (`id_ruangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `email`, `tanggal`, `jam_peminjaman`, `keperluan`, `fasilitas`, `jumlah_peserta`, `status`, `ket_mahalum`, `ket_humas`, `ket_perlengkapan`, `ket_tolak`, `created_at`, `updated_at`, `id_peminjam`, `id_ruangan`, `jam_selesai`, `nomor_telepon`, `visible_by_civitas`) VALUES
(1, 'garret.kuphal@example.com', '1986-04-05', '14:13:14', 'Perspiciatis voluptatem delectus voluptatem consequatur.', 'Sint molestias optio.', 29, 'disamakan', '', '', '', '', '2014-04-14 00:31:44', '2014-04-14 00:31:44', 9, 4, '00:00:00', '', 'yes'),
(2, 'abelardo18@example.net', '1992-06-30', '02:05:37', 'Eveniet ut hic maiores quibusdam incidunt.', 'Pariatur est.', 59, 'Tolak', '', '', '', '', '2014-04-14 20:21:33', '2014-04-14 20:30:06', 5, 2, '00:00:00', '', 'yes'),
(3, 'joanny.hettinger@example.net', '1974-01-29', '11:48:45', 'Earum voluptates exercitationem autem iure asperiores exercitationem.', 'Explicabo qui dolor.', 59, 'Tolak', '', '', '', '', '2014-04-14 20:21:33', '2014-04-14 23:12:28', 5, 2, '00:00:00', '', 'yes'),
(9, 'ivanmasli@gmail.com', '0000-00-00', '12:12:00', 'Bla2', 'AC', 12, 'Diterima', 'mahalum', 'humas', 'perlengkapan', '', '2014-04-14 23:08:17', '2014-05-11 02:32:13', 4, 1, '14:12:00', '123456', 'yes'),
(10, 'ivanmasli@gmail.com', '0000-00-00', '33:33:00', 'sdnksc', 'AC', 32, 'Diterima', '', '', '', '', '2014-04-15 01:19:01', '2014-05-06 22:52:44', 4, 3, '33:33:00', '123456', 'yes'),
(11, 'ivanmasli@gmail.com', '0000-00-00', '12:12:00', 'dsdwd', 'AC', 0, 'Mahalum', '', '', '', '', '2014-04-15 01:20:09', '2014-05-07 01:04:07', 4, 4, '14:12:00', '323232', 'yes'),
(12, 'ivanmasli@gmail.com', '0000-00-00', '12:12:00', 'shdhwid', 'AC', 12, 'Tolak', '', '', '', '', '2014-04-15 01:24:22', '2014-05-11 03:14:40', 4, 12, '14:12:00', '123456', 'no'),
(13, 'ivanmasli@gmail.com', '0000-00-00', '12:12:00', 'kswlkdlwkd', 'AC', 12, 'Tolak', '', '', '', '', '2014-04-16 01:03:19', '2014-05-07 01:15:44', 4, 13, '14:12:00', '123456', 'yes'),
(14, '123123@askdsd.coasd', '0000-00-00', '12:00:00', '2323', 'haha', 0, 'Tolak', '', '', '', 'udah penuh', '2014-05-07 01:03:41', '2014-05-11 02:47:06', 4, 1, '10:02:00', '213213', 'yes'),
(15, 'gedehermawan2606@gmail.com', '2012-10-10', '10:00:00', 'coba dulu', 'komputer', 10, 'Mahalum', '', '', '', '', '2014-05-11 02:33:05', '2014-05-11 02:56:29', 4, 15, '11:00:00', '08568767195', 'yes'),
(16, 'gedehermawan2606@gmail.com', '2012-10-10', '10:00:00', 'testing', 'komputer', 10, 'Diterima', 'Jangan Ngaret ya', 'Dibersihin lagi ya', 'Sip dah', '', '2014-05-11 03:04:10', '2014-05-11 03:11:13', 4, 12, '11:00:00', '08568767195', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jamSelesai` time NOT NULL,
  `jamMulai` time NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `no_ruangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_04_04_144256_create_users_table', 1),
('2014_04_04_145427_create_forms_table', 1),
('2014_04_04_153057_create_jadwal_table', 1),
('2014_04_04_171733_create_ruangan_table', 1),
('2014_04_11_125622_create_menyetujui_form', 2),
('2014_04_11_131358_remove_id_peminjam_from_forms_table', 2),
('2014_04_11_135203_add_id_peminjaman_to_forms', 3),
('2014_04_11_141952_add_status_and_id_user_to_menyetujui_form_table', 4),
('2014_04_11_153612_add_foreign_key_id_ruangan_to_forms_table', 5),
('2014_05_07_073639_add_remember_token_to_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor_ruangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lantai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nomor_ruangan`, `kapasitas`, `fasilitas`, `lantai`, `created_at`, `updated_at`) VALUES
(1, '3111', 12, 'AC', 7, '2014-04-11 11:48:05', '2014-04-11 11:48:05'),
(2, '3112', 11, 'AC', 4, '2014-04-11 11:48:06', '2014-04-11 11:48:06'),
(3, '3113', 7, 'AC', 3, '2014-04-11 11:48:06', '2014-04-11 11:48:06'),
(4, '3111', 99, 'AC', 2, '2014-04-14 00:10:57', '2014-04-14 00:10:57'),
(5, '3112', 15, 'AC', 2, '2014-04-14 00:10:57', '2014-04-14 00:10:57'),
(6, '3113', 99, 'AC', 2, '2014-04-14 00:10:57', '2014-04-14 00:10:57'),
(7, '2301', 99, 'AC', 2, '2014-04-14 00:10:57', '2014-04-14 00:10:57'),
(8, '2302', 99, 'AC', 2, '2014-04-14 00:10:57', '2014-04-14 00:10:57'),
(9, '2303', 99, 'AC', 2, '2014-04-14 00:10:57', '2014-04-14 00:10:57'),
(10, '2304', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(11, '2305', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(12, '2306', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(13, '2401', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(14, '2402', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(15, '2403', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(16, '2404', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(17, '2405', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(18, '2406', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58'),
(19, '2502', 99, 'AC', 2, '2014-04-14 00:10:58', '2014-04-14 00:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(66) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `password`, `role`, `remember_token`) VALUES
(4, '2014-04-11 11:48:05', '2014-05-11 03:04:30', 'Ivan', '$2y$10$Xp27HmOX8jj3gN3aHP5TYOOTa6zbh5KxgOcEad1eU.ElM1X7o/2My', 'Civitas', 'CFG3ubRex5j92ekP7btvL9ec6Dcorv2fuvL8JsE4zQbQJWXXSN2rz2mLHuUV'),
(5, '2014-04-11 11:48:05', '2014-04-11 11:48:05', 'Ivan2', '123', 'Civitas', NULL),
(9, '2014-04-14 00:10:57', '2014-04-14 00:10:57', 'Ivan3', '123', 'Civitas', NULL),
(10, '2014-04-14 00:39:51', '2014-05-11 03:06:16', 'Humas', '$2y$10$Q.ZHRSt/b7GTTBCWXZweMumvCdrVxTDfF9.hpGECOVE1ASl.6rvcG', 'Humas', 'Dn6tp1zZ1YRZXdYcVHS0QjGdpq8he7V8qLUdEGLbJ8Yb0PtEc6OD1HgqtsKn'),
(11, '2014-04-14 21:09:04', '2014-05-11 03:11:16', 'Perlengkapan', '$2y$10$rC.IFFlpiwbeKQxmNWVEuuDJY.JX87weTurndW/7DW.unopc3FY9i', 'Perlengkapan', '4DTTYKi1AILuKk0itf4ewTOhJ3ZNJHtzYR7Zklbv2PGFqZTQESBbJZijL1mv'),
(12, '2014-04-14 21:09:04', '2014-05-11 03:10:49', 'Mahalum', '$2y$10$cmRc0Ed3...i3EObLf97K.0BTtED0RQnSLZaP8wDGyKiuXKHJjh9C', 'Mahalum', 'tLu8sYgJRe6NgN7blqRxuKqeNQkJu4XehRQcLvvZru9anKDPa7hWDFJc1IN7');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE IF NOT EXISTS `user_form` (
  `id_form` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_form`),
  KEY `menyetujui_form_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `forms_id_peminjam_foreign` FOREIGN KEY (`id_peminjam`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `forms_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`);

--
-- Constraints for table `user_form`
--
ALTER TABLE `user_form`
  ADD CONSTRAINT `menyetujui_form_id_form_foreign` FOREIGN KEY (`id_form`) REFERENCES `forms` (`id`),
  ADD CONSTRAINT `menyetujui_form_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
