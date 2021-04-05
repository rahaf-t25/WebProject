-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2020 at 09:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confipassword` varchar(200) NOT NULL,
  `Q1` int(11) NOT NULL DEFAULT 0,
  `Q2` int(11) NOT NULL DEFAULT 0,
  `Q3` int(11) NOT NULL DEFAULT 0,
  `total` int(11) DEFAULT 0,
  `next_lesson` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`username`, `password`, `confipassword`, `Q1`, `Q2`, `Q3`, `total`, `next_lesson`) VALUES
('ggg', '123', '123', 0, 0, 0, 0, 2),
('latifah', '1234', '1234', 0, 0, 0, 0, 1),
('nnnn', '12345', '12345', 0, 0, 0, 0, 1),
('Nuha', 'noha123', 'noha123', 0, 0, 0, 0, 1),
('Rahaf', '1234', '1234', 3, 5, 3, 3, 3),
('reema', '1234', '1234', 0, 0, 0, 0, 1),
('renad', '1234', '1234', 3, 2, 3, 3, 3),
('Sahar', '1234', '1234', 0, 0, 0, 0, 1),
('sara', '1234', '1234', 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD UNIQUE KEY `email` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
