-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 07:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `email`, `Password`, `Status`) VALUES
(1, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(2, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(3, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(4, 'Eunice', 'euniceinfante@gmail.com', '', ''),
(5, 'Eunice', 'euniceinfante@gmail.com', '', ''),
(6, 'Eunice', 'euniceinfante@gmail.com', '', ''),
(7, 'Eunice', 'euniceinfante@gmail.com', '', ''),
(8, 'Eunice', 'euniceinfante@gmail.com', '', ''),
(9, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(10, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(11, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(12, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(13, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(14, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(15, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(16, 'Reame Jose', 'reamejose16@gmail.com', '', ''),
(17, 'Reame Jose', 'reamejose16@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
