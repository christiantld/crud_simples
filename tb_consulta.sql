-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Abr-2019 às 15:13
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltpii_aval_1bim2019`
--
DROP DATABASE IF EXISTS `ltpii_aval_1bim2019`;
CREATE DATABASE IF NOT EXISTS `ltpii_aval_1bim2019` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ltpii_aval_1bim2019`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consulta`
--

DROP TABLE IF EXISTS `tb_consulta`;
CREATE TABLE IF NOT EXISTS `tb_consulta` (
  `id_consulta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Chave Primária',
  `nm_medico` varchar(60) NOT NULL,
  `nm_paciente` varchar(60) NOT NULL,
  `dt_consulta` date NOT NULL,
  PRIMARY KEY (`id_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_consulta`
--

INSERT INTO `tb_consulta` (`id_consulta`, `nm_medico`, `nm_paciente`, `dt_consulta`) VALUES
(1, 'João', 'Maria', '2019-04-25'),
(2, 'Pedro', 'Catarina', '2019-04-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
