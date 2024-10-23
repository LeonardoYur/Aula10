-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2024 às 03:04
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsistemanotas`
--
CREATE DATABASE IF NOT EXISTS `dbsistemanotas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbsistemanotas`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblalunos`
--

CREATE TABLE `tblalunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `idTurma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblalunos`
--

INSERT INTO `tblalunos` (`id`, `nome`, `idTurma`) VALUES
(1, 'Leonardo Yuri Gomes', 1),
(2, 'Mauro lindo gostoso', 1),
(3, 'Santos', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblnotas`
--

CREATE TABLE `tblnotas` (
  `id` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idTurma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblnotas`
--

INSERT INTO `tblnotas` (`id`, `valor`, `idAluno`, `idTurma`) VALUES
(1, 8.50, 1, 1),
(2, 8.00, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblturmas`
--

CREATE TABLE `tblturmas` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblturmas`
--

INSERT INTO `tblturmas` (`id`, `nome`) VALUES
(1, 'Desenvolvimento Web 2'),
(12, 'Análise de sistemas');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblnotas`
--
ALTER TABLE `tblnotas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tblturmas`
--
ALTER TABLE `tblturmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblalunos`
--
ALTER TABLE `tblalunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblnotas`
--
ALTER TABLE `tblnotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblturmas`
--
ALTER TABLE `tblturmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
