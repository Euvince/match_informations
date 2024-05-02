-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2023 at 08:15 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `match`
--

-- --------------------------------------------------------

--
-- Table structure for table `duels`
--

DROP TABLE IF EXISTS `duels`;
CREATE TABLE IF NOT EXISTS `duels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipe_1` varchar(500) NOT NULL,
  `equipe_2` varchar(500) NOT NULL,
  `pronostic_match` varchar(200) NOT NULL,
  `date_match` date NOT NULL,
  `logo_1` varchar(300) NOT NULL,
  `logo_2` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duels`
--

INSERT INTO `duels` (`id`, `equipe_1`, `equipe_2`, `pronostic_match`, `date_match`, `logo_1`, `logo_2`) VALUES
(2, 'Real', 'Juv', '3:2', '2023-02-25', 'Real.jpg', 'Juv.jpg'),
(4, 'Real', 'Juv', '4:1', '2022-06-08', 'Real.jpg', 'Juv.jpg'),
(5, 'City', 'Liverpool', '4:2', '2021-05-12', 'City.jpg', 'Liverpool.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
