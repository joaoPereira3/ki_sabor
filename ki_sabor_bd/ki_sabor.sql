-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Fev-2022 às 19:13
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
-- Banco de dados: `ki_sabor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientesregistados`
--

CREATE TABLE `clientesregistados` (
  `Nº de Cliente` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Telemóvel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `Entradas` varchar(55) NOT NULL,
  `Saladas` varchar(55) NOT NULL,
  `Pratos` varchar(55) NOT NULL,
  `Preco` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(35) NOT NULL,
  `Data` date NOT NULL,
  `Refeicao` varchar(6) NOT NULL,
  `NumeroDePessoas` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientesregistados`
--
ALTER TABLE `clientesregistados`
  MODIFY `Nº de Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
