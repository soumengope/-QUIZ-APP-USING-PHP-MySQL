-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2024 at 06:47 AM
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
-- Database: `myDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_users`
--

CREATE TABLE `quiz_users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `t_scr` int(11) DEFAULT NULL,
  `f_scr` int(11) DEFAULT NULL,
  `html` int(11) DEFAULT NULL,
  `css` int(11) DEFAULT NULL,
  `js` int(11) DEFAULT NULL,
  `php` int(11) DEFAULT NULL,
  `ans_keys` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_users`
--

INSERT INTO `quiz_users` (`id`, `f_name`, `l_name`, `email`, `pass`, `t_scr`, `f_scr`, `html`, `css`, `js`, `php`, `ans_keys`) VALUES
(1, 'SOUMEN', 'GOPE', 'soumengop@gmail.com', '12345678', 7, 40, 0, 0, 0, 0, '1000000000111000100010000000001000000000'),
(2, 'MENSOU', 'GOP', 'mensou@gmail.com', '1234567890', 27, 40, 0, 0, 0, 0, '1111111111101001110010110110111100111000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_users`
--
ALTER TABLE `quiz_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_users`
--
ALTER TABLE `quiz_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
