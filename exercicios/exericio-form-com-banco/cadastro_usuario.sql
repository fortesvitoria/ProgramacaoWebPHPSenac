-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/11/2025 às 17:51
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
-- Banco de dados: `cadastro_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `senha`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `cep`, `estado`) VALUES
(1, 'Vitoria', 'Fortes', 'vitoria@gmail.com', '51999887755', '1234', 'Lima e silva', '33', 'terreo', 'Cidade Baixa', 'Porto Alegre', '90050100', 'rs'),
(3, 'Laura', 'Dona', 'donalaura@gmail.com', '51 3033 4044', '1234', 'Cel Fernando Machado', '1164', 'terreo', 'Cidade ', 'po', '90010320', 'rs'),
(4, 'Eduardo', 'Riguera', 'riguera@gmail.com', '55 999552255', '1234', 'Av Getulio Vargas', '5502', 'casa', 'Berto Cirio', 'Nova Santa Rita', '90010111', 'rs'),
(5, 'Lucas', 'Augusto', 'lucas@gmail.com', '48 99955 6622', '1234', 'Rua das Flores', '455', '603B', 'Jardins', 'Bombinhas', '80012350', 'sc'),
(6, 'Marta', 'Maria', 'marta@gmail.com', '11 3029 5555', '1234', 'Rua Cunha Gago', '412', '205', 'Pinheiros', 'São Paulo', '05421000', 'sp'),
(7, 'Pedro', 'Moraes', 'pedrinho@gmail.com', '11 3022 5588', '1234', 'Rua Pedro de Moares', '455', '101A', 'Pinheiros', 'São Paulo', '00420150', 'sp');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
