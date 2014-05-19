-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2014 at 10:20 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
  `Link` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `forms_id_peminjam_foreign` (`id_peminjam`),
  KEY `forms_id_ruangan_foreign` (`id_ruangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `email`, `tanggal`, `jam_peminjaman`, `keperluan`, `fasilitas`, `jumlah_peserta`, `status`, `ket_mahalum`, `ket_humas`, `ket_perlengkapan`, `ket_tolak`, `created_at`, `updated_at`, `id_peminjam`, `id_ruangan`, `jam_selesai`, `nomor_telepon`, `visible_by_civitas`, `Link`) VALUES
(3, 'chanek@ui.ac.id', '2014-05-29', '14:30:00', 'qwertyuiop', 'apapun yang ada', 23, 'Tolak', '', '', '', 'Akan dipakai', '2014-05-14 01:27:43', '2014-05-14 01:31:05', 11, 20, '15:30:00', '1234578', 'yes', ''),
(4, 'chanek@ui.ac.id', '2014-05-30', '14:30:00', 'qwertyu', 'qwertyu', 12345678, 'Diterima', 'qwetyuiop', 'Bisa', 'qwert', '', '2014-05-14 01:35:28', '2014-05-14 01:49:14', 4, 20, '16:30:00', '123456', 'yes', ''),
(5, 'chan@ui.ac.id', '2014-05-30', '14:30:00', 'qwertyui', 'qwertyu', 12345, 'Tolak', '', '', '', 'lalala', '2014-05-14 01:38:01', '2014-05-14 01:38:42', 4, 26, '16:30:00', '123456', 'yes', ''),
(6, 'ibrahim.nurandita@ui.ac.id', '2014-10-10', '15:00:00', 'asidsad\r\n', 'Haha', 30, 'Diterima', 'lkaslkdjsad', 'oke', 'yeaah', '', '2014-05-19 00:52:57', '2014-05-19 01:17:32', 4, 20, '16:30:00', '085692678181', 'yes', 'http://localhost/sijamil/public/uploads/budgets/UISq5g18kX.pdf');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nomor_ruangan`, `kapasitas`, `fasilitas`, `lantai`, `created_at`, `updated_at`) VALUES
(20, '2301', 65, 'AC, Layar, Infocus, White Board', 3, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(21, '2302', 67, 'AC, Layar, Infocus, White Board', 3, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(22, '2303', 67, 'AC, Layar, Infocus, White Board', 3, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(23, '2304-2305', 100, 'AC, Layar, Infocus, White Board', 3, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(24, '2306', 70, 'AC, Layar, Infocus, White Board', 3, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(25, '2307', 70, 'AC, Layar, Infocus, White Board', 3, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(26, '2401', 53, 'AC, Layar, Infocus, White Board', 4, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(27, '2402-2403', 120, 'AC, Layar, Infocus, White Board', 4, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(28, '2404', 40, 'AC, Layar, Infocus, White Board', 4, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(29, '2405', 70, 'AC, Layar, Infocus, White Board', 4, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(30, '2502', 53, 'AC, Layar, Infocus, White Board', 5, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(31, '2602', 52, 'AC, Layar, Infocus, White Board', 6, '2014-05-12 17:41:04', '2014-05-12 17:41:04'),
(32, '2603', 70, 'AC, Layar, Infocus, White Board', 6, '2014-05-12 17:41:05', '2014-05-12 17:41:05'),
(33, 'Aula', 180, 'AC, Layar, Infocus, White Board', 1, '2014-05-12 17:41:05', '2014-05-12 17:41:05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `password`, `role`, `remember_token`) VALUES
(4, '2014-04-11 11:48:05', '2014-05-19 01:07:14', 'Ivan', '$2y$10$Xp27HmOX8jj3gN3aHP5TYOOTa6zbh5KxgOcEad1eU.ElM1X7o/2My', 'Civitas', 'W2qwrBO1lMF5esiX7ux1zwrly1PNnBuaWGpyGKcnQMGiVu0iLjnV4PsbW4BJ'),
(5, '2014-04-11 11:48:05', '2014-04-11 11:48:05', 'Ivan2', '123', 'Civitas', NULL),
(9, '2014-04-14 00:10:57', '2014-04-14 00:10:57', 'Ivan3', '123', 'Civitas', NULL),
(10, '2014-04-14 00:39:51', '2014-05-19 00:55:11', 'Humas', '$2y$10$Q.ZHRSt/b7GTTBCWXZweMumvCdrVxTDfF9.hpGECOVE1ASl.6rvcG', 'Humas', 'y6zHuljgBRafFIp8nKTtYFoXnRHsefZE02mPLPaktec3QrioekzOGRGbYAU5'),
(11, '2014-04-14 21:09:04', '2014-05-19 01:17:34', 'Perlengkapan', '$2y$10$rC.IFFlpiwbeKQxmNWVEuuDJY.JX87weTurndW/7DW.unopc3FY9i', 'Perlengkapan', '3YFeI5e1nfIxjBk230KFSmKFED7Shl9fO8XFPfARRC0RhPrZMrEHm6ps3cVk'),
(12, '2014-04-14 21:09:04', '2014-05-19 00:58:08', 'Mahalum', '$2y$10$cmRc0Ed3...i3EObLf97K.0BTtED0RQnSLZaP8wDGyKiuXKHJjh9C', 'Mahalum', 'WKMsRbLhdUfKwsArOvsIPfgUxnE8NZgpyTrFY4Juua23qwxoFYztDAQDcCXp'),
(13, '2014-05-12 19:30:35', '2014-05-19 00:51:53', 'ivan.putera', '', '', 'Bms4gYM7PUlZL2h4rcwcHVfwer6d62lbbXE9L6hIyoQfxfuXLbpreGqbg3Sv'),
(14, '2014-05-12 19:41:22', '2014-05-18 23:58:34', 'ibrahim.nurandita', '', '', 'Ri07KNMiqGTre7uGKjbUJPlcoc8ihlWIDjt77RAz8ZouuQEGoI1XCp5Ky7K6'),
(15, '2014-05-12 19:51:18', '2014-05-12 19:54:39', 'gladhi.guarddin', '', '', 'IdarhhULlCxLgPPFhB9gvWnP6ILAWPWjFl866yoqslJherc94n08EawpaxwQ'),
(16, '2014-05-12 20:21:30', '2014-05-12 20:22:27', 'astri.purwadhanty', '', '', 'RHvHdFzsZ1uZED72HEWFZtIYxtVVDnhbNPBRTHlB9QsYf069LL8lpql5ZwB2'),
(17, '2014-05-14 00:48:40', '2014-05-14 01:09:20', 'gede.hermawan', '', '', 'eUaKOrGOtAYNf7n50ylePEhfcWHewRGIXLkNZVCpounl8YUXJDdJf8lTykzm'),
(18, '2014-05-14 01:10:43', '2014-05-14 01:10:53', 'puji.martadinata', '', '', 'UDEfjKtrnrCKE0TqQOZpK5B4Um7A7WTuK3LBNLycBGiDKINcIMRWbSUtxl7F');

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
