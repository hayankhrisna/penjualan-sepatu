-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2018 pada 06.51
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tokosepatuku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE IF NOT EXISTS `jual` (
  `id` int(11) NOT NULL,
  `nama_sepatu` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`id`, `nama_sepatu`, `tipe`, `stok`) VALUES
(2, 'NIKE', 'AIRMAX', 10),
(1, 'ADIDAS', 'SAMBA BIRU', 11),
(4, 'PUMA', 'RUN BTS', 22),
(3, 'NEVADA', 'HITAM', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE IF NOT EXISTS `tb_level` (
  `id_akses` int(20) NOT NULL AUTO_INCREMENT,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_akses`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`, `level`) VALUES
('hayan', 'hayanhayan', 'admin'),
('rama', 'ramarama', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
