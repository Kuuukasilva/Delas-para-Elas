-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 02:51
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `delas_para_elas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_postagem`
--

CREATE TABLE `tbl_postagem` (
  `titulo` varchar(100) DEFAULT NULL,
  `autora` varchar(100) DEFAULT NULL,
  `relato` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_postagem`
--

INSERT INTO `tbl_postagem` (`titulo`, `autora`, `relato`) VALUES
('aaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa'),
('branca de neve', 'meu pau', 'meu pau meio bomba'),
('O falso amor', 'Andreia Gomes', 'fui agredida por quem eu acahva que me protegeria '),
('branca de neve', 'AA', 'AAAA'),
('amor', 'AAAAA', 'çççççççççççççççççççççççç');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `nome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
('carla', 'carlaAmaior@etec.sp.gov.br', 12345678),
('ADM ', 'ADM@GMAIL.COM', 123),
('', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
