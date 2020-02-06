-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2020 at 10:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devoir`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pwd`, `role`) VALUES
(1, 'admin', 'admin123', 'admin'),
(3, 'basma', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vetements`
--

CREATE TABLE `vetements` (
  `id` int(10) UNSIGNED NOT NULL,
  `Titre` varchar(55) DEFAULT NULL,
  `Tissu` varchar(100) NOT NULL,
  `Sexe` varchar(30) NOT NULL,
  `Quantite` int(11) DEFAULT NULL,
  `Prix` varchar(50) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vetements`
--

INSERT INTO `vetements` (`id`, `Titre`, `Tissu`, `Sexe`, `Quantite`, `Prix`, `Image`) VALUES
(1, 'Tricot', 'Laine', 'Femmes', 50, '200', '1.jpg'),
(2, 'Chemise', 'Jean', 'Hommes', 50, '150', 'chemisejean.jpg\r\n'),
(3, 'Jupe', 'Daim', 'Femmes', 50, '300', 'jupedaim.jpg'),
(4, 'Veste', 'Cuir', 'Hommes', 50, '400', 'vestecuir.jpg'),
(5, 'Chemise', 'Soie', 'Femmes', 50, '100', 'chemisesoie.jpg'),
(6, 'Robe chemise', 'Jean', 'Femmes', 50, '350', 'robechemise.jpg'),
(11, 'Trico', 'aZE', 'jbjb', 50, '250', 'fileToUpload'),
(12, 'azz', 'jbjb', 'DDF', 12, '34', 'fileToUpload');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vetements`
--
ALTER TABLE `vetements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vetements`
--
ALTER TABLE `vetements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
