-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Agu 2019 pada 19.43
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
-- Struktur dari tabel `tbl_cs`
--

CREATE TABLE IF NOT EXISTS `tbl_cs` (
`id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jk` varchar(500) NOT NULL,
  `ttl` varchar(500) NOT NULL,
  `agama` varchar(500) NOT NULL,
  `suku` varchar(500) NOT NULL,
  `bahasa` varchar(500) NOT NULL,
  `ald` varchar(500) NOT NULL,
  `alk` varchar(500) NOT NULL,
  `alko` varchar(500) NOT NULL,
  `ltlsk` varchar(500) NOT NULL,
  `pt` varchar(500) NOT NULL,
  `atls` varchar(500) NOT NULL,
  `km` varchar(500) NOT NULL,
  `mn` varchar(500) NOT NULL,
  `pb` varchar(500) NOT NULL,
  `bpbd` varchar(500) NOT NULL,
  `gp` varchar(500) NOT NULL,
  `nokk` varchar(500) NOT NULL,
  `nik` varchar(500) NOT NULL,
  `jurusan` varchar(500) NOT NULL,
  `asrama` varchar(500) NOT NULL,
  `lk` varchar(500) NOT NULL,
  `lm` varchar(500) NOT NULL,
  `ls` varchar(500) NOT NULL,
  `con` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cs`
--

INSERT INTO `tbl_cs` (`id`, `nama`, `jk`, `ttl`, `agama`, `suku`, `bahasa`, `ald`, `alk`, `alko`, `ltlsk`, `pt`, `atls`, `km`, `mn`, `pb`, `bpbd`, `gp`, `nokk`, `nik`, `jurusan`, `asrama`, `lk`, `lm`, `ls`, `con`) VALUES
(5, 'bachtiar firdaus', 'laki', 'palas, 31 maret 1997', 'islam', 'padang', 'jepang', 'palas aji', 'palas', 'kalianda', 's3', 's3', '-', 'tidak', 'tidak', 'tidak', 'pt. suka suka', '2m', 'nokk', 'nik', 'jurusan', 'asrama', 'LK_daus', 'LM_daus', 'LS_daus', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE IF NOT EXISTS `tbl_pertanyaan` (
`id` int(11) NOT NULL,
  `nama_cs` varchar(500) NOT NULL,
  `nama_a` varchar(500) NOT NULL,
  `nama_i` varchar(500) NOT NULL,
  `umur_a` varchar(500) NOT NULL,
  `umur_a_t` varchar(500) NOT NULL,
  `umur_i` varchar(500) NOT NULL,
  `umur_i_t` varchar(500) NOT NULL,
  `agama_a` varchar(500) NOT NULL,
  `agama_i` varchar(500) NOT NULL,
  `alamat_a_d` varchar(500) NOT NULL,
  `alamat_a_kec` varchar(500) NOT NULL,
  `alamat_a_kab` varchar(500) NOT NULL,
  `alamat_i_d` varchar(500) NOT NULL,
  `alamat_i_kec` varchar(500) NOT NULL,
  `alamat_i_kab` varchar(500) NOT NULL,
  `pekerjaan_a` varchar(500) NOT NULL,
  `pekerjaan_i` varchar(500) NOT NULL,
  `jumlah_s` varchar(500) NOT NULL,
  `keadaan_lingkungan1` varchar(500) NOT NULL,
  `keadaan_lingkungan2` varchar(500) NOT NULL,
  `keadaan_lingkungan3` varchar(500) NOT NULL,
  `keadaan_lingkungan4` varchar(500) NOT NULL,
  `keadaan_lingkungan5a` varchar(500) NOT NULL,
  `keadaan_lingkungan5b` varchar(500) NOT NULL,
  `keadaan_lingkungan5c` varchar(500) NOT NULL,
  `keadaan_lingkungan6` varchar(500) NOT NULL,
  `motivasi_1` varchar(500) NOT NULL,
  `motivasi_2` varchar(500) NOT NULL,
  `motivasi_3` varchar(500) NOT NULL,
  `motivasi_4` varchar(500) NOT NULL,
  `motivasi_5` varchar(500) NOT NULL,
  `motivasi_6` varchar(500) NOT NULL,
  `motivasi_7` varchar(500) NOT NULL,
  `penggunaan_1` varchar(500) NOT NULL,
  `penggunaan_2` varchar(500) NOT NULL,
  `penggunaan_3` varchar(500) NOT NULL,
  `penggunaan_4` varchar(500) NOT NULL,
  `penggunaan_5` varchar(500) NOT NULL,
  `penggunaan_6` varchar(500) NOT NULL,
  `evaluasi_1` varchar(500) NOT NULL,
  `evaluasi_2` varchar(500) NOT NULL,
  `evaluasi_3` varchar(500) NOT NULL,
  `evaluasi_4` varchar(500) NOT NULL,
  `evaluasi_5` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `nama_cs`, `nama_a`, `nama_i`, `umur_a`, `umur_a_t`, `umur_i`, `umur_i_t`, `agama_a`, `agama_i`, `alamat_a_d`, `alamat_a_kec`, `alamat_a_kab`, `alamat_i_d`, `alamat_i_kec`, `alamat_i_kab`, `pekerjaan_a`, `pekerjaan_i`, `jumlah_s`, `keadaan_lingkungan1`, `keadaan_lingkungan2`, `keadaan_lingkungan3`, `keadaan_lingkungan4`, `keadaan_lingkungan5a`, `keadaan_lingkungan5b`, `keadaan_lingkungan5c`, `keadaan_lingkungan6`, `motivasi_1`, `motivasi_2`, `motivasi_3`, `motivasi_4`, `motivasi_5`, `motivasi_6`, `motivasi_7`, `penggunaan_1`, `penggunaan_2`, `penggunaan_3`, `penggunaan_4`, `penggunaan_5`, `penggunaan_6`, `evaluasi_1`, `evaluasi_2`, `evaluasi_3`, `evaluasi_4`, `evaluasi_5`) VALUES
(10, '1000', 'q', 'q', 'qq', 'q', 'q', 'qq', 'q', 'q', 'qq', 'q', 'qq', 'q', 'q', 'qq', 'q', 'qq', 'qq', 'b. kurang padat', 'b. Semi permanen, bangunan setengah tembok, lantai semen', 'b. listrik tetangga', 'b. sumur bor', 'q', 'q', 'q', 'b. sekolah', 'b. ragu - ragu', 'b. ragu - ragu', 'b. ragu - ragu', 'b. Semi permanen, bangunan setengah tembok, lantai semen', 'b. Mencoba mengikuti sesuai dengan bimbingan pengasuh dan instruktur', 'b. Mengembangkan wirausaha bersama kelompok', 'b. Digunakan bekerjasama dengan kelompok / dunia usaha', 'b. perkebunan', 'b. puskesmas', 'b. penjahit pakaian', 'b. keuangan', 'b. peralatan pokok', 'b. PSM/Orsos/karang taruna dll', 'q', 'q', 'evaluasi_3', 'evaluasi_4', 'evaluasi_5');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `nilai_kriteria`) VALUES
(1, 'K1', 'njnj', 0),
(2, 'K2', 'kjkj', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE IF NOT EXISTS `tb_peserta` (
`id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(32) NOT NULL,
  `result_peserta` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_result`
--

CREATE TABLE IF NOT EXISTS `tb_result` (
`id_result` int(11) NOT NULL,
  `kode_kriteria` varchar(3) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `nilai` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp_nilai`
--

INSERT INTO `temp_nilai` (`id`, `baris`, `kolom`, `nilai`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 2, 1, 1),
(4, 2, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_nilai_peserta`
--

CREATE TABLE IF NOT EXISTS `temp_nilai_peserta` (
`id` int(11) NOT NULL,
  `baris` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id_upload` int(3) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_upload`, `nama_file`, `deskripsi`, `tgl_upload`, `hits`) VALUES
(1, '9 juli 2018.docx', 'daus', '2019-08-23', 0);

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
-- Indexes for table `tbl_cs`
--
ALTER TABLE `tbl_cs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cs`
--
ALTER TABLE `tbl_cs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_intensitas`
--
ALTER TABLE `tb_intensitas`
MODIFY `id_intensitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_result`
--
ALTER TABLE `tb_result`
MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp_nilai`
--
ALTER TABLE `temp_nilai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `temp_nilai_peserta`
--
ALTER TABLE `temp_nilai_peserta`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id_upload` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
