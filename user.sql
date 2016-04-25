-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2016 at 03:35 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.27-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `dob` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `message`, `dob`) VALUES
(1, 'rahul', 'rahul@gmail.com', 'Hello', '15/03/1990'),
(2, 'mukesh', 'mukesh@gmail.com', 'hello1', '12/07/1992'),
(3, 'sunil', 'sunil@gmail.com', 'hello1', '12/07/1992'),
(4, 'mahish', 'manish@gmail.com', 'helloone', '11/07/1992'),
(5, 'ravi', 'ravi@gmail.com', 'hello ram', '12/01/1992'),
(6, 'ram', 'ram@gmail.com', 'hello1', '12/07/1992'),
(7, 'pawan', 'pawan@gmail.com', 'hello pawan', '10/10/1988'),
(22, 'mukesh', 'mukesh@gmail.com', ' hello mukesh how are you', '12/12/1990'),
(24, 'nayan', 'nayan@gmail.com', 'hello this is nayan', '05/07/1991');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
