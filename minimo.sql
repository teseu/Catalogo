-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2014 at 08:21 AM
-- Server version: 5.5.35-MariaDB
-- PHP Version: 5.5.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `catalogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Permissao`
--

CREATE TABLE IF NOT EXISTS `Permissao` (
  `Permissão_Id` int(11) NOT NULL,
  `Permissao_Usuario` int(11) NOT NULL,
  `Permissao_Setor` int(11) NOT NULL,
  `Permissao_Nivel` int(11) NOT NULL,
  PRIMARY KEY (`Permissão_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Permissao`
--

INSERT INTO `Permissao` (`Permissão_Id`, `Permissao_Usuario`, `Permissao_Setor`, `Permissao_Nivel`) VALUES
(1000, 1000, 1000, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `Setor`
--

CREATE TABLE IF NOT EXISTS `Setor` (
  `Setor_Id` int(11) NOT NULL,
  `Setor_Nome` varchar(45) NOT NULL,
  `Setor_Titular` varchar(150) NOT NULL,
  `Setor_Telefone` varchar(20) NOT NULL,
  `Setor_Email` varchar(150) NOT NULL,
  `Setor_Skype` varchar(45) NOT NULL,
  `Setor_Endereco` text NOT NULL,
  `Setor_Logo` varchar(150) NOT NULL,
  `Setor_Alias` varchar(45) NOT NULL,
  `Setor_Secretaria` varchar(150) NOT NULL,
  PRIMARY KEY (`Setor_Id`),
  UNIQUE KEY `Setor_Id` (`Setor_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Setor`
--

INSERT INTO `Setor` (`Setor_Id`, `Setor_Nome`, `Setor_Titular`, `Setor_Telefone`, `Setor_Email`, `Setor_Skype`, `Setor_Endereco`, `Setor_Logo`, `Setor_Alias`, `Setor_Secretaria`) VALUES
(1000, 'Secretaria Dummy', 'José Ninguém', '(00) XX 5555-4444', 'dummy@prefeitura.org', 'dummy', 'R. Onde fica o lugar, 2233<br>\r\nBairro e Cidade que é óbvio<br>\r\nCEP 00000-000', 'caminho/da/pasta/imagem.png', 'Dummy', 'Maria Ninguém'),
(1001, 'Secretaria de Agricultura', 'José Alguém', '(00) XX 5555-4442', 'agricultura@prefeitura.gov.rj.br', 'agricultura', 'R. Alameda uma dessas, 34\r\nBairro Outro\r\nCEP 22548-987\r\nParacambi - RJ', 'caminho/da/pasta/imagem2.png', 'Agricultura', 'Maria Alguém'),
(1002, 'Secretaria de Turismo', 'João Ninguém', '(00) XX 5555-4441', 'turismo@prefeitura.gov.rj.br', 'turismo', 'R. essa rua, 2095\r\nCEP 87369-548\r\nParabambi - RJ', 'caminho/da/pasta/imagem3.png', 'Turismo', 'Maria das Dores Ninguém'),
(1003, 'Secretaria de Esportes', 'João Alguém', '(00) XX 5555-4440', 'esportes@prefeitura.gov.rj.br', 'esportes', 'Tr. dos esportes, 23<br>\r\nBairro esportes<br>\r\nCEP 45874-987<br>\r\nParabambi - RJ', 'caminho/da/pasta/imagem6.png', 'Esportes', 'Ana Maria Alguém das Dores');

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Usuario_Id` int(11) NOT NULL,
  `Usuario_Login` varchar(20) NOT NULL,
  `Usuario_Nome` varchar(150) NOT NULL,
  `Usuario_Senha` varchar(45) NOT NULL,
  PRIMARY KEY (`Usuario_Id`),
  UNIQUE KEY `Usuario_Login` (`Usuario_Login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`Usuario_Id`, `Usuario_Login`, `Usuario_Nome`, `Usuario_Senha`) VALUES
(1000, 'jose.ninguem', 'José Ninguém', 'senha');
