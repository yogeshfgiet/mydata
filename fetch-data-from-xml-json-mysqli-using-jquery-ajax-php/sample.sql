DROP DATABASE IF EXISTS `demo`;
CREATE DATABASE `demo`;
USE `demo`;


CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `countries3`
--

INSERT INTO `countries` (`id`, `title`, `capital`) VALUES
(1, 'Afghanistan', 'Kabul'),
(2, 'Australia', 'Canberra'),
(3, 'Belgium', 'Brussels'),
(4, 'Cuba', 'Havana'),
(5, 'Egypt', 'Cairo'),
(6, 'Fiji', 'Suva'),
(7, 'India', 'New Delhi'),
(8, 'Kenya', 'Nairobi'),
(9, 'Nepal', 'Kathmandu'),
(10, 'Pakistan', 'Islamabad'),
(11, 'Singapore', 'Singapore City'),
(12, 'Spain', 'Madrid'),
(13, 'United Kingdom', 'London'),
(14, 'Uzbekistan', 'Tashkent');
