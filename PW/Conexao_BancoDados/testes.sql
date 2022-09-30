-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2021 às 19:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_fun`
--

CREATE TABLE `cad_fun` (
  `codfun` varchar(5) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `depto` varchar(20) NOT NULL,
  `função` varchar(20) NOT NULL,
  `salario` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_fun`
--

INSERT INTO `cad_fun` (`codfun`, `nome`, `depto`, `função`, `salario`) VALUES
('11', 'Marcio', 'desenvolvimento', 'programador', '7000'),
('12', 'Sergio', 'desenvolvimento', 'programador', '14000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
