-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Out-2015 às 22:27
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `easy_crm`
--
CREATE DATABASE IF NOT EXISTS `easy_crm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easy_crm`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usu` varchar(50) NOT NULL,
  `cpf_usu` varchar(50) NOT NULL,
  `sexo_usu` varchar(10) NOT NULL,
  `email_usu` varchar(50) NOT NULL,
  `tel_usu` varchar(15) NOT NULL,
  `cel_usu` varchar(15) NOT NULL,
  `end_usu` varchar(100) NOT NULL,
  `bai_usu` varchar(50) NOT NULL,
  `cid_usu` varchar(50) NOT NULL,
  `uf_usu` varchar(50) NOT NULL,
  `cep_usu` varchar(15) NOT NULL,
  `senha_usu` varchar(50) NOT NULL,
  `repete_senha_usu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nome_usu`, `cpf_usu`, `sexo_usu`, `email_usu`, `tel_usu`, `cel_usu`, `end_usu`, `bai_usu`, `cid_usu`, `uf_usu`, `cep_usu`, `senha_usu`, `repete_senha_usu`) VALUES
(1, 'Frederico Xavier Drumond', '12345678900', 'M', 'fredrumond@gmail.com', '99999999', '99999999', 'Rua dos morros', 'Morros', 'Morrilandia', 'MG', '30560987', '1234', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
