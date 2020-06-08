-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 05:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('hutomi', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_pengenal` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_pengenal`, `nama`, `tempat_lahir`, `tanggal_lahir`, `gender`, `no_hp`, `alamat`, `email`, `status`, `prodi`, `password`) VALUES
('130160123', 'Huseain', 'Suka Maju', '1995-02-03', 'Laki-laki', '082167890909', 'Aceh', 'huseinimoet@gmail.com', 'Mahasiswa', 'Teknik Informatika', NULL),
('160170103', 'Muhamad Hutomi', 'Medan', '1999-02-22', 'Laki-laki', '0817871812312', 'Medan', 'hutomi@gmail.com', 'Mahasiswa', 'Teknik Informatika', '123456'),
('160170105', 'Sara Ayu Nita', 'Aceh', '2018-05-01', 'Perempuan', '08216774xxxx', 'Aceh', 'ayu@gmail.com', 'Mahasiswa', 'Teknik Informatika', '123456'),
('160170109', 'Muslia', 'Bireun', '1990-09-07', 'Perempuan', '0821677421xx', 'Bireund', 'muslia@gmail.com', 'Mahasiswa', 'Teknik Informatika', '123456'),
('160170111', 'Muaz Rizki', 'Aceh', '1998-04-24', 'Laki-Laki', '082167742190', 'Aceh', 'muaz@gmail.com', 'Mahasiswa', 'Teknik Informatika', '123456'),
('160170112', 'Muhammad Nur Fahmi', 'Aceh', '1996-09-24', 'Laki-Laki', '082167742090', 'Aceh', 'fahmi@gmail.com', 'Mahasiswa', 'Teknik Informatika', '123456'),
('160170167', 'mustafa', 'lhokseumawe', '2018-04-08', 'Laki-laki', '0823578789', 'blangpulo', 'daebkau@.com', 'Mahasiswa', 'Teknik Informatika', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `harga` int(9) NOT NULL,
  `tgl_beli` varchar(20) NOT NULL,
  `lokasi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah`, `harga`, `tgl_beli`, `lokasi`) VALUES
(11, 'Belajar PHP 1', 'Mustopo', 'Gramedia', '2017', '12211', 18, 200000, '2018-05-19', 'C6'),
(13, 'PHP Itu Mudah', 'Mantarano', 'Gramedia', '2016', '1212', 20, 178000, '2018-05-06', 'C6'),
(14, 'HTML Dasar', 'Darkono', 'Gramedia', '2007', '10012', 67, 167000, '2018-05-02', 'C1'),
(19, 'CSS Itu Sulit?', 'Muniro', 'Gema Insani', '2006', '10021', 100, 135000, '2018-04-30', 'C4'),
(20, 'Katakan Iya Pada PHP', 'Erferino', 'Gema Insani', '2007', '10022', 23, 340000, '2018-04-29', 'C6'),
(35, 'Mengenal HTML', 'Namiora', 'Gema Insani', '2016', '12145', 20, 120000, '2018-05-02', 'B6'),
(38, 'Belajar Bahasa Pemrograman PHP Dasar', 'Beny Ananta', 'Erlangga', '2017', '11211', 17, 180000, '2018-05-06', 'A6'),
(42, 'Belajar HTML Dasar', 'Donimo', 'Gema Insani', '1988', '43243', 453, 432432, '2017-02-03', 'A6'),
(45, 'PHP Dasar', 'Hoahah', 'Gramedia', '1988', '12112', 110, 145000, '2018-04-02', 'C4'),
(46, 'Pendidikan Matematika Dasar', 'Muslianto', 'Erlangga', '1988', '1212198', 20, 99000, '2018-05-21', 'C3'),
(47, 'Belajar mahir Pemograman', 'juadi', 'jdwwwdj', '1996', '738ruu9', 10, 30000, '21-05-2018', 'A1'),
(48, 'jurnal', 'uey8enm', 'jrjkmf', '1988', '19101i1o', 10, 30000, '21-05-2018', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasus`
--

CREATE TABLE `tb_kasus` (
  `id_kasus` int(20) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kasus`
--

INSERT INTO `tb_kasus` (`id_kasus`, `id_buku`, `judul`, `tanggal`, `biaya`, `keterangan`) VALUES
(65, '11', 'Belajar PHP', '19-05-2018', '200000', 'Hilang'),
(66, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '19-05-2018', '180000', 'Hilang'),
(67, '11', 'Belajar PHP', '19-05-2018', '200000', 'Hilang'),
(68, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '21-05-2018', '6000', 'Denda Terlambat'),
(69, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '21-05-2018', '180000', 'Hilang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(10) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `id_anggota` varchar(20) NOT NULL,
  `tanggal_pinjam` varchar(10) NOT NULL,
  `tanggal_kembali` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `id_buku`, `judul`, `id_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `status`) VALUES
(13, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170109', '13-05-2018', '20-05-2018', 'Hilang'),
(16, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170105', '19-05-2018', '26-05-2018', 'Kembali'),
(21, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170105', '19-05-2018', '26-05-2018', 'Hilang'),
(22, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170103', '02-05-2018', '09-05-2018', 'Kembali'),
(24, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170109', '19-05-2018', '26-05-2018', 'Hilang'),
(25, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170103', '19-05-2018', '26-05-2018', 'Hilang'),
(26, '38', 'Belajar Bahasa Pemrograman PHP Dasar', '160170103', '09-05-2018', '16-05-2018', 'Hilang'),
(27, '11', 'Belajar PHP', '160170103', '19-05-2018', '26-05-2018', 'Pinjam'),
(28, '11', 'Belajar PHP 1', '160170109', '21-05-2018', '28-05-2018', 'Pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_pengenal`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kasus`
--
ALTER TABLE `tb_kasus`
  ADD PRIMARY KEY (`id_kasus`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_kasus`
--
ALTER TABLE `tb_kasus`
  MODIFY `id_kasus` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
