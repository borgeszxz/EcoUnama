-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/04/2025 às 13:36
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
-- Banco de dados: `unamareciclagem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_residuos`
--

CREATE TABLE `registro_residuos` (
  `id` int(11) NOT NULL,
  `quantidade_kg` decimal(10,2) NOT NULL,
  `tipo_residuo` varchar(20) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `semestre` varchar(20) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `unidade` varchar(100) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro_residuos`
--

INSERT INTO `registro_residuos` (`id`, `quantidade_kg`, `tipo_residuo`, `turma`, `curso`, `semestre`, `turno`, `unidade`, `data_registro`) VALUES
(1, 5.00, 'aluminio', '2', 'Analise e Desenvolvimento de Sistemas', '3', 'manha', 'unama-alcindo', '2025-04-25 11:09:32'),
(2, 10.11, 'aluminio', '1A', 'Engenharia', '1º', 'manha', 'unama-alcindo', '2025-04-25 11:12:24'),
(3, 1.29, 'vidro', '2B', 'Direito', '2º', 'tarde', 'unama-ananindeua', '2025-04-25 11:12:24'),
(4, 5.13, 'pano', '3C', 'Medicina', '3º', 'noite', 'outra', '2025-04-25 11:12:24'),
(5, 10.78, 'pet', '1D', 'Biologia', '1º', 'manha', 'unama-ananindeua', '2025-04-25 11:12:24'),
(6, 7.49, 'aluminio', '2E', 'Arquitetura', '2º', 'tarde', 'unama-alcindo', '2025-04-25 11:12:24'),
(7, 4.12, 'vidro', '3F', 'Administração', '3º', 'noite', 'outra', '2025-04-25 11:12:24'),
(8, 7.15, 'pano', '1G', 'Odontologia', '1º', 'manha', 'unama-ananindeua', '2025-04-25 11:12:24'),
(9, 2.37, 'pet', '2H', 'Psicologia', '2º', 'tarde', 'unama-alcindo', '2025-04-25 11:12:24'),
(10, 9.39, 'aluminio', '3I', 'Enfermagem', '3º', 'noite', 'outra', '2025-04-25 11:12:24'),
(11, 8.87, 'vidro', '1J', 'Farmácia', '1º', 'manha', 'unama-alcindo', '2025-04-25 11:12:24'),
(12, 10.00, 'pano', 'B', 'Analise e Desenvolvimento de Sistemas', '3', 'manha', 'unama-ananindeua', '2025-04-25 11:28:12'),
(13, 10.00, 'pano', 'B', 'Analise e Desenvolvimento de Sistemas', '3', 'manha', 'unama-ananindeua', '2025-04-25 11:28:51'),
(14, 2.00, 'aluminio', 'A', 'Analise e Desenvolvimento de Sistemas', '3', 'manha', 'unama-alcindo', '2025-04-25 11:29:16'),

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `registro_residuos`
--
ALTER TABLE `registro_residuos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registro_residuos`
--
ALTER TABLE `registro_residuos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
