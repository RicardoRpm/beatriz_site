-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2024 às 08:55
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `beatriz-renovation`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_fr` varchar(255) NOT NULL,
  `title_pt` varchar(255) NOT NULL,
  `description_pt` varchar(255) NOT NULL,
  `description_fr` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `img` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `projects`
--

INSERT INTO `projects` (`id`, `title_en`, `title_fr`, `title_pt`, `description_pt`, `description_fr`, `description_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'CSS is the language - EN', 'CSS is the language - FR', 'CSS is the language - PT', 'CSS is the language we use to style an HTML document. - PT', 'CSS is the language we use to style an HTML document. - FR', 'CSS is the language we use to style an HTML document. - EN', 'assets/img/1717979837.png', '2024-06-09 23:37:17', '2024-06-09 23:37:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
