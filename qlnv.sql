-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 02:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnv`
--

-- --------------------------------------------------------

--
-- Table structure for table `calamviecs`
--

CREATE TABLE `calamviecs` (
  `calamviec_id` int(11) NOT NULL,
  `calamviec` varchar(31) NOT NULL,
  `calamviec_code` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `calamviecs`
--

INSERT INTO `calamviecs` (`calamviec_id`, `calamviec`, `calamviec_code`) VALUES
(1, '1', 'c_sang'),
(2, '2', 'c_chieu'),
(3, '3', 'c_toi'),
(4, '4', 'c_dem');

-- --------------------------------------------------------

--
-- Table structure for table `giamdoc`
--

CREATE TABLE `giamdoc` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `giamdoc`
--

INSERT INTO `giamdoc` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(2, 'jharon', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'jHaron', 'Nguyen');

-- --------------------------------------------------------

--
-- Table structure for table `khuvucs`
--

CREATE TABLE `khuvucs` (
  `khuvuc_id` int(11) NOT NULL,
  `khuvuc` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khuvucs`
--

INSERT INTO `khuvucs` (`khuvuc_id`, `khuvuc`) VALUES
(1, 'k1'),
(2, 'k2'),
(3, 'k3'),
(4, 'k4');

-- --------------------------------------------------------

--
-- Table structure for table `nhanviens`
--

CREATE TABLE `nhanviens` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ngaysinh` date NOT NULL DEFAULT current_timestamp(),
  `ngayvaolam` date NOT NULL DEFAULT current_timestamp(),
  `sdt` varchar(20) NOT NULL,
  `cccd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nhanviens`
--

INSERT INTO `nhanviens` (`id`, `username`, `password`, `fname`, `lname`, `gioitinh`, `diachi`, `email`, `ngaysinh`, `ngayvaolam`, `sdt`, `cccd`) VALUES
(1, 'an', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'An', 'Huỳnh', 'Nam', 'Vĩnh Hải', 'anhuynh@gmail.com', '2002-09-19', '2023-03-01', '0818462260', '225467541235'),
(2, 'tien', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Tiến', 'Đinh', 'Nam', 'Vĩnh Ngọc', 'tiendinh@gmail.com', '2002-08-22', '2023-03-01', '0848831423', '221354210215'),
(3, 'hoc', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Hiếu', 'Học', 'Nam', 'Vĩnh Phước', 'hieuhoc@gmail.com', '2002-10-22', '2023-03-01', '0561234879', '224687512035'),
(4, 'hung', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Gia', 'Hưng', 'Nam', 'Nguyễn Trãi', 'giahung@gmail.com', '2002-06-26', '2023-03-01', '0965123487', '215423251204');

-- --------------------------------------------------------

--
-- Table structure for table `phancongs`
--

CREATE TABLE `phancongs` (
  `phancong_id` int(11) NOT NULL,
  `calamviec` int(11) NOT NULL,
  `khuvuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phancongs`
--

INSERT INTO `phancongs` (`phancong_id`, `calamviec`, `khuvuc`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 2, 4),
(9, 3, 1),
(10, 3, 2),
(11, 3, 3),
(12, 3, 4),
(13, 4, 1),
(14, 4, 2),
(15, 4, 3),
(16, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quanlys`
--

CREATE TABLE `quanlys` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `khuvucs` varchar(31) NOT NULL,
  `calamviecs` varchar(31) NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ngaysinh` date NOT NULL DEFAULT current_timestamp(),
  `ngayvaolam` date NOT NULL DEFAULT current_timestamp(),
  `sdt` varchar(20) NOT NULL,
  `cccd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `quanlys`
--

INSERT INTO `quanlys` (`id`, `username`, `password`, `fname`, `lname`, `khuvucs`, `calamviecs`, `gioitinh`, `diachi`, `email`, `ngaysinh`, `ngayvaolam`, `sdt`, `cccd`) VALUES
(1, 'huy', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Huy', 'Lương', '', '', '', '', '', '2023-10-29', '2023-10-29', '', ''),
(2, 'pine', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Pile', 'Nguyễn', '', '', '', '', '', '2023-10-29', '2023-10-29', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calamviecs`
--
ALTER TABLE `calamviecs`
  ADD PRIMARY KEY (`calamviec_id`);

--
-- Indexes for table `giamdoc`
--
ALTER TABLE `giamdoc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `khuvucs`
--
ALTER TABLE `khuvucs`
  ADD PRIMARY KEY (`khuvuc_id`);

--
-- Indexes for table `nhanviens`
--
ALTER TABLE `nhanviens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `phancongs`
--
ALTER TABLE `phancongs`
  ADD PRIMARY KEY (`phancong_id`);

--
-- Indexes for table `quanlys`
--
ALTER TABLE `quanlys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calamviecs`
--
ALTER TABLE `calamviecs`
  MODIFY `calamviec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `giamdoc`
--
ALTER TABLE `giamdoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khuvucs`
--
ALTER TABLE `khuvucs`
  MODIFY `khuvuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanviens`
--
ALTER TABLE `nhanviens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phancongs`
--
ALTER TABLE `phancongs`
  MODIFY `phancong_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quanlys`
--
ALTER TABLE `quanlys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
