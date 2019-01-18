-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 12:32 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsbmlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `email`, `gender`, `birthday`, `username`, `password`) VALUES
('MIS-01', 'Amila', 'Perera', 'amila@gmail.com', 'Male', '1995/05/03', 'amila', 'amila123'),
('MIS-02', 'Rajitha', 'Sampath', 'rajithatcc@gmail.com', 'Male', '1990/05/03', 'rajitha', 'rajitha123'),
('MIS-03', 'Nimesh', 'Kalpana', 'nimesh@gmail.com', 'Male', '1995/10/30', 'nimesh', 'nimesh123'),
('Admin1', 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', 'admin', 'admin123'),
('MIS-04', 'Supun', 'Sam', 'sam@gmail.com', 'Male', '1996/02/02', 'supun', 'supun123'),
('MIS-05', 'Thilina', 'Perera', 'thilina@gmail.com', 'Male', '1990/05/03', 'thilina', 'thilina123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
