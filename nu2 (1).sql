-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2019 at 02:20 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `gameplay`
--

DROP TABLE IF EXISTS `gameplay`;
CREATE TABLE IF NOT EXISTS `gameplay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `level` int(2) NOT NULL,
  `clear_time` datetime NOT NULL,
  `attempts` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hint`
--

DROP TABLE IF EXISTS `hint`;
CREATE TABLE IF NOT EXISTS `hint` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `level` int(6) NOT NULL,
  `hint` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hint`
--

INSERT INTO `hint` (`id`, `level`, `hint`) VALUES
(1, 1, 'use your common sense to solve your problem');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `user_id` int(225) NOT NULL,
  `q` int(17) NOT NULL,
  `level` int(10) NOT NULL,
  `t1` varchar(10) NOT NULL,
  `t2` varchar(10) NOT NULL,
  `t3` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `user_id`, `q`, `level`, `t1`, `t2`, `t3`) VALUES
(1, 1, 5, 1, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nu`
--

DROP TABLE IF EXISTS `nu`;
CREATE TABLE IF NOT EXISTS `nu` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneno` varchar(1000) NOT NULL,
  `institute` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nu`
--

INSERT INTO `nu` (`id`, `username`, `email`, `password`, `phoneno`, `institute`, `address`) VALUES
(1, 'jagannath', '99jagannath@gmail.com', '123456', '9040522520', 'nitr', 'cuttack'),
(2, 'jagannath', '99jagannath@gmail.com', '12345689', '9040522521', 'nitr', ''),
(3, 'jagannath', '99jagannath1@gmail.com', '987654321', '9040522529', 'nitr', ''),
(4, 'jagannath', 'emailjaga@gmail.com', 'qwertyu', '7327893450', 'nitr', ''),
(5, 'jagannath', '99jagannath6@gmail.com', 'zxcvbnm', '9040522523', 'nitr', ''),
(6, 'jagannath', 'jfjjnkn@hk', 'asdfghjkl', '7327893451', 'nitr', ''),
(7, 'jagannath', 'd,fndjgbjdfbj@gmail.com', 'zaqwsx', '9040522534', 'nitr', ''),
(8, 'jagannath', '33jagannath@gmail.com', 'mjuyhn', '8847878189', 'nitr', ''),
(9, 'jagannath', '993jagannath@gmail.com', 'bgtrfv', '8847878182', 'nitr', ''),
(10, 'kanhu', '99jaga', '1234', '9040', 'nitr', 'cuttack'),
(11, 'kanhu', '99jaga', 'hjkhjg', 'khkjhjg', 'nitr', 'cuttack'),
(12, 'fdgfg', 'gfhfgh', 'gfhfgh', 'fghfgh', 'ghfg', 'fgfhgf'),
(13, 'fdgfg', 'gfhfgh', 'yjhg', 'gh', 'ghfg', 'fgfhgf');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `question_id` int(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question_id`, `question`, `answer`) VALUES
(1, 1, 'question-1', 'nice answer 1'),
(2, 2, 'question-2', 'nice answer 2'),
(3, 3, 'question-3', 'nice answer 3'),
(4, 4, 'question-4', 'yes'),
(5, 5, 'question-5', 'nice answer 5'),
(6, 6, 'question-6', 'nice answer 6'),
(7, 7, 'question-7', 'nice answer 7'),
(8, 8, 'question-8', 'nice answer 8'),
(9, 9, 'question-9', 'nice answer 9'),
(10, 10, 'question-10', 'nice answer 10'),
(11, 11, 'question-11', 'nice answer 11'),
(12, 12, 'question-12', 'nice answer 12'),
(13, 13, 'question-13', 'nice answer 13'),
(14, 14, 'question-14', 'nice answer 14'),
(15, 15, 'question-15', 'nice answer 15'),
(16, 16, 'question-16', 'nice answer 16'),
(17, 17, 'question-17', 'nice answer 17');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `level` int(2) NOT NULL,
  `html` text NOT NULL,
  `answer` varchar(40) NOT NULL,
  `url_mask` varchar(12) DEFAULT NULL,
  `favicon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(225) NOT NULL,
  `response` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `user_id`, `response`) VALUES
(2, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_type` int(1) NOT NULL DEFAULT '0',
  `oauth_id` bigint(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(5) NOT NULL,
  `presence` varchar(40) NOT NULL,
  `auth_code` varchar(40) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL DEFAULT '1',
  `location` varchar(40) NOT NULL,
  `institute` varchar(60) NOT NULL,
  `registered_in` datetime NOT NULL,
  `verified` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_temp`
--

DROP TABLE IF EXISTS `users_temp`;
CREATE TABLE IF NOT EXISTS `users_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_type` int(1) NOT NULL DEFAULT '0',
  `oauth_id` bigint(20) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` int(1) NOT NULL,
  `location` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_stats`
--

DROP TABLE IF EXISTS `user_stats`;
CREATE TABLE IF NOT EXISTS `user_stats` (
  `user_id` int(11) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
