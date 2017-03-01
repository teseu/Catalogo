-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2014 at 10:50 PM
-- Server version: 5.5.34-MariaDB
-- PHP Version: 5.5.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `catalogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Permissao`
--

CREATE TABLE IF NOT EXISTS `Permissao` (
  `Permissao_Id` int(11) NOT NULL,
  `Permissao_Usuario` int(11) NOT NULL,
  `Permissao_Setor` int(11) NOT NULL,
  `Permissao_Nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Permissao`
--

INSERT INTO `Permissao` (`Permissao_Id`, `Permissao_Usuario`, `Permissao_Setor`, `Permissao_Nivel`) VALUES
(1000, 1000, 1000, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `Setor`
--

CREATE TABLE IF NOT EXISTS `Setor` (
  `Setor_Id` int(11) NOT NULL,
  `Setor_Nome` varchar(150) NOT NULL,
  `Setor_Titular` varchar(150) NOT NULL,
  `Setor_Telefone` varchar(20) NOT NULL,
  `Setor_Email` varchar(45) NOT NULL,
  `Setor_Skype` varchar(45) NOT NULL,
  `Setor_Endereco` text NOT NULL,
  `Setor_Logo` varchar(150) NOT NULL,
  `Setor_Alias` varchar(45) NOT NULL,
  `Setor_Secretaria` varchar(150) NOT NULL,
  PRIMARY KEY (`Setor_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Setor`
--

INSERT INTO `Setor` (`Setor_Id`, `Setor_Nome`, `Setor_Titular`, `Setor_Telefone`, `Setor_Email`, `Setor_Skype`, `Setor_Endereco`, `Setor_Logo`, `Setor_Alias`, `Setor_Secretaria`) VALUES
(1000, 'Secretaria Dummy', 'José Ninguém', '(00) XX 5555-4444', 'dummy@prefeitura.org', 'dummy', 'R. Onde fica o lugar, 2233<br>\r\nBairro e Cidade que é óbvio<br>\r\nCEP 00000-000', 'caminho/da/pasta/imagem.png', 'Dummy', 'Maria Ninguém'),
(1001, 'Secretaria de Agricultura', 'José das Couves', '22 2345-5432', 'agricultura@paracambi.gov.rj.br', 'agricultura', 'R. alamenda e tal<br>\r\nCEP- 21345-098<br>\r\nParacambi - RJ', '/imagem/imagem.png', 'Agricultura', 'Maria das Colves'),
(1002, 'Secretaria de Turismo', 'João Ninguém', '(00) XX 5555-4441', 'turismo@prefeitura.gov.rj.br', 'turismo', 'R. essa rua, 2095<br>\r\nCEP 87369-548<br>\r\nParabambi - RJ', 'caminho/da/pasta/imagem3.png', 'Turismo', 'Maria das Dores Ninguém'),
(1003, 'Secretaria de Esportes', 'João Alguém', '(00) XX 5555-4440', 'esportes@prefeitura.gov.rj.br', 'esportes', 'Tr. dos esportes, 23<br>\r\nBairro esportes<br>\r\nCEP 45874-987<br>\r\nParabambi - RJ', 'caminho/da/pasta/imagem6.png', 'Esportes', 'Ana Maria Alguém das Dores');

-- --------------------------------------------------------

--
-- Table structure for table `Tipo`
--

CREATE TABLE IF NOT EXISTS `Tipo` (
  `Tipo_Id` int(11) NOT NULL,
  `Tipo_Descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`Tipo_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tipo`
--

INSERT INTO `Tipo` (`Tipo_Id`, `Tipo_Descricao`) VALUES
(1000, 'Secretaria'),
(1001, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `Usuario_Id` int(11) NOT NULL,
  `Usuario_Nome` varchar(150) NOT NULL,
  `Usuario_Login` varchar(45) NOT NULL,
  `Usuario_Senha` varchar(45) NOT NULL,
  PRIMARY KEY (`Usuario_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`Usuario_Id`, `Usuario_Nome`, `Usuario_Login`, `Usuario_Senha`) VALUES
(1000, 'José Ninguém', 'jose.ninguem', 'senha'),
(1001, 'João Ninguém', 'joao.ninguem', 'e8d95a51f3af4a3b134bf6bb680a213a'),
(1002, 'João Alguém', 'joao.alguem', 'e8d95a51f3af4a3b134bf6bb680a213a'),
(1003, 'José Alguém', 'jose.alguem', 'e8d95a51f3af4a3b134bf6bb680a213a'),
(1004, 'Maria das Couves', 'maria.couves', 'senha'),
(1005, 'Maria dos Alfaces', 'maria.alfaces', 'f940608acd624f8092bc86353052e734');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
