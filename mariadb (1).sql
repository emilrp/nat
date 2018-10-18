-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Oktober 2018 jam 09:31
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mariadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peg`
--

CREATE TABLE IF NOT EXISTS `peg` (
  `nip` varchar(16) NOT NULL,
  `nm` varchar(50) NOT NULL,
  `gol` int(11) NOT NULL,
  `jab` varchar(100) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peg`
--

INSERT INTO `peg` (`nip`, `nm`, `gol`, `jab`) VALUES
('1234567890123456', 'Ade Fernando', 5, 'OPD PolPP'),
('1234567890123457', 'Boy Sandi', 1, 'OPD Damkar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pen`
--

CREATE TABLE IF NOT EXISTS `pen` (
  `nip` varchar(16) NOT NULL,
  `thn` varchar(4) NOT NULL,
  `bln` varchar(2) NOT NULL,
  `jhk` int(11) NOT NULL,
  `ha` int(3) NOT NULL,
  `iz` int(3) NOT NULL,
  `sa` int(3) NOT NULL,
  `cu` int(3) NOT NULL,
  `ab` int(3) NOT NULL,
  `te` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `uwas` int(3) NOT NULL,
  `up` int(3) NOT NULL,
  `wi` int(3) NOT NULL,
  `ap` int(3) NOT NULL,
  `se` int(3) NOT NULL,
  `skp` int(3) NOT NULL,
  `op` int(3) NOT NULL,
  `integritas` int(3) NOT NULL,
  `ker` int(3) NOT NULL,
  `kep` int(3) NOT NULL,
  `lkh` int(11) NOT NULL,
  `sop` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pen`
--

INSERT INTO `pen` (`nip`, `thn`, `bln`, `jhk`, `ha`, `iz`, `sa`, `cu`, `ab`, `te`, `cp`, `uwas`, `up`, `wi`, `ap`, `se`, `skp`, `op`, `integritas`, `ker`, `kep`, `lkh`, `sop`) VALUES
('1234567890123456', '2018', '10', 27, 23, 1, 1, 1, 1, 45, 55, 10, 2, 1, 3, 2, 78, 84, 88, 95, 76, 326, 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpp`
--

CREATE TABLE IF NOT EXISTS `tpp` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `gol` varchar(25) NOT NULL,
  `tpp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tpp`
--

INSERT INTO `tpp` (`id`, `gol`, `tpp`) VALUES
(1, 'Eselon II', 30000000),
(2, 'Eselon III', 25000000),
(3, 'Eselon IV', 20000000),
(4, 'Non Eselon Golongan IV', 15000000),
(5, 'Non Eselon Golongan III', 10000000),
(6, 'Non Eselon Golongan II', 5000000);
