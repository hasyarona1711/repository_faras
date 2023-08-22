-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 01:49 PM
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
(20, 19, 'BAB I', 'Submitted Version', 'Text', 'Anyone', 'English', 'ini adalah bab 1', 241630, 0x433a5c78616d70705c746d705c706870363734412e746d70),
(21, 19, 'BAB VI', 'Submitted Version', 'Text', 'Anyone', 'Indonesia', 'ini adalah bab 6', 157055, 0x433a5c78616d70705c746d705c706870453845462e746d70),
(22, 19, 'COVER DAN ABSTRAK', 'Submitted Version', 'Text', 'Anyone', 'Indonesia', 'ini adalah cover dan abstrak', 73030, 0x433a5c78616d70705c746d705c706870343846322e746d70),
(23, 19, 'DAFTAR PUSTAKA', 'Submitted Version', 'Text', 'Anyone', 'Indonesia', 'ini adalah daftar pustaka', 194201, 0x433a5c78616d70705c746d705c7068703943322e746d70),
(28, 19, 'SKRIPSI FULL TEXT HASYA RONA AMIRAHMI', 'Submitted Version', 'Text', 'Registered Users Only', 'Indonesia', 'ini adalah full skripsi', 4522642, 0x433a5c78616d70705c746d705c706870373444392e746d70);

-- --------------------------------------------------------

--
-- Table structure for table `detail_author`
--

CREATE TABLE `detail_author` (
  `id` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_author`
--

INSERT INTO `detail_author` (`id`, `id_item`, `nama_depan`, `nama_belakang`) VALUES
(5, 19, 'Lathifa ', 'Hardi'),
(6, 19, 'Mayang Sari', 'Deyuvi');

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
  `id_fakultas` int(11) NOT NULL,
  `id_sub_subjek` int(11) NOT NULL,
  `id_jenis_dokumen` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `abstrak` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `penulis_depan` varchar(255) NOT NULL,
  `penulis_belakang` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
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

INSERT INTO `item` (`id`, `id_tipe`, `id_jenjang`, `id_jurusan`, `id_fakultas`, `id_sub_subjek`, `id_jenis_dokumen`, `username`, `judul`, `abstrak`, `tahun`, `penulis_depan`, `penulis_belakang`, `nim`, `status`, `dosen_pembimbing`, `kata_kunci`, `referensi`, `email`, `created_at`, `updated_at`) VALUES
(19, 6, 2, 53, 14, 1, 1, 'sisinfor', 'Penerapan Enterprise Resource Planning pada Perusahaan Event Organizer untuk Sistem Pembelian, Pengelolaan Customer, dan Penggajian Menggunakan Odoo', 'PT. ATIRO LUCKY SUBETAMA merupakan perusahaan jasa yang bergerak dibidang Event Organizer (EO) dan periklanan. Proses bisnis yang terjadi di perusahaan ini adalah proses pembelian sponsor, pengelolaan data customer, dan penggajian pegawai. Proses bisnis yang sedang berjalan di perusahaan ini masih menggunakan sistem yang mana pegawai menyimpan data transaksi menggunakan Microsoft office dan menggunakan paper based untuk mencatat data penggajian pegawai. Sistem tersebut dapat mengakibatkan terjadinya kesalahan pencatatan data pembelian sponsor, lambatnya pertukaran informasi, kesalahan proses perhitungan gaji pegawai, dan membutuhkan biaya lebih untuk penyimpanan berkas. Oleh karena itu, diperlukan manajemen proses bisnis untuk mengoptimalkan proses bisnis pada perusahaan. Pada siklus manajemen proses bisnis terdapat beberapa tahapan yang diawali dengan identifikasi proses bisnis yang berjalan di perusahaan. Setelah itu proses bisnis akan dilakukan analisis untuk mengetahui masalah dan kelemahan yang terdapat pada proses bisnis tersebut. Setelah itu proses bisnis akan di rancang ulang untuk diusulkan kepada perusahaan. Proses bisnis dirancang menggunakan Business Process Modelling Notation (BPMN). Setelah itu dilakukan implementasi proses bisnis yang sudah diusulkan dengan menggunakan Enterprise Resource Planning (ERP) Odoo sehingga dapat membantu perusahaan dalam melaksanakan proses bisnis menjadi efektif dan efisien. Pada penerapan ERP dilakukan kofigurasi dan kustomisasi aplikasi ERP sesuai dengan proses bisnis yang sudah diusulkan. Setelah itu dilakukan pengujian aplikasi ERP pada perusahaan. Hasil dari penelitian ini, yaitu penerapan aplikasi Odoo dapat membantu perusahaan dalam mengatasi masalah yang terjadi dan membantu menjalankan proses bisnis perusahaan dengan efektif dan efisien.', 2023, 'Hasya Rona', 'Amirahmi', 1811521003, 'unpublished', 'Hasdi Putra, M.T.', 'ERP, Event Organizer, Sistem Informasi, Pembelian, Penggajian, Customer', 'ini adalah referensi', 'hasyarona1711@gmail.com', '2023-08-21 16:25:49', '2023-08-21 18:35:58');

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
-- Table structure for table `tipe_file`
--

CREATE TABLE `tipe_file` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_file`
--

INSERT INTO `tipe_file` (`id`, `nama`) VALUES
(1, 'Article'),
(2, 'Book Section'),
(3, 'Monograph'),
(4, 'Conference or Workshop Item'),
(5, 'Book'),
(6, 'Thesis'),
(7, 'Patent'),
(8, 'Artefact'),
(9, 'Show/Exhibition'),
(10, 'Composition'),
(11, 'Performance'),
(12, 'Image'),
(13, 'Video'),
(14, 'Audio'),
(15, 'Dataset'),
(16, 'Experiment'),
(17, 'Teaching Resource'),
(18, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `id_jurusan`, `nama`, `email`, `password`) VALUES
('sisinfor', 53, 'Sistem Informasi', 'sisteminformasi@gmail.com', 'sisteminformasi123');

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
-- Indexes for table `detail_author`
--
ALTER TABLE `detail_author`
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
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `username` (`username`),
  ADD KEY `id_fakultas` (`id_fakultas`);

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
-- Indexes for table `tipe_file`
--
ALTER TABLE `tipe_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `att_files`
--
ALTER TABLE `att_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_author`
--
ALTER TABLE `detail_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT for table `tipe_file`
--
ALTER TABLE `tipe_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `att_files`
--
ALTER TABLE `att_files`
  ADD CONSTRAINT `att_files_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`);

--
-- Constraints for table `detail_author`
--
ALTER TABLE `detail_author`
  ADD CONSTRAINT `detail_author_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_10` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `item_ibfk_11` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id`),
  ADD CONSTRAINT `item_ibfk_5` FOREIGN KEY (`id_sub_subjek`) REFERENCES `sub_subjek` (`id`),
  ADD CONSTRAINT `item_ibfk_6` FOREIGN KEY (`id_jenis_dokumen`) REFERENCES `jenis_dokumen` (`id`),
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
