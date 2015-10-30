-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 26. Januari 2013 jam 05:10
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75857 ;

--
-- Dumping data untuk tabel `candidates`
--

INSERT INTO `candidates` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Fajar Barrun', '2013-01-17', '2013-01-17'),
(2, 'Mifta Addina', '2013-01-17', '2013-01-17'),
(3, 'Redha Jauhar', '2013-01-17', '2013-01-17'),
(5, 'zakkia', '2013-01-17', '2013-01-26'),
(7, 'Rizky Ikhsandio', '2013-01-20', '2013-01-20'),
(8, 'Joko Purnomo', '2013-01-17', '2013-01-18'),
(9, 'Yudhistira', '2013-01-18', '2013-01-18'),
(10, 'Marsetya', '2013-01-18', '2013-01-18'),
(12122, 'Suhendra', '2013-01-26', '2013-01-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `elections`
--

CREATE TABLE IF NOT EXISTS `elections` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `elections`
--

INSERT INTO `elections` (`id`, `nama`, `waktu`, `created_at`, `updated_at`) VALUES
(10, 'Pemilihan Bupati Cilacap', '2013-01-17', '2013-01-17 22:48:31', '2013-01-17 22:48:31'),
(11, 'Pemilihan Gubernur Jawa Tengah', '2014-03-06', '2013-01-17 22:49:20', '2013-01-17 22:49:20'),
(12, 'Pemilihan Camat Condong Catur, Sleman, Yogyakarta ', '2013-04-05', '2013-01-18 07:07:55', '2013-01-18 07:07:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `election_candidate`
--

CREATE TABLE IF NOT EXISTS `election_candidate` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `election_id` bigint(20) DEFAULT NULL,
  `candidate_id` bigint(20) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `election_id` (`election_id`),
  KEY `candidate_id` (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `election_candidate`
--

INSERT INTO `election_candidate` (`id`, `election_id`, `candidate_id`, `created_at`, `updated_at`) VALUES
(15, 10, 1, '0000-00-00', '0000-00-00'),
(16, 10, 2, '0000-00-00', '0000-00-00'),
(17, 11, 3, '0000-00-00', '0000-00-00'),
(18, 11, 5, '0000-00-00', '0000-00-00'),
(19, 10, 8, '0000-00-00', '0000-00-00'),
(20, 12, 9, '0000-00-00', '0000-00-00'),
(21, 12, 10, '0000-00-00', '0000-00-00'),
(22, 12, 7, '0000-00-00', '0000-00-00'),
(24, 12, 12122, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `election_location`
--

CREATE TABLE IF NOT EXISTS `election_location` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `election_id` bigint(20) DEFAULT NULL,
  `location_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `election_id` (`election_id`),
  KEY `location_id` (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data untuk tabel `election_location`
--

INSERT INTO `election_location` (`id`, `election_id`, `location_id`) VALUES
(37, 10, 11),
(38, 10, 11),
(39, 10, 11),
(40, 11, 11),
(41, 11, 11),
(42, 10, 11),
(43, 10, 11),
(44, 10, 11),
(45, 10, 11),
(46, 10, 11),
(47, 10, 11),
(48, 10, 11),
(49, 10, 11),
(50, 10, 11),
(51, 12, 11),
(52, 12, 11),
(53, 10, 11),
(54, 12, 11),
(55, 11, 11),
(56, 10, 11),
(57, 10, 11),
(58, 10, 11),
(59, 10, 11),
(60, 10, 11),
(61, 10, 11),
(62, 10, 11),
(63, 10, 11),
(64, 10, 11),
(65, 12, 1),
(66, 10, 4),
(67, 11, 2),
(68, 10, 4),
(69, 12, 1),
(70, 10, 3),
(71, 12, 2),
(72, 11, 2),
(73, 12, 2),
(74, 12, 2),
(75, 10, 2),
(76, 10, 2),
(77, 10, 2),
(78, 10, 2),
(79, 10, 2),
(80, 10, 3),
(81, 10, 3),
(82, 10, 3),
(83, 10, 3),
(84, 10, 3),
(85, 11, 3),
(86, 12, 5),
(87, 10, 6),
(88, 12, 5),
(89, 12, 5),
(90, 12, 5),
(91, 12, 5),
(92, 11, 2),
(93, 12, 4),
(94, 12, 4),
(95, 12, 6),
(96, 12, 5),
(97, 12, 3),
(98, 12, 3),
(99, 12, 3),
(100, 12, 3),
(101, 12, 3),
(102, 12, 3),
(103, 12, 2),
(104, 12, 2),
(105, 12, 2),
(106, 12, 1),
(107, 12, 1),
(108, 11, 2),
(109, 10, 4),
(110, 10, 3),
(111, 10, 3),
(112, 12, 3),
(113, 12, 3),
(114, 11, 1),
(115, 11, 1),
(116, 11, 1),
(117, 11, 1),
(118, 11, 1),
(119, 11, 1),
(120, 11, 1),
(121, 11, 1),
(122, 11, 1),
(123, 11, 1),
(124, 11, 1),
(125, 11, 1),
(126, 11, 1),
(127, 10, 2),
(128, 10, 2),
(129, 10, 4),
(130, 12, 4),
(131, 12, 2),
(132, 12, 2),
(133, 12, 2),
(134, 12, 2),
(135, 12, 2),
(136, 10, 1),
(137, 12, 3),
(138, 11, 3),
(139, 10, 5),
(140, 11, 1),
(141, 11, 1),
(142, 11, 2),
(143, 10, 1),
(144, 10, 1),
(145, 10, 1),
(146, 10, 1),
(147, 10, 1),
(148, 10, 1),
(149, 11, 5),
(150, 12, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `election_voter`
--

CREATE TABLE IF NOT EXISTS `election_voter` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `election_id` bigint(100) DEFAULT NULL,
  `voter_id` bigint(100) DEFAULT NULL,
  `location_id` bigint(100) DEFAULT NULL,
  `candidate_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `election_id` (`election_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data untuk tabel `election_voter`
--

INSERT INTO `election_voter` (`id`, `election_id`, `voter_id`, `location_id`, `candidate_id`) VALUES
(70, 10, 1, 11, 2),
(71, 12, 2, 1, 9),
(72, 12, 2, 1, 10),
(73, 12, 2, 1, 9),
(74, 12, 2, 1, 9),
(75, 10, 4, 4, 2),
(76, 11, 5, 2, 3),
(77, 11, 5, 2, 5),
(78, 11, 5, 2, 3),
(79, 10, 6, 4, 2),
(80, 10, 6, 4, 8),
(81, 10, 6, 4, 8),
(82, 10, 6, 4, 1),
(83, 10, 6, 4, 8),
(84, 10, 6, 4, 1),
(85, 12, 7, 1, 9),
(86, 12, 7, 1, 10),
(87, 10, 8, 3, 2),
(88, 12, 11, 2, 9),
(89, 12, 12, 12, 10),
(90, 11, 13, 2, 5),
(91, 11, 13, 2, 3),
(92, 12, 33, 6, 7),
(93, 12, 34, 5, 7),
(94, 12, 65, 3, 7),
(95, 12, 65, 3, 9),
(96, 12, 65, 3, 7),
(97, 10, 54, 4, 1),
(98, 10, 54, 4, 1),
(99, 10, 54, 4, 2),
(100, 10, 66, 3, 1),
(101, 12, 212, 3, 7),
(102, 12, 121, 12, 10),
(103, 10, 61, 4, 2),
(104, 12, 93, 2, 9),
(105, 12, 191, 2, 7),
(106, 11, 2127, 1, 3),
(107, 10, 31312, 1, 2),
(108, 10, 11111, 10, 1),
(109, 10, 1214, 10, 8),
(110, 10, 11223, 10, 8),
(111, 11, 1221, 5, 5),
(112, 12, 1132, 2, 12122);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laravel_migrations`
--

CREATE TABLE IF NOT EXISTS `laravel_migrations` (
  `bundle` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`bundle`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laravel_migrations`
--

INSERT INTO `laravel_migrations` (`bundle`, `name`, `batch`) VALUES
('verify', '2012_06_17_211339_init', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`id`, `lokasi`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'TPS 01', 'Jl. Palagan TP No.60 Ngaglik, Sleman, Yogyakarta', '2013-01-14', '2013-01-14'),
(2, 'TPS 02', 'jl. Karya Dharma No.12, Sedan, Yogyakarta', '2013-01-14', '2013-01-14'),
(3, 'TPS 03', 'Jl. Sudirman No.34 A Cilacap ', '2013-01-17', '2013-01-17'),
(4, 'TPS 04', 'Jl. Kyai Mojo No. 54 Kroya, Cilacap', '2013-01-17', '2013-01-17'),
(5, 'TPS 05', 'Jl. Panglima Sudirman No. 63 Purwokerto', '2013-01-20', '2013-01-20'),
(6, 'TPS 06', 'Jl. Cempaka No. 5D Yogyakarta', '2013-01-20', '2013-01-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_name_index` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_name_index` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Administrator', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_username_index` (`username`),
  KEY `users_password_index` (`password`),
  KEY `users_email_index` (`name`),
  KEY `users_role_id_index` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `unit`, `role_id`, `verified`, `disabled`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2a$08$rqN6idpy0FwezH72fQcdqunbJp7GJVm8j94atsTOqCeuNvc3PzH3m', 'a227383075861e775d0af6281ea05a49', 'Administrator', 0, 1, 1, 0, 0, '2012-11-10 12:56:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voters`
--

CREATE TABLE IF NOT EXISTS `voters` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1234559 ;

--
-- Dumping data untuk tabel `voters`
--

INSERT INTO `voters` (`id`, `nama`, `alamat`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(1, 'laura', 'Jl. Kyai Mojo No. 54 Kroya, Cilacap', '1992-02-28', '2013-01-18', '2013-01-18'),
(2, 'tania', 'malang', '1992-02-27', '2013-01-18', '2013-01-18'),
(4, 'faris', 'madiun', '2014-12-10', '2013-01-19', '2013-01-19'),
(5, 'tara', 'klaten', '2010-02-02', '2013-01-19', '2013-01-19'),
(6, 'rendy', 'bekasi', '2010-02-02', '2013-01-19', '2013-01-19'),
(7, 'paijo', 'condong catur', '2010-02-02', '2013-01-19', '2013-01-19'),
(8, 'dio', 'krawang', '2010-02-02', '2013-01-19', '2013-01-19'),
(9, 'redo', 'solo', '1990-03-15', '2013-01-20', '2013-01-20'),
(10, 'redo', 'solo', '1990-03-15', '2013-01-20', '2013-01-20'),
(11, 'sasa', 'tlaga sewu', '1990-03-01', '2013-01-20', '2013-01-20'),
(12, 'Darman', 'gamping, sleman, jogja', '1981-03-05', '2013-01-20', '2013-01-20'),
(13, 'Darman', 'gamping, sleman, jogja', '1981-03-05', '2013-01-20', '2013-01-20'),
(14, 'Kamto', 'Ponorogo', '1980-01-31', '2013-01-20', '2013-01-20'),
(19, 'Darman', 'gamping, sleman, jogja', '1981-03-05', '2013-01-20', '2013-01-20'),
(20, 'Darman', 'gamping, sleman, jogja', '1981-03-05', '2013-01-20', '2013-01-20'),
(21, 'tarno', 'Ponorogo', '1992-06-18', '2013-01-20', '2013-01-20'),
(22, 'tarman', 'ponorogo', '1990-01-30', '2013-01-20', '2013-01-20'),
(23, 'darno', 'malang', '1965-07-15', '2013-01-20', '2013-01-20'),
(24, 'darmono', 'malang', '1965-07-15', '2013-01-20', '2013-01-20'),
(25, 'darmono', 'malang', '1965-07-15', '2013-01-20', '2013-01-20'),
(26, 'tarsiyem', 'magetan', '1990-01-01', '2013-01-20', '2013-01-20'),
(27, 'tarsiyem', 'magetan', '1990-01-01', '2013-01-20', '2013-01-20'),
(28, 'tarsiyem', 'magetan', '1990-01-01', '2013-01-20', '2013-01-20'),
(29, 'tarsiyem', 'magetan', '1990-01-01', '2013-01-20', '2013-01-20'),
(30, 'redo', 'solo', '1990-03-15', '2013-01-20', '2013-01-20'),
(31, 'tarsiyem', 'magetan', '1990-01-01', '2013-01-20', '2013-01-20'),
(37, 'samijan', 'gamping, sleman, jogja', '1990-06-01', '2013-01-24', '2013-01-24'),
(39, 'darmi', 'gamping, sleman, jogja', '1990-01-01', '2013-01-24', '2013-01-24'),
(40, 'faris', 'malang', '1990-02-01', '2013-01-20', '2013-01-20'),
(41, 'faris', 'malang', '1990-02-01', '2013-01-20', '2013-01-20'),
(42, 'siraf', 'madiun', '1980-03-06', '2013-01-20', '2013-01-20'),
(43, 'darman', 'malang', '1990-02-01', '2013-01-20', '2013-01-20'),
(44, 'faris', 'malang', '1990-02-01', '2013-01-20', '2013-01-20'),
(45, 'faris', 'madiun', '1980-07-01', '2013-01-20', '2013-01-20'),
(46, 'faris', 'madiun', '1980-07-01', '2013-01-20', '2013-01-20'),
(47, 'faris', 'madiun', '1980-07-01', '2013-01-20', '2013-01-20'),
(48, 'faris', 'madiun', '1980-07-01', '2013-01-20', '2013-01-20'),
(49, 'faris', 'madiun', '1980-07-01', '2013-01-20', '2013-01-20'),
(51, 'faris', 'madiun', '1980-07-01', '2013-01-20', '2013-01-20'),
(54, 'tantri', 'Jl. Kyai Mojo No. 54 Kroya, Cilacap', '1993-02-03', '2013-01-22', '2013-01-22'),
(57, 'gfghf', 'tfyj', '1990-01-01', '2013-01-24', '2013-01-24'),
(59, 'rfdcgf', 'tfgvjh', '1990-01-01', '2013-01-24', '2013-01-24'),
(61, 'laura', 'bantul', '1992-01-01', '2013-01-24', '2013-01-24'),
(65, 'rajaf', 'malang', '1990-02-01', '2013-01-20', '2013-01-20'),
(66, 'ygygu', 'tygy', '1990-01-01', '2013-01-22', '2013-01-22'),
(69, 'aaaaaaaaaaaaa', 'jakarta', '1990-02-07', '2013-01-25', '2013-01-25'),
(93, 'qaa', 'qqqq', '1991-01-01', '2013-01-24', '2013-01-24'),
(94, 'mala', 'jogja', '1993-04-12', '2013-01-22', '2013-01-22'),
(111, 'Darman', 'gamping, sleman, jogja', '1981-03-05', '2013-01-20', '2013-01-20'),
(121, 'sablenk', 'gondo', '1991-04-01', '2013-01-23', '2013-01-23'),
(191, 'hghg', 'hjgjqq', '1990-01-01', '2013-01-24', '2013-01-24'),
(212, 'wiro', 'gondo', '1990-01-01', '2013-01-23', '2013-01-23'),
(312, 'bejo', 'ponorogo', '1990-02-07', '2013-01-17', '2013-01-17'),
(1121, 'frendy', 'bandung', '1992-01-01', '2013-01-26', '2013-01-26'),
(1132, 'aji', 'sleman', '1992-01-01', '2013-01-26', '2013-01-26'),
(1212, 'danang', 'wonogiri', '1990-01-01', '2013-01-26', '2013-01-26'),
(1213, 'tasya', 'jakarta', '1994-01-01', '2013-01-26', '2013-01-26'),
(1214, 'faraj', 'Jl. Kyai Mojo No. 54 Kroya, Cilacap', '1992-01-01', '2013-01-26', '2013-01-26'),
(1221, 'sasya', 'band', '0000-00-00', '2013-01-26', '2013-01-26'),
(1231, 'samijo', 'wonogiri', '1990-01-01', '2013-01-26', '2013-01-26'),
(1232, 'amar', 'jakarta', '1990-01-01', '2013-01-26', '2013-01-26'),
(1245, 'miaa', 'pwt', '2014-06-04', '2013-01-17', '2013-01-17'),
(1246, '', '', '0000-00-00', '2013-01-20', '2013-01-20'),
(1247, 'fajar', 'cilacap', '1990-03-01', '2013-01-20', '2013-01-20'),
(1248, 'fajar', 'cilacap', '1990-03-01', '2013-01-20', '2013-01-20'),
(1313, 'faris', 'madiun', '1990-01-01', '2013-01-26', '2013-01-26'),
(2121, 'aas', 'sasa', '1990-01-01', '2013-01-26', '2013-01-26'),
(2127, 'aas', 'sasa', '1990-01-01', '2013-01-26', '2013-01-26'),
(3131, 'abbas', 'jakarta', '1990-01-01', '2013-01-26', '2013-01-26'),
(11111, 'sandy', 'bandung', '1992-01-01', '2013-01-26', '2013-01-26'),
(11222, 'pepi', 'pwt', '1971-04-09', '2013-01-22', '2013-01-22'),
(11223, 'isnan', 'sleman', '1970-01-01', '2013-01-26', '2013-01-26'),
(31312, 'farud', 'bandung', '1990-01-01', '2013-01-26', '2013-01-26'),
(1234556, 'mala', 'jogja', '1993-04-12', '2013-01-22', '2013-01-22'),
(1234557, NULL, NULL, NULL, '2013-01-24', '2013-01-24'),
(1234558, '', '', '0000-00-00', '2013-01-25', '2013-01-25');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `election_candidate`
--
ALTER TABLE `election_candidate`
  ADD CONSTRAINT `FK Candidate` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK Election` FOREIGN KEY (`election_id`) REFERENCES `elections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
