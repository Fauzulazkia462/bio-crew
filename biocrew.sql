-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 08:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biocrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `kontak_keluarga` varchar(100) DEFAULT NULL,
  `hubungan_keluarga` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `martial` varchar(100) DEFAULT NULL,
  `sim` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `lastedu` varchar(100) DEFAULT NULL,
  `yearedu` varchar(100) DEFAULT NULL,
  `edufocus` varchar(100) DEFAULT NULL,
  `eduname` varchar(100) DEFAULT NULL,
  `companyname1` varchar(100) DEFAULT NULL,
  `lastposition1` varchar(100) DEFAULT NULL,
  `sdate1` date DEFAULT NULL,
  `edate1` date DEFAULT NULL,
  `companyname2` varchar(100) DEFAULT NULL,
  `lastposition2` varchar(100) DEFAULT NULL,
  `sdate2` date DEFAULT NULL,
  `edate2` date DEFAULT NULL,
  `companyname3` varchar(100) DEFAULT NULL,
  `lastposition3` varchar(100) DEFAULT NULL,
  `sdate3` date DEFAULT NULL,
  `edate3` date DEFAULT NULL,
  `reason1` varchar(500) DEFAULT NULL,
  `reason2` varchar(500) DEFAULT NULL,
  `reason3` varchar(500) DEFAULT NULL,
  `prestasi` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `salary` decimal(10,0) DEFAULT NULL,
  `workstart` varchar(100) DEFAULT NULL,
  `file_name` longtext DEFAULT NULL,
  `npwp` text DEFAULT NULL,
  `ktp` bigint(20) DEFAULT NULL,
  `kk` bigint(20) DEFAULT NULL,
  `noBpjs` bigint(40) DEFAULT NULL,
  `noBpjsTk` bigint(40) DEFAULT NULL,
  `read` int(11) DEFAULT 0,
  `status_data` varchar(10) DEFAULT 'DB',
  `insert_date` datetime DEFAULT current_timestamp(),
  `read_date` datetime DEFAULT NULL,
  `tp_date` date DEFAULT NULL,
  `wc_date` date DEFAULT NULL,
  `ts_date` date DEFAULT NULL,
  `gb_date` date DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `input_status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `address`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `phone`, `kontak_keluarga`, `hubungan_keluarga`, `email`, `place`, `dob`, `gender`, `martial`, `sim`, `religion`, `lastedu`, `yearedu`, `edufocus`, `eduname`, `companyname1`, `lastposition1`, `sdate1`, `edate1`, `companyname2`, `lastposition2`, `sdate2`, `edate2`, `companyname3`, `lastposition3`, `sdate3`, `edate3`, `reason1`, `reason2`, `reason3`, `prestasi`, `status`, `salary`, `workstart`, `file_name`, `npwp`, `ktp`, `kk`, `noBpjs`, `noBpjsTk`, `read`, `status_data`, `insert_date`, `read_date`, `tp_date`, `wc_date`, `ts_date`, `gb_date`, `deleted_at`, `updated_at`, `input_status`) VALUES
(1, 'test', 'asd', '23', '423', 'asd', 'asdasd', 'asdad', '123123', '12312', 'Ayah', 'test', 'test', '2022-11-17', 'perempuan', 'Menikah', NULL, 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '123123', 1123, 123, 123, 123123, 0, 'DB', '2022-11-24 15:07:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'test2', 'test2', '12', '12', 'test2', 'test2', 'test2', '462', '23423423', 'Ayah', 'test2', 'test2', '2022-11-03', 'laki-laki', 'Duda/Janda', NULL, 'Protestan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '12334', 123, 123, 12, 34234, 0, 'DB', '2022-11-24 15:10:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, 'asjdfhaldjf', 'asjdfhaldjf', '2', '1', 'asjdfhaldjf', 'asjdfhaldjf', 'asjdfhaldjf', '2345', '234', 'Istri', 'asjdfhaldjf', '2345', '0011-11-11', 'perempuan', 'Cerai', NULL, 'Katholik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '13.24', 1234, 1234, 1234, 1324, 0, 'DB', '2022-12-02 13:14:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'asjdfhaldjf', 'asjdfhaldjf', '2', '1', 'asjdfhaldjf', 'asjdfhaldjf', 'asjdfhaldjf', '2345', '234', 'Istri', 'asjdfhaldjf', '2345', '0011-11-11', 'perempuan', 'Cerai', NULL, 'Katholik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '13.24', 1234, 1234, 1234, 1324, 0, 'DB', '2022-12-02 13:14:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
