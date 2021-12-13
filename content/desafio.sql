-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio`
--

-- --------------------------------------------------------

--
-- Table structure for table `personagens`
--

CREATE TABLE `personagens` (
  `indice` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `codinome` varchar(50) DEFAULT NULL,
  `interprete` varchar(50) DEFAULT NULL,
  `alinhamento` varchar(10) DEFAULT NULL,
  `biografia` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personagens`
--

INSERT INTO `personagens` (`indice`, `nome`, `idade`, `codinome`, `interprete`, `alinhamento`, `biografia`) VALUES
(0, 'William', 49, 'Billy Bruto', 'Karl Urban', 'theboys', 'Fodão'),
(1, 'Jhon ', 46, 'Capitão Pátria', 'Antony Starr', 'super', 'Homelander'),
(2, 'Marvin', 47, 'Leitinho da Mamãe', 'Laz Alonso', 'theboys', 'Leitinho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personagens`
--
ALTER TABLE `personagens`
  ADD PRIMARY KEY (`indice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personagens`
--
ALTER TABLE `personagens`
  MODIFY `indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
