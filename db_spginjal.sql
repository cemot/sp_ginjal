-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 09:01 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spginjal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `nama`, `bobot`) VALUES
('G01', 'Berkurangnya produksi urine.', 0.7),
('G02', 'Mual dan muntah.', 0.3),
('G03', 'Sesak napas.', 0.8),
('G04', 'Nyeri pada perut.', 0.8),
('G05', 'Tingginya tekanan darah.', 0.8),
('G06', 'Dehidrasi.', 0.8),
('G07', 'Nyeri pada punggung, di bawah tulang rusuk (flank pain).', 0.8),
('G08', 'Hilangnya nafsu makan.', 0.8),
('G09', 'Perasaan lemah dan lesu.', 0.8),
('G10', 'Kram otot dan kejang otot.', 0.5),
('G11', 'Gangguan tidur.', 0.7),
('G12', 'Kulit gatal.', 0.6),
('G13', 'Menurunnya ketajaman mental.', 0.6),
('G14', 'Kemaluan terasa terbakar ketika buang air kecil', 0.8),
('G15', 'Sering ingin buang air kecil, meskipun ternyata sedikit yang keluar', 0.8),
('G16', 'Nyeri atau tekanan di punggung atau perut bagian bawah.', 0.8),
('G17', 'Kencing berdarah atau berwarna lebih gelap', 0.6),
('G18', 'Demam', 0.7),
('G19', 'Nyeri saat buang air kecil', 0.8),
('G20', 'Warna urine keruh, pekat dan gelap', 0.6),
('G21', 'Bau urine menyengat', 0.8),
('G22', 'Mudah lelah.', 0.7),
('G23', 'Muncul tonjolan pada perut.', 0.4),
('G24', 'Ketidaknyamanan atau nyeri di perut atau sisi perut bagian atas', 0.6),
('G25', 'Sakit pinggang, paha, selangkangan, dan kemaluan.', 0.6),
('G26', 'Darah dalam urine', 0.8),
('G27', 'Sakit perut', 0.8),
('G28', 'Kekurangan darah atau anemia.', 0.9),
('G29', 'Nyeri pinggang.', 0.8),
('G30', 'Menggigil ', 0.8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hitungcf`
--

CREATE TABLE `tb_hitungcf` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hitungds`
--

CREATE TABLE `tb_hitungds` (
  `id` int(11) NOT NULL,
  `M` int(11) NOT NULL,
  `himpunan` text NOT NULL,
  `nilai` float NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengunjung`
--

CREATE TABLE `tb_pengunjung` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `umur` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengunjung`
--

INSERT INTO `tb_pengunjung` (`id`, `nama`, `jk`, `umur`, `email`, `username`, `password`) VALUES
(2, 'fika', 'P', '25', 'fika@gmail.com', 'user21', '2e129db15b6d6db5342ba5d328642262'),
(3, 'miftahul resqy', 'P', '20', 'miftahul@gmail.com', 'miftahul', '6e2f67896edc187c3064129f7ac0442e'),
(6, 'qwer', 'P', '13', 'qwer@gmail.com', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(7, 'asdfgh', 'L', '32', 'asdfgh@fghj.bom', 'qwertyu', 'e86fdc2283aff4717103f2d44d0610f7'),
(10, 'miftahul resqy', 'L', '23', 'miftahul@gmail.com', 'nanias', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama`, `solusi`) VALUES
('P01', 'Gagal Ginjal Akut (GGA)', '(1)	Memperbanyak konsumsi air putih untuk mencegah terjadinya dehidrasi.\r\n(2)	Menghentikan obat-obatan yang dapat memicu atau memperparah gagal ginjal akut.\r\n(3)	Berkonsultasi dengan dokter spesialis urologi atau spesialis ginjal apabila penyebab gagal ginjal akut tidak jelas, atau apabila terdeteksi adanya penyebab lain yang lebih serius.'),
('P02', 'Gagal Ginjal Kronik (GGK)', '(1)	Hindari makanan banyak mengandung kalium, fosfor, garam atau protein tinggi.\r\n(2)	Sangat penting untuk menjaga tekanan darah dan memeriksanya secara berkala.\r\n(3)	Obat yang bersifat diuretik dapat mencegah terjadinya penumpukan cairan dalam tubuh.\r\n(4)	Hentikan penggunaan obat-obatan tertentu yang dapat memicu kerusakan pada ginjal.\r\n(5)	Segera kedokter untuk melakukan transfusi darah apabila mengalami anemia.\r\n'),
('P03', 'Infeksi Saluran Kemih (ISK)', '(1)	Mengonsumsi dosis rendah antibiotik dalam periode yang lebih lama untuk membantu mencegah infeksi berulang\r\n(2)	Mengonsumsi antibiotik selama 1 atau 2 hari setiap gejala kali muncul\r\n(3)	Jangan tahan keinginan untuk kencing karena dengan mengosongkan kandung kemih, dapat mencegah bakteri untuk makin berkembang biak.\r\n(4)	Minum banyak air.\r\n(5)	Redakan nyeri dengan kompres hangat.'),
('P04', 'Kista Ginjal', '(1)	Olahraga teratur. \r\n(2)	Makan diet seimbang. \r\n(3)	Mengurangi stres. Stres dapat memicu atau memperburuk tanda-tanda dan gejala. \r\n'),
('P05', 'Batu Ginjal', '(1)	Banyak minum air, paling tidak 2-3 liter perhari\r\n(2)	Hubungi dokter Anda jika kondisi memburuk.\r\n'),
('P06', 'Kanker Ginjal', '(1)	Olahraga rutin.\r\n(2)	Tidur yang cukup\r\n(3)	Perbanyak istirahat dan bersantai\r\n(4)	Hubungi dokter jika melihat darah di air seni atau mengalami rasa nyeri atau pembengkakan di sekitar perut.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rulecf`
--

CREATE TABLE `tb_rulecf` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruleds`
--

CREATE TABLE `tb_ruleds` (
  `id` int(11) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `id_penyakit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruleds`
--

INSERT INTO `tb_ruleds` (`id`, `id_gejala`, `id_penyakit`) VALUES
(1, 'G01', 'P01'),
(2, 'G02', 'P01'),
(4, 'G03', 'P01'),
(5, 'G04', 'P01'),
(6, 'G05', 'P01'),
(7, 'G06', 'P01'),
(8, 'G07', 'P01'),
(9, 'G02', 'P02'),
(10, 'G03', 'P02'),
(11, 'G05', 'P02'),
(12, 'G08', 'P02'),
(13, 'G09', 'P02'),
(14, 'G10', 'P02'),
(15, 'G11', 'P02'),
(16, 'G12', 'P02'),
(17, 'G13', 'P02'),
(18, 'G02', 'P03'),
(19, 'G14', 'P03'),
(20, 'G15', 'P03'),
(21, 'G16', 'P03'),
(22, 'G17', 'P03'),
(23, 'G18', 'P03'),
(24, 'G19', 'P03'),
(25, 'G20', 'P03'),
(26, 'G21', 'P03'),
(27, 'G11', 'P04'),
(28, 'G18', 'P04'),
(29, 'G22', 'P04'),
(30, 'G23', 'P04'),
(31, 'G24', 'P04'),
(32, 'G30', 'P04'),
(33, 'G02', 'P05'),
(34, 'G19', 'P05'),
(35, 'G20', 'P05'),
(36, 'G25', 'P05'),
(37, 'G26', 'P05'),
(38, 'G18', 'P06'),
(39, 'G27', 'P06'),
(40, 'G28', 'P06'),
(41, 'G29', 'P06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `umur` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `jk`, `umur`, `email`, `username`, `password`, `level`) VALUES
(1, 'nani astuti triana', 'P', '22', 'nani@gmail.com', 'nanias', '289fc4f0c9e5ac572f004502d79c89eb', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_hitungcf`
--
ALTER TABLE `tb_hitungcf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hitungds`
--
ALTER TABLE `tb_hitungds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ruleds`
--
ALTER TABLE `tb_ruleds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hitungcf`
--
ALTER TABLE `tb_hitungcf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hitungds`
--
ALTER TABLE `tb_hitungds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pengunjung`
--
ALTER TABLE `tb_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_rulecf`
--
ALTER TABLE `tb_rulecf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ruleds`
--
ALTER TABLE `tb_ruleds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
