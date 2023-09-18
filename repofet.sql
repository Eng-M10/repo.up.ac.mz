-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 07:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repofet`
--

-- --------------------------------------------------------

--
-- Table structure for table `niveisdeacesso`
--

CREATE TABLE `niveisdeacesso` (
  `id_nivel` varchar(100) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `criado` int(11) NOT NULL,
  `atualizado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `niveisdeacesso`
--

INSERT INTO `niveisdeacesso` (`id_nivel`, `tipo`, `criado`, `atualizado`) VALUES
('admin', 'Administrador', 0, NULL),
('normal', 'Comum', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `nivel_acesso` varchar(100) DEFAULT 'normal',
  `criado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `atualizado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `user`, `senha`, `nivel_acesso`, `criado`, `atualizado`) VALUES
(1, 'Muvimbene Daniel Maposse', 'adm', '$2y$10$UerzmVcGIONYURsyCdVnVeWnDYM6DPfOOuuriy5.fptg.m1OKrIzW', 'admin', '2023-08-25 06:00:54', NULL),
(7, 'Daniel Maposse', 'dm', '$2y$10$.dmH7wQFEXhv1e78D8kUuu3656F.XH3UzhACKcxFAzpNjrubP9rtW', 'normal', '2023-08-25 13:28:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `niveisdeacesso`
--
ALTER TABLE `niveisdeacesso`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_nivelacesso` (`nivel_acesso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_nivelacesso` FOREIGN KEY (`nivel_acesso`) REFERENCES `niveisdeacesso` (`id_nivel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
