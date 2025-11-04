-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2025 às 02:03
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cdz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(260) NOT NULL,
  `email` varchar(180) NOT NULL,
  `senha` varchar(260) NOT NULL,
  `obs` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `obs`, `data`) VALUES
(2, 'Fernando Oliveira', 'fe@email.com', 'ec3e661d7bc7bfbf5334e7dfad309f947dace5f7', '--Sem Observações--', '2025-10-03'),
(3, 'Eduardo da Silva', 'eduardo@email.com', 'admin123', 'Inscrito após o início das aulas', '2025-10-10'),
(5, 'Robert', 'ro@email.com', 'teste123', '--Sem Observações--', '2025-10-03'),
(7, 'Ursula', 'ursula@email.com', 'admin', '', '2025-10-03'),
(8, 'Leandra da silva', 'le@email.com', 'teste', '', '2025-10-10'),
(10, 'Gerente', 'admin@email.com', '2e6f9b0d5885b6010f9167787445617f553a735f', '', '2025-10-17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
