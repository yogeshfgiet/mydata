-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2015 at 02:08 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.30-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `message`, `date`) VALUES
('Yuvraj', 'yuvraj@excellencetechnologies.in', 'Hi this is yuv', '2015-10-19'),
('Yuv', 'yuv@excellencetechnologies.in', 'Hi this is yuv. and also yuv', '2015-10-19'),
('rahul', 'rahul@gmail.com', 'Hi this is Rahul', '2015-10-19'),
('Pradeep', 'pradeep@gmail.com', 'Hi this is Pradeep', '2015-10-19'),
('Shashi', 'shashi@gmail.com', 'Hi this is shashi', '2015-10-19'),
('Rohit', 'rohit@gmail.com', 'Hi this is rohit', '2015-10-19'),
('new', 'new@gmail.com', 'i m new here', '2015-10-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
