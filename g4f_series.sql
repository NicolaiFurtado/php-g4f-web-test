-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23-Jun-2023 às 01:37
-- Versão do servidor: 8.0.31
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `g4f_series`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `series_tv`
--

CREATE TABLE `series_tv` (
  `id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `canal` int NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `series_tv`
--

INSERT INTO `series_tv` (`id`, `titulo`, `canal`, `genero`) VALUES
(1, 'C.S.I Nova Iorque', 10, 'Ficção Científica'),
(2, 'The Walking Dead', 12, 'Terror'),
(4, 'Chicago P.D', 11, 'Policial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `series_tv_intervalos`
--

CREATE TABLE `series_tv_intervalos` (
  `id` int NOT NULL,
  `id_serie_tv` int NOT NULL,
  `dia_da_semana` date NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `series_tv_intervalos`
--

INSERT INTO `series_tv_intervalos` (`id`, `id_serie_tv`, `dia_da_semana`, `horario`) VALUES
(1, 1, '2023-06-26', '23:00:00'),
(2, 2, '2023-09-30', '21:30:00'),
(4, 4, '2023-07-01', '20:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `series_tv`
--
ALTER TABLE `series_tv`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `series_tv_intervalos`
--
ALTER TABLE `series_tv_intervalos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `series_tv`
--
ALTER TABLE `series_tv`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `series_tv_intervalos`
--
ALTER TABLE `series_tv_intervalos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
