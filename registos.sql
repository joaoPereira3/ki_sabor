-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Fev-2022 às 17:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `registos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientesregistados`
--

DROP TABLE IF EXISTS `clientesregistados`;
CREATE TABLE `clientesregistados` (
  `Nº de Cliente` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Telemóvel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientesregistados`
--

INSERT INTO `clientesregistados` (`Nº de Cliente`, `Nome`, `Email`, `Telemóvel`) VALUES
(1, 'Paulo Santos', 'paulosantos@gmail.com', 927837645),
(2, 'Anabela Henriques', 'anabelahenriques@hotmail.com', 982673645),
(3, 'António Damas', 'antoniodamas@hotmail.com', 987654321);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientesregistados`
--
ALTER TABLE `clientesregistados`
  ADD PRIMARY KEY (`Nº de Cliente`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientesregistados`
--
ALTER TABLE `clientesregistados`
  MODIFY `Nº de Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
