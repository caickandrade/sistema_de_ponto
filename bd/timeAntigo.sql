-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2013 at 09:30 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `time`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(100) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `neighborhood` varchar(25) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `complement` varchar(11) DEFAULT NULL,
  `zip_code` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `number`, `neighborhood`, `city`, `state`, `complement`, `zip_code`) VALUES
(22, 'Santa Rita de Cássia', 827, 'São José', 'Montes Claros', 'Minas Gerais', '', 39400344),
(23, 'Santa Rita de Cássia', 827, 'São José', 'Montes Claros', 'Minas Gerais', '', 39400344),
(24, 'Rua Santa Rita de Cássia', 827, 'São José', 'Montes Claros', 'MG', '', 39400344),
(25, 'Santa Rita de Cássia', 827, 'São José', 'Montes Claros', 'MG', '', 39400344);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL,
  `day` date NOT NULL,
  `startTime` date NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logouts`
--

CREATE TABLE IF NOT EXISTS `logouts` (
  `id` int(11) NOT NULL,
  `logins_id` int(11) NOT NULL,
  `day` date NOT NULL,
  `endTime` date NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  KEY `logins_id` (`logins_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `codigo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `codigo`) VALUES
(1, 'Administrador', 1),
(2, 'Diretor Administrativo', 3),
(3, 'Diretor Presidente', 2),
(4, 'Diretor de R.H', 4),
(5, 'Diretor Financeiro', 5),
(6, 'Diretor de Marketing', 6),
(7, 'Diretor de Projetos e Qualidad', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `addresses_id` int(11) NOT NULL,
  `phone1` varchar(20) DEFAULT NULL,
  `phone2` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `id_position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `addresses_id` (`addresses_id`),
  KEY `id_function` (`id_position`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cpf`, `name`, `addresses_id`, `phone1`, `phone2`, `email`, `password`, `birthday`, `id_position`) VALUES
(22, 0, 'Caick Andrade Dias', 22, '3891280415', '', 'caila@ig.com.br', '7177163', '1994-09-01', 7),
(23, 0, 'Charles Dias Leite Júnior', 23, '3891092262', '', 'charlesdljr@yahoo.com.br', '123321', '1962-12-15', 3),
(24, 2147483647, 'Caick', 24, '3891280415', '', 'caila2@ig.com.br', '7177163', '1994-09-01', 3),
(25, 2147483647, 'Caickão', 25, '3891280415', '', 'caila3@ig.com.br', '7177163', '1994-11-05', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `logins_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `logouts`
--
ALTER TABLE `logouts`
  ADD CONSTRAINT `logouts_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `logouts_ibfk_2` FOREIGN KEY (`logins_id`) REFERENCES `logins` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_position`) REFERENCES `positions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
