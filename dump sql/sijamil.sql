-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2014 at 04:55 AM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_peminjam` int(10) unsigned NOT NULL,
  `id_ruangan` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `forms_id_peminjam_foreign` (`id_peminjam`),
  KEY `forms_id_ruangan_foreign` (`id_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
('2014_04_11_153612_add_foreign_key_id_ruangan_to_forms_table', 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nomor_ruangan`, `kapasitas`, `fasilitas`, `lantai`, `created_at`, `updated_at`) VALUES
(1, '3111', 99, 'AC', 2, '2014-04-11 11:48:05', '2014-04-11 11:48:05'),
(2, '3112', 99, 'AC', 2, '2014-04-11 11:48:06', '2014-04-11 11:48:06'),
(3, '3113', 99, 'AC', 2, '2014-04-11 11:48:06', '2014-04-11 11:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `password`, `role`) VALUES
(4, '2014-04-11 11:48:05', '2014-04-11 11:48:05', 'Ivan', '123', 'Civitas'),
(5, '2014-04-11 11:48:05', '2014-04-11 11:48:05', 'Ivan2', '123', 'Civitas'),
(6, '2014-04-11 11:48:05', '2014-04-11 11:48:05', 'Ivan3', '123', 'Civitas');

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
  ADD CONSTRAINT `forms_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`),
  ADD CONSTRAINT `forms_id_peminjam_foreign` FOREIGN KEY (`id_peminjam`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_form`
--
ALTER TABLE `user_form`
  ADD CONSTRAINT `menyetujui_form_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `menyetujui_form_id_form_foreign` FOREIGN KEY (`id_form`) REFERENCES `forms` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
