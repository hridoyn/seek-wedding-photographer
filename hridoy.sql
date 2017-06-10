-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 03:01 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hridoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ConfirmPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Username`, `Gender`, `Email`, `Password`, `ConfirmPassword`) VALUES
('Samia Zahan', 'sz2500', 'female', 'sz@gmail.com', 'Sz4586##', 'Sz4586##'),
('Fahim Forhad', 'Fahim_20', 'male', 'fahim@gmail.com', 'Fahim2900##', 'Fahim2900##'),
('', '', '', '', '', ''),
('Nafiz Islam', 'nin', 'male', 'nin@yahoo.com', 'Nin270698##', 'Nin270698##'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Kamrul Islam', 'Kamrul790', 'male', 'kamrul79@gmail.com', 'Kamrul2980##*', 'Kamrul2980##*'),
('Jahanara Begum', 'jahanB', 'female', 'Jahan@gmail.com', 'Jahan**27068l', 'Jahan**27068l'),
('Redwan Nasim', 'hridoyn', 'male', 'hridoyn@gmail.com', 'Hridoy###27068', 'Hridoy###27068'),
('Alvi Haque', 'alvi420', 'male', 'alvi@gmail.com', 'Alvi27068**', 'Alvi27068**'),
('Jahanara Begum', 'JahanA', 'male', 'Jahan@gmail.com', 'Jahanara###27068', 'Jahanara###27068'),
('Nasim Akter', 'nasim_n', 'male', 'nasim@gmail.com', 'Nasim##27068', 'Nasim##27068');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
