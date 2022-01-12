-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2022 at 07:08 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminname` varchar(225) NOT NULL,
  `passcode` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `passcode`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `cid` int NOT NULL,
  `model` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `userid`, `cid`, `model`, `amount`, `bdate`, `rdate`, `stock`) VALUES
(9, 16, 14, '2010', '2500', '2022-01-12', '2022-02-10', '2'),
(8, 16, 15, '2020', '5000', '2022-01-12', '2022-02-05', '1'),
(6, 16, 4, '2020', '1000', '2022-01-22', '2022-03-31', '3'),
(7, 16, 1, '2016', '10000', '2022-02-22', '2022-02-28', '3');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `ctype` varchar(225) NOT NULL,
  `model` varchar(225) NOT NULL,
  `stock` varchar(225) NOT NULL,
  `brand` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`cid`, `ctype`, `model`, `stock`, `brand`, `amount`, `image`) VALUES
(13, 'off road', '1999', '6', 'ambasedor', '2000', 'imagesCAR.jpg'),
(18, 'off road', '2020', '3', 'volvo', '2000', 'Volvo.jpg'),
(14, 'classic', '2010', '8', 'Chevolet', '2500', 'chevrolet.jpg'),
(16, 'off road', '1996', '3', 'Ambassador', '2000', 'amassedor.webp'),
(15, 'Sadan', '2020', '5', 'Wagnor', '5000', 'wagonr.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `licence` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `address`, `email`, `mobile`, `licence`, `password`) VALUES
(1, 'Aswathy ', 'sdfghjk', 'achuu@gmail.com', '7418529637', 'KL 34 234567', 'Achu1234'),
(2, 'Honeymol Sebastian', 'Thegana\r\nChanganacherry', 'honey@gmail.com', '9874561238', 'KL 33 1457896121', 'honey@12'),
(3, 'Greeshma Remanan', 'Thayil\r\nPathanamthita', 'greeshma@gmail.com', '8794661334', 'KL 89 12347556', 'Chikku@123'),
(4, 'Edwin Johnson', 'Palakkattu house\r\nMakuva P.O', 'edwinjohnson1398@gmail.com', '7562884665', 'KL 23 456123345', 'Edwin@123'),
(8, 'Albert Sebastian', 'fergtfhyguhidfghj', 'albseb@gmail.com', '7418529637', 'KL 234567809', 'albseb'),
(17, 'test', 'test', 'test@gmail.com', '8527419634', 'KL 22 655435', 'test123'),
(16, 'hanan', 'xcvbn', 'hanan@gmail.com', '7418529634', 'ad 234 56783', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
