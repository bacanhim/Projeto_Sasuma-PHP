-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2019 às 14:10
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sasuma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) CHARACTER SET utf8 NOT NULL,
  `conteudo` varchar(9999) CHARACTER SET utf8 NOT NULL,
  `imagem` varchar(200) CHARACTER SET utf8 NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `inicio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `titulo`, `conteudo`, `imagem`, `data`, `inicio`) VALUES
(1, 'Um olhar através das janelas dos SASUMa - Exposição de fotografia', 'O prazo para a candidatura à bolsa Blandy Educação foi prorrogado até ao dia 9 de abril de 2019.', '', '2019-12-11 00:00:00', 1),
(2, 'SIADAP - Eleição dos representantes dos trabalhadores', 'Recomendamos uma leitura atenta ao regulamento para ver se preenche os critérios de elegibilidade.', '', '2019-12-11 00:00:00', 1),
(3, ' Candidatura à Bolsa Blandy Educação - 2018-2019', 'Informamos que está em curso a candidatura à Bolsa Blandy Educação que poderá ser efetuada até às 24\r\n                  horas do dia 02 de abril de 2019.', '', '2019-12-09 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
