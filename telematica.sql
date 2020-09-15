-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Set-2020 às 10:23
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telematica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `escala`
--

DROP TABLE IF EXISTS `escala`;
CREATE TABLE IF NOT EXISTS `escala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `obs` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `escala`
--

INSERT INTO `escala` (`id`, `nome`, `data`, `obs`) VALUES
(89, 'Elen, Silva, João', '2020-01-01', NULL),
(90, 'Natã, Thascila, Paloma, Jailton', '2020-01-01', NULL),
(91, 'Elen, Silva, João', '2020-01-01', NULL),
(88, 'Elen, Silva, João', '2020-01-01', NULL),
(86, 'Elen, Silva, João', '2020-01-01', NULL),
(87, 'Natã, Thascila, Paloma, Jailton', '2020-01-01', NULL),
(85, 'Natã, Thascila, Paloma, Jailton', '2020-01-01', NULL),
(83, 'Elen, Silva, João', '2020-01-01', NULL),
(84, 'Elen, Silva, João', '2020-01-01', NULL),
(82, 'Natã, Thascila, Paloma, Jailton', '2020-01-01', NULL),
(81, 'Elen, Silva, João', '2020-01-01', NULL),
(80, 'Natã, Thascila, Paloma, Jailton', '2020-01-01', NULL),
(79, 'Elen, Silva, João', '2020-01-01', NULL),
(78, 'Elen, Silva, João', '2020-09-18', NULL),
(77, 'Natã, Thascila, Paloma, Jailton', '2020-09-17', NULL),
(76, 'Elen, Silva, João', '2020-09-16', NULL),
(75, 'Natã, Thascila, Paloma, Jailton', '2020-09-15', NULL),
(73, 'Elen, Silva, João', '2020-09-18', NULL),
(74, 'Elen, Silva, João', '2020-09-14', NULL),
(72, 'Natã, Thascila, Paloma, Jailton', '2020-09-17', NULL),
(71, 'Elen, Silva, João', '2020-09-16', NULL),
(70, 'Natã, Thascila, Paloma, Jailton', '2020-09-15', NULL),
(69, 'Elen, Silva, João', '2020-09-14', NULL),
(92, 'Natã, Thascila, Paloma, Jailton', '2020-01-01', NULL),
(93, 'Elen, Silva, João', '2020-01-01', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
