-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Ago-2017 às 23:15
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_now`
--
CREATE DATABASE IF NOT EXISTS `work_now` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `work_now`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nome`, `email`, `telefone`, `cpf`, `data_nasc`, `senha`) VALUES
(1, 'admin', 'admin@admin.com', '123456', '123456', '2017-06-13', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_lista_negra`
--

CREATE TABLE `tbl_lista_negra` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `categoria_trabalho` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `pontuacao` int(10) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_lista_negra`
--

INSERT INTO `tbl_lista_negra` (`id`, `nome`, `email`, `telefone`, `categoria_trabalho`, `cpf`, `data_nasc`, `descricao`, `pontuacao`, `senha`) VALUES
(1, 'carinha', 'sucu@sucu.com', '76543', 'pedreiro', '06345', '2017-08-08', 'azul', 5, '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_trabalhadores`
--

CREATE TABLE `tbl_trabalhadores` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `categoria_trabalho` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `pontuacao` varchar(200) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_trabalhadores`
--

INSERT INTO `tbl_trabalhadores` (`id`, `nome`, `email`, `telefone`, `categoria_trabalho`, `cpf`, `data_nasc`, `descricao`, `pontuacao`, `senha`) VALUES
(18, 'henrique', 'henrique@henrique.com', '36226231', 'pedreiro', '234567890', '2017-07-06', 'Pedreiro com experiencia', '7', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'Tiago', 'tiago@tiago.com', '4545362', 'eletricista', '123456', '2017-07-03', 'Esse eletricista e bom', '', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'jose', 'jose@jose.com', '67767676', 'pedreiro', '3456789098', '2017-08-09', 'Esse pedreiro manda brasa', '', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'Jonathan', 'jona@jona.com', '66677777', 'pedreiro', '234567899', '2017-08-10', 'um otimo pedreiro', '', 'e10adc3949ba59abbe56e057f20f883e'),
(25, 'maria', 'maria@maria.com', '543456', 'marceneiro', '34567895', '2017-08-07', 'Corta pao', '', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Pedro', 'pedro@pedro.com', '34554645', 'design', '22343422', '2017-08-07', 'um Ã³timo design', '', 'e10adc3949ba59abbe56e057f20f883e'),
(27, 'Klinger', 'klinger@klinger.com', '34435665', 'pintor', '456789876', '2017-08-12', 'um Ã³timo pintor', '', 'e10adc3949ba59abbe56e057f20f883e'),
(28, 'Martins', 'martins@martins.com', '77676775', 'marceneiro', '12345678909', '2017-08-01', 'um Ã³timo cara', '', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_lista_negra`
--
ALTER TABLE `tbl_lista_negra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_trabalhadores`
--
ALTER TABLE `tbl_trabalhadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lista_negra`
--
ALTER TABLE `tbl_lista_negra`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_trabalhadores`
--
ALTER TABLE `tbl_trabalhadores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
