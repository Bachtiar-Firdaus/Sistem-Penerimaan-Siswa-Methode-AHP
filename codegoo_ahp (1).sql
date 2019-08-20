-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Agu 2019 pada 06.36
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codegoo_ahp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_intensitas`
--

CREATE TABLE IF NOT EXISTS `tb_intensitas` (
`id_intensitas` int(11) NOT NULL,
  `no_intensitas` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_intensitas`
--

INSERT INTO `tb_intensitas` (`id_intensitas`, `no_intensitas`, `keterangan`) VALUES
(1, 1, 'Kedua elemen sama pentingnya '),
(2, 3, 'Elemen yang satu sedikit lebih penting dari pada elemen yang lainnya '),
(3, 5, 'Elemen yang satu lebih penting dari pada elemen lainnya '),
(4, 7, 'Satu elemen jelas lebih mutlak penting dari elemen lainnya '),
(5, 9, 'Satu elemen mutlak penting dari pada elemen lainnya '),
(6, 2, 'Nilai-nilai intermediate'),
(7, 4, 'Nilai-nilai intermediate'),
(8, 6, 'Nilai-nilai intermediate'),
(9, 8, 'Nilai-nilai intermediate');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
`id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(32) NOT NULL,
  `nilai_kriteria` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `nilai_kriteria`) VALUES
(1, 'K1', 'usia', 0.1149591),
(2, 'K2', 'pekerjaan', 0.4054834),
(3, 'K3', 'status', 0.4795575);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE IF NOT EXISTS `tb_peserta` (
`id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(32) NOT NULL,
  `result_peserta` double DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `result_peserta`) VALUES
(1, 'daus', 0),
(2, 'dayat', 0),
(3, 'ega', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_result`
--

CREATE TABLE IF NOT EXISTS `tb_result` (
`id_result` int(11) NOT NULL,
  `kode_kriteria` varchar(3) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `nilai` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_result`
--

INSERT INTO `tb_result` (`id_result`, `kode_kriteria`, `id_peserta`, `nilai`) VALUES
(1, 'K1', 1, 0.1001443),
(2, 'K1', 2, 0.3893218),
(3, 'K1', 3, 0.5105339);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
`user_id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `fullname`, `username`, `password`) VALUES
(1, 'Muhammad Iqbal', '1', '*01A6717B58F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_nilai`
--

CREATE TABLE IF NOT EXISTS `temp_nilai` (
`id` int(11) NOT NULL,
  `baris` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp_nilai`
--

INSERT INTO `temp_nilai` (`id`, `baris`, `kolom`, `nilai`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0.3333333333333333),
(3, 1, 3, 0.2),
(4, 2, 1, 3),
(5, 2, 2, 1),
(6, 2, 3, 1),
(7, 3, 1, 5),
(8, 3, 2, 1),
(9, 3, 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_nilai_peserta`
--

CREATE TABLE IF NOT EXISTS `temp_nilai_peserta` (
`id` int(11) NOT NULL,
  `baris` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp_nilai_peserta`
--

INSERT INTO `temp_nilai_peserta` (`id`, `baris`, `kolom`, `nilai`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0.3333333333333333),
(3, 1, 3, 0.14285714285714285),
(4, 2, 1, 3),
(5, 2, 2, 1),
(6, 2, 3, 1),
(7, 3, 1, 7),
(8, 3, 2, 1),
(9, 3, 3, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_total`
--
CREATE TABLE IF NOT EXISTS `view_total` (
`nama_peserta` varchar(32)
,`total` double
);
-- --------------------------------------------------------

--
-- Struktur untuk view `view_total`
--
DROP TABLE IF EXISTS `view_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_total` AS select `tb_peserta`.`nama_peserta` AS `nama_peserta`,sum((`tb_result`.`nilai` * `tb_kriteria`.`nilai_kriteria`)) AS `total` from ((`tb_result` join `tb_kriteria` on((`tb_result`.`kode_kriteria` = `tb_kriteria`.`kode_kriteria`))) join `tb_peserta` on((`tb_result`.`id_peserta` = `tb_peserta`.`id_peserta`))) group by `tb_result`.`id_peserta`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_intensitas`
--
ALTER TABLE `tb_intensitas`
 ADD PRIMARY KEY (`id_intensitas`), ADD UNIQUE KEY `no_intensitas` (`no_intensitas`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
 ADD PRIMARY KEY (`id_kriteria`), ADD UNIQUE KEY `kode_kriteria` (`kode_kriteria`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
 ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_result`
--
ALTER TABLE `tb_result`
 ADD PRIMARY KEY (`id_result`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `temp_nilai`
--
ALTER TABLE `temp_nilai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_nilai_peserta`
--
ALTER TABLE `temp_nilai_peserta`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_intensitas`
--
ALTER TABLE `tb_intensitas`
MODIFY `id_intensitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_result`
--
ALTER TABLE `tb_result`
MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp_nilai`
--
ALTER TABLE `temp_nilai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `temp_nilai_peserta`
--
ALTER TABLE `temp_nilai_peserta`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
