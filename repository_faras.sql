-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 05:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository_faras`
--

-- --------------------------------------------------------

--
-- Table structure for table `att_files`
--

CREATE TABLE `att_files` (
  `id` int(11) NOT NULL,
  `id_item` int(11) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `visible` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `att_files`
--

INSERT INTO `att_files` (`id`, `id_item`, `judul`, `content`, `type`, `visible`, `language`, `deskripsi`, `size`, `file`) VALUES
(5, 15, 'COVER DAN ABSTRAK.pdf', 'Published Version', 'Text', 'Anyone', 'Indonesia', 'ini file cover dan abstrak hasya', 73030, 0x433a5c78616d70705c746d705c706870354531352e746d70),
(8, 15, 'BAB I.pdf', 'UNSPECIFIED', 'Text', 'Anyone', 'Indonesia', 'ini adalah file BAB 1 hasya', 241630, 0x433a5c78616d70705c746d705c706870364441352e746d70),
(9, 15, 'BAB VI.pdf', 'Submitted Version', 'Text', 'Anyone', 'Indonesia', 'ini adalah BAB VI hasya', 157055, 0x433a5c78616d70705c746d705c706870394442412e746d70),
(10, 15, 'DAFTAR PUSTAKA.pdf', 'Submitted Version', 'Text', 'Anyone', 'Indonesia', 'ini adalah daftar pustaka hasya', 194201, 0x433a5c78616d70705c746d705c706870454643362e746d70),
(11, 15, 'SKRIPSI FULL TEXT HASYA RONA AMIRAHMI.pdf', 'Submitted Version', 'Text', 'Registered Users Only', 'Indonesia', 'ini file skripsi hasya', 4522642, 0x433a5c78616d70705c746d705c706870333645462e746d70);

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`) VALUES
(1, 'Pertanian'),
(2, 'Kedokteran'),
(3, 'Hukum'),
(4, 'Matematika & Ilmu Pengetahuan Alam'),
(5, 'Ekonomi & Bisnis'),
(6, 'Peternakan'),
(7, 'Ilmu Budaya'),
(8, 'Ilmu Sosial & Ilmu Politik'),
(9, 'Teknik'),
(10, 'Farmasi'),
(11, 'Teknologi Pertanian'),
(12, 'Keperawatan'),
(13, 'Kesehatan Masyarakat'),
(14, 'Teknologi Informasi'),
(15, 'Kedokteran Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_sub_subjek` int(11) NOT NULL,
  `id_jenis_dokumen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dosen_pembimbing` varchar(255) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL,
  `referensi` varchar(10000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `id_tipe`, `id_jenjang`, `id_jurusan`, `id_sub_subjek`, `id_jenis_dokumen`, `id_user`, `judul`, `tahun`, `penulis`, `status`, `dosen_pembimbing`, `kata_kunci`, `referensi`, `email`, `created_at`, `updated_at`) VALUES
(15, 6, 2, 53, 1, 1, 1811523003, 'ini judul skripsi', 2023, 'hasya  rona', 'unpublished', 'ini dospem skripsi', 'erp, event organizer, sistem informasi', 'ini referensi skripsi', 'ini email penulis', '2023-08-16 14:11:15', '2023-08-16 14:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_dokumen`
--

INSERT INTO `jenis_dokumen` (`id`, `nama`) VALUES
(1, 'Skripsi'),
(2, 'Disertasi'),
(3, 'Tesis'),
(4, 'Jurnal'),
(5, 'Buku');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id`, `nama`) VALUES
(1, 'D3'),
(2, 'S1'),
(3, 'S2'),
(4, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jenjang` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `id_fakultas`, `id_jenjang`, `nama`) VALUES
(1, 1, 2, 'Agribisnis'),
(2, 1, 2, 'Agroekoteknologi'),
(3, 1, 2, 'Proteksi Tanaman'),
(4, 1, 2, 'Penyuluhan Pertanian'),
(5, 1, 2, 'Agroteknologi'),
(6, 1, 2, 'Ilmu Tanah'),
(7, 1, 3, 'Agronomi'),
(8, 1, 3, 'Proteksi Tanaman'),
(9, 1, 3, 'Ekonomi Pertanian'),
(10, 1, 3, 'Ilmu Tanah'),
(11, 1, 4, 'Ilmu Pertanian'),
(12, 2, 2, 'Kedokteran'),
(13, 2, 2, 'Kebidanan'),
(14, 2, 2, 'Psikologi'),
(15, 2, 2, 'Ilmu Biomedis'),
(17, 2, 4, 'Kesehatan Masyarakat'),
(18, 3, 2, ' Ilmu Hukum'),
(19, 4, 2, 'Kimia'),
(20, 4, 2, 'Biologi'),
(21, 4, 2, 'Matematika'),
(22, 4, 2, 'Fisika'),
(23, 5, 2, 'Ekonomi'),
(24, 5, 2, 'Manajemen'),
(25, 5, 2, 'Akuntansi'),
(26, 5, 2, 'Ekonomi Islam'),
(27, 6, 2, 'Peternakan'),
(28, 7, 2, 'Sastra Indonesia'),
(29, 7, 2, 'Sastra Inggris'),
(30, 7, 2, 'Sejarah'),
(31, 7, 2, 'Sastra Minangkabau'),
(32, 7, 2, 'Sastra Jepang'),
(33, 8, 2, 'Sosiologi'),
(34, 8, 2, 'Antropologi'),
(35, 8, 2, 'Ilmu Politik'),
(36, 8, 2, 'Ilmu Hubungan Internasional'),
(37, 8, 2, 'Ilmu Komunikasi'),
(38, 8, 2, 'Administrasi Publik'),
(39, 9, 2, 'Teknik Mesin'),
(40, 9, 2, 'Teknik Sipil'),
(41, 9, 2, 'Teknik Lingkungan'),
(42, 9, 2, 'Teknik Industri'),
(43, 9, 2, 'Teknik Elektro'),
(44, 9, 2, 'Arsitektur'),
(45, 10, 2, 'Farmasi'),
(46, 11, 2, 'Teknik Pertanian dan Biosistem'),
(47, 11, 2, 'Teknologi Hasil Pertanian'),
(48, 11, 2, 'Teknologi Industri Pertanian'),
(49, 12, 2, 'Keperawatan'),
(50, 13, 2, 'Kesehatan Masyarakat'),
(51, 13, 2, 'Gizi'),
(52, 14, 2, 'Teknik Komputer'),
(53, 14, 2, 'Sistem Informasi'),
(54, 14, 2, 'Informatika'),
(55, 15, 2, 'Kedokteran Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`id`, `nama`) VALUES
(1, 'General Works'),
(2, 'Philosophy.Psychology.Religion');

-- --------------------------------------------------------

--
-- Table structure for table `sub_subjek`
--

CREATE TABLE `sub_subjek` (
  `id` int(11) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_subjek`
--

INSERT INTO `sub_subjek` (`id`, `id_subjek`, `nama`) VALUES
(1, 1, 'Collections. Series. Collected works'),
(2, 1, 'History of Scholarship The Humanities'),
(3, 2, 'Philosophy (General)'),
(4, 2, 'Logic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nim` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nim`, `id_jurusan`, `nama`, `email`, `password`) VALUES
(1811521003, 53, 'Lathifa Hardi', 'lathifa.hardi11@gmail.com', 'lathifa123'),
(1811523003, 53, 'Hasya Rona Amirahmi', 'hasyarona1711@gmail.com', 'hasya123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `att_files`
--
ALTER TABLE `att_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenjang` (`id_jenjang`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_sub_subjek` (`id_sub_subjek`),
  ADD KEY `id_jenis_dokumen` (`id_jenis_dokumen`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `id_jenjang` (`id_jenjang`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_subjek`
--
ALTER TABLE `sub_subjek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subjek` (`id_subjek`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `att_files`
--
ALTER TABLE `att_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_subjek`
--
ALTER TABLE `sub_subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `att_files`
--
ALTER TABLE `att_files`
  ADD CONSTRAINT `att_files_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id`),
  ADD CONSTRAINT `item_ibfk_5` FOREIGN KEY (`id_sub_subjek`) REFERENCES `sub_subjek` (`id`),
  ADD CONSTRAINT `item_ibfk_6` FOREIGN KEY (`id_jenis_dokumen`) REFERENCES `jenis_dokumen` (`id`),
  ADD CONSTRAINT `item_ibfk_7` FOREIGN KEY (`id_user`) REFERENCES `users` (`nim`),
  ADD CONSTRAINT `item_ibfk_8` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_file` (`id`),
  ADD CONSTRAINT `item_ibfk_9` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `jurusan_ibfk_2` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id`);

--
-- Constraints for table `sub_subjek`
--
ALTER TABLE `sub_subjek`
  ADD CONSTRAINT `sub_subjek_ibfk_1` FOREIGN KEY (`id_subjek`) REFERENCES `subjek` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
