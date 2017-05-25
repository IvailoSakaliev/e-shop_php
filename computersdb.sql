-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 07:35 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `descriptionPath` varchar(100) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `title`, `price`, `descriptionPath`, `imagePath`) VALUES
(7, 'sony', 700, 'asdasdasd', ''),
(3, 'thinkpad', 500, ';laskdaskd;laskd;laksd;', ''),
(5, 'ivo', 899, 'asdasdasd', ''),
(6, 'isisi', 200, 'sasdasdasd', ''),
(8, 'ivo', 400, 'asdsadasdasda\r\ndasd\r\nas\r\nd', 'defaut.png');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `descriptionPath` varchar(100) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`id`, `title`, `price`, `descriptionPath`, `imagePath`) VALUES
(6, 'thinkpad', 600, 'dedededededededededed', ''),
(1, 'thinkpad', 500, 'asdasdasdasdasdasd', ''),
(4, 'lenovo', 600, 'adfsadfsadfa dsfads fa dsfasd fsad fasdf', 'defaut.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `avatar`) VALUES
(1, 'admin', 'sakata96', 'ivailo', 'sakaliev', 'ivialo.saklaiev@mail.bg', 'admin.jpg'),
(2, 'admin', 'administrator', 'ivo', 'sakaliev', 'ivo.sakaliev@mail.bg', 'asd.jpg'),
(9, 'ivosakata', 'sakata96', 'Iviao', 'Sakaliev', 'ivailo.saklaiev@mail.com', ''),
(8, 'ivosakata', 'sakata96', 'Iviao', 'Sakaliev', 'ivailo.saklaiev@mail.com', ''),
(6, 'administrator', 'sakata', 'Ivailo', 'Sakaliev', 'ivo.sakaliev1996@gmail.com', 'info/avarat/'),
(7, 'administrator', 'sakata', 'Ivailo', 'Sakaliev', 'ivo.sakaliev1996@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `descriptionPath` varchar(100) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tablets`
--

CREATE TABLE `tablets` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `descriptionPath` varchar(100) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablets`
--

INSERT INTO `tablets` (`id`, `title`, `price`, `descriptionPath`, `imagePath`) VALUES
(1, 'asdfasdfasdf', 400, 'asdfsadf sadf asdfa dsfasd fadsf ', 'defaut.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
