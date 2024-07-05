-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 01:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_1eb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `lauk_utama` varchar(255) DEFAULT NULL,
  `lauk_tambahan_satu` varchar(255) DEFAULT NULL,
  `lauk_tambahan_dua` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama_pemesan`, `lauk_utama`, `lauk_tambahan_satu`, `lauk_tambahan_dua`, `catatan`) VALUES
(1, 'John Doe', 'Ayam Goreng', 'Sayur Asem', 'Tempe Goreng', 'Pedas tidak pakai cabai'),
(2, 'Jane Smith', 'Ikan Bakar', 'Tahu Goreng', NULL, 'Bumbu lebih sedikit'),
(3, 'Michael Johnson', 'Sop Iga', '1', '1', 'Tidak pakai garam'),
(5, 'NENGAH', 'LAWAR BALI', 'SATE LILIT BALI', 'KERUPUK JOSS', 'NO PEDAS!!!'),
(6, '1', '1', '1', '1', '1'),
(9, 'NENG\'AH', 'LAWAR BALI', 'SATE LILIT BALI', 'SOP IGA BALI', 'TIDAK PEDAS'),
(10, 'NENGAH', '1', '1', '1', '1'),
(12, '1', 'm', '  ', 'k', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `NAMA_LENGKAP` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `ALAMAT` text DEFAULT NULL,
  `HOBBY` varchar(255) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`NAMA_LENGKAP`, `EMAIL`, `PASSWORD`, `NO_HP`, `ALAMAT`, `HOBBY`, `TANGGAL_LAHIR`) VALUES
('', '', '', '', '', '', '0000-00-00'),
('MA\'WA', '1@1.COM', '1', '0999877', 'HAJI GANG A\'LI', '123', '2024-07-22'),
('79YIIH', 'NENGAH00@GMAIL.COM', '$2y$10$5XL5hIxeVF2EJRVL3rr11.o5vN1GxEzncf6Nki/IkCKR/rYHSIRJa', '0909876', 'IH', 'YIUOI', '2024-07-24'),
('yuda', 'NENGAH1@GMAIL.COM', '$2y$10$.9x7qq7HZHm3cdSWpDmAteD5KqkL4LIqjFwCgoXuRMNuouI1ngtUW', '0987654', '1', '1', '2024-07-02'),
('3456', 'NENGAH32456@GMAIL.COM', 'GANTENG', '098765', 'HFGDFSDFHNGD', 'NDGBFSDAGGS', '2024-07-03'),
('SDFGHJ', 'NENGAH34567@GMAIL.COM', 'GANTENG', '46578', 'DFGHJ', 'FGH', '2024-07-03'),
('WERTYU', 'NENGAH345@GMAIL.COM', '$2y$10$E36lWwqTO5JIjvoxsWOqieAcRMYQmJrR8nAg7VcwAI/Lw9L134Dou', '09876', 'FDXGFHCGJMD', 'GHNTDZ', '2024-07-23'),
('65768', 'NENGAH3465@GMAIL.COM', 'GANTENG', '65768', '6768', '7687', '2024-07-18'),
('WRETXYHF', 'NENGAH34R5@GMAIL.COM', '$2y$10$WiK9ljPehjHjUZw6nZJAJ.TN4KzYGQhRNRnY6qN9vqRrkxJ.H/5gq', '09876', 'DFG', 'RTEYRH', '2024-07-25'),
('35467', 'NENGAH456@GMAIL.COM', 'GANTENG', '354678', 'FGH', 'RFETGRH', '2024-07-19'),
('TUIHOJ', 'NENGAH68798@GMAIL.COM', '$2y$10$xJqxyaERIJfNlGM9/DFvTuhW9ijZynL.wdPoDyIVWcVsKdM7bl8ie', '09876', 'FYUGIHYFUG', 'FYUYI', '2024-07-08'),
('FYGUIHOJ', 'NENGAH987@GMAIL.COM', '$2y$10$pCQ5xHgXwrtAs7M5ZStYd.21uekPgQ3JiPfVqUD7VHCqg6Ay9ngJ6', '09876', 'FYGUHIJ', 'TY', '2024-07-08'),
('NENGAH', 'NENGAH@GMAIL.COM', 'GANTENG', '978675', '9786756;', '978675\'', '2024-07-03'),
('345ETXG', 'NENGAHERET@GMAIL.COM', '$2y$10$E0IRbSuWzVtMMtdQkqUylObxeA2AqpoAu.Avtmjm740hZ9o4rlfKy', '09876', 'ASFDGDSFGD', 'HFGGF', '2024-07-25'),
('WERTYH', 'NENGAHR5TEY@GMAIL.COM', '$2y$10$JWl9mmXW.WB3F0WIGCJL/u1ufH47DmE7D/wjRF4H1L3daLJihr1N2', '98765', 'ZDXGFHC', 'XTFHCG', '2024-07-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`EMAIL`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
