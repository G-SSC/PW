-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Ago-2022 às 04:50
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a2022_6_cardbox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardbox`
--

CREATE TABLE `cardbox` (
  `cod` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `preco` int(11) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `imagens` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cardbox`
--

INSERT INTO `cardbox` (`cod`, `nome`, `preco`, `descricao`, `imagens`) VALUES
(3, 'gdf', 213, 'zadfadgfaf', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cardbox`
--
ALTER TABLE `cardbox`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cardbox`
--
ALTER TABLE `cardbox`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
