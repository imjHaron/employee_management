-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 06:16 PM
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
  `calamviec` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `calamviecs`
--

INSERT INTO `calamviecs` (`calamviec_id`, `calamviec`) VALUES
(1, 'Ca sáng'),
(2, 'Ca chiều'),
(3, 'Ca tối'),
(14, 'Ca sớm');

-- --------------------------------------------------------

--
-- Table structure for table `giamdoc`
--

CREATE TABLE `giamdoc` (
  `giamdoc_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `giamdoc`
--

INSERT INTO `giamdoc` (`giamdoc_id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'jharon', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'jHaron', 'Nguyen');

-- --------------------------------------------------------

--
-- Table structure for table `khuvuc`
--

CREATE TABLE `khuvuc` (
  `khuvuc_id` int(11) NOT NULL,
  `khuvuc` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khuvuc`
--

INSERT INTO `khuvuc` (`khuvuc_id`, `khuvuc`) VALUES
(1, 'Khu 1'),
(2, 'Khu 2'),
(3, 'Khu 3');

-- --------------------------------------------------------

--
-- Table structure for table `nhanviens`
--

CREATE TABLE `nhanviens` (
  `nhanvien_id` int(11) NOT NULL,
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
  `cccd` varchar(20) NOT NULL,
  `phancong_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhanviens`
--

INSERT INTO `nhanviens` (`nhanvien_id`, `username`, `password`, `fname`, `lname`, `gioitinh`, `diachi`, `email`, `ngaysinh`, `ngayvaolam`, `sdt`, `cccd`, `phancong_id`) VALUES
(1, 'an', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Huỳnh Thế', 'An', 'Nữ', 'Vĩnh Hải', 'anhuynh@gmail.com', '2002-09-19', '2023-08-01', '0818462260', '225467541235', 1),
(2, 'tien', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Đinh Lê Nhật', 'Tiến', 'Nam', 'Vĩnh Ngọc', 'tiendinh@gmail.com', '2002-08-22', '2023-08-01', '0848831423', '221354210215', 2),
(3, 'hoc', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Trần Hiếu', 'Học', 'Nữ', 'Vĩnh Phước', 'hieuhoc@gmail.com', '2002-10-22', '2023-08-01', '0561234879', '224687512035', 1),
(4, 'hung', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Lê Gia', 'Hưng', 'Nam', 'Nguyễn Trãi', 'giahung@gmail.com', '2002-06-26', '2023-08-01', '0965123487', '215423251204', 3),
(5, 'tam', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Đinh Công', 'Tâm', 'Nữ', 'Võ Nguyên Giáp', 'congtam@gmail.com', '2002-08-14', '2023-08-01', '0905616532', '224842615757', 1),
(6, 'kiet', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Nguyễn Tấn', 'Kiệt', 'Nam', 'Phước Long', 'kietnguyen@gmail.com', '2002-10-15', '2023-08-01', '0935137691', '224368915766', 1),
(7, 'nhuy', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Nguyễn Như', 'Ý', 'Nữ', 'Cà Mau', 'ynguyen@gmail.com', '2001-01-01', '2023-08-01', '0703156950', '210034979821', 1),
(8, 'phuong', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Huỳnh Nguyễn Uyên', 'Phương', 'Nữ', 'Ninh Hòa', 'phuongnguyen@gmail.com', '2005-11-02', '2023-08-01', '0325869143', '220573614298', 3),
(9, 'dat', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Nguyễn Thành', 'Đạt', 'Nam', 'Ninh Quang', 'datnguyen@gmail.com', '2002-09-02', '2023-08-01', '0365955411', '229853647158', 4),
(10, 'hao', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Hà Thanh', 'Hào', 'Nam', 'Bình Tây', 'haoha@gmail.com', '2002-07-25', '2023-08-01', '0764306680', '226047819254', 5),
(11, 'huu', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Trần Văn', 'Hữu', 'Nam', 'Ninh Diêm', 'huutran@gmail.com', '2002-01-26', '2023-08-01', '0965954255', '220695346555', 5),
(12, 'nguyen', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Khuất Ngọc', 'Nguyên', 'Nữ', 'Vĩnh Phương', 'nguyenkhuat@gmail.com', '2003-01-14', '2023-08-01', '0974521227', '236847965655', 2),
(13, 'khuong', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Cao Xuân', 'Khương', 'Nam', 'Thạnh Danh', 'khuongcao@gmail.com', '2002-08-18', '2023-08-01', '0854134995', '221789556124', 4),
(14, 'thu', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Huỳnh', 'Thư', 'Nữ', 'Phú Thọ', 'thuhuynh@gmail.com', '2000-06-13', '2023-08-01', '0977456333', '204789663136', 3),
(15, 'phong', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Võ', 'Phong', 'Nam', 'Phú Thọ', 'phongvo@gmail.com', '2000-03-16', '2023-08-01', '0648596317', '203334462033', 3);

-- --------------------------------------------------------

--
-- Table structure for table `phancong`
--

CREATE TABLE `phancong` (
  `phancong_id` int(11) NOT NULL,
  `calamviec` int(11) NOT NULL,
  `khuvuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phancong`
--

INSERT INTO `phancong` (`phancong_id`, `calamviec`, `khuvuc`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quanlys`
--

CREATE TABLE `quanlys` (
  `quanly_id` int(11) NOT NULL,
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
  `cccd` varchar(20) NOT NULL,
  `phancong_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `quanlys`
--

INSERT INTO `quanlys` (`quanly_id`, `username`, `password`, `fname`, `lname`, `gioitinh`, `diachi`, `email`, `ngaysinh`, `ngayvaolam`, `sdt`, `cccd`, `phancong_id`) VALUES
(1, 'huy', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Lương Nhật', 'Huy', 'Nam', 'Vĩnh Phước', 'huyluong@gmail.com', '2002-05-10', '2023-08-01', '0154223651', '225467545412', 1),
(2, 'pine', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Nguyễn Tấn', 'Triển', 'Nam', 'Lương Sơn', 'trien@gmail.com', '2002-04-06', '2023-08-01', '0541114785', '325125478563', 2),
(3, 'bep', '$2y$10$1CncI0K37QwKeRmwqhYQuejklHJTpQNXD.bLxgC0LD5UrcgajEyJO', 'Nguyễn Thanh', 'Lam', 'Nữ', 'Lương Sơn', 'bep@gmailcom', '2002-04-05', '2023-08-01', '0969554132', '224587541253', 8);

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
  ADD PRIMARY KEY (`giamdoc_id`);

--
-- Indexes for table `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`khuvuc_id`);

--
-- Indexes for table `nhanviens`
--
ALTER TABLE `nhanviens`
  ADD PRIMARY KEY (`nhanvien_id`),
  ADD KEY `phancong_id` (`phancong_id`),
  ADD KEY `phancong_id_2` (`phancong_id`),
  ADD KEY `phancong_id_3` (`phancong_id`);

--
-- Indexes for table `phancong`
--
ALTER TABLE `phancong`
  ADD PRIMARY KEY (`phancong_id`),
  ADD KEY `calamviec` (`calamviec`,`khuvuc`),
  ADD KEY `phancong_ibfk_1` (`khuvuc`);

--
-- Indexes for table `quanlys`
--
ALTER TABLE `quanlys`
  ADD PRIMARY KEY (`quanly_id`),
  ADD KEY `phancong_id` (`phancong_id`),
  ADD KEY `phancong_id_2` (`phancong_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calamviecs`
--
ALTER TABLE `calamviecs`
  MODIFY `calamviec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `giamdoc`
--
ALTER TABLE `giamdoc`
  MODIFY `giamdoc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `khuvuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nhanviens`
--
ALTER TABLE `nhanviens`
  MODIFY `nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `phancong`
--
ALTER TABLE `phancong`
  MODIFY `phancong_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quanlys`
--
ALTER TABLE `quanlys`
  MODIFY `quanly_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phancong`
--
ALTER TABLE `phancong`
  ADD CONSTRAINT `phancong_ibfk_1` FOREIGN KEY (`khuvuc`) REFERENCES `khuvuc` (`khuvuc_id`),
  ADD CONSTRAINT `phancong_ibfk_2` FOREIGN KEY (`calamviec`) REFERENCES `calamviecs` (`calamviec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
