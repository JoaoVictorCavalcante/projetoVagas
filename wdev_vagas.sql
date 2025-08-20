-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/08/2025 às 16:41
-- Versão do servidor: 8.0.39-0ubuntu0.24.04.2
-- Versão do PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wdev_vagas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `ativo` enum('s','n') NOT NULL,
  `data` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `vagas`
--

INSERT INTO `vagas` (`id`, `titulo`, `descricao`, `ativo`, `data`) VALUES
(1, 'eeee', 'eeee', 's', '2025-08-12 21:49:15'),
(2, 'dddd', 'dddddd', 's', '2025-08-12 21:49:18'),
(3, '', '', 's', '2025-08-12 21:49:19'),
(4, '', '', 's', '2025-08-12 21:49:20'),
(5, '', '', 's', '2025-08-12 21:50:24'),
(6, 'eeeee', 'eeeee', 's', '2025-08-12 21:50:30'),
(7, 'eeeee', 'eeeee', 's', '2025-08-12 21:52:39'),
(8, 'eeeee', 'eeeee', 's', '2025-08-12 21:53:40'),
(9, 'eeeee', 'eeeee', 's', '2025-08-12 21:57:33'),
(10, 'Programador', 'fronte-end', 's', '2025-08-12 21:57:44'),
(11, 'ffff', 'fffff', 's', '2025-08-12 22:02:40'),
(12, 'ddd', 'dddd', 's', '2025-08-13 21:28:32'),
(13, 'ddd', 'dddd', 's', '2025-08-13 22:21:11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
