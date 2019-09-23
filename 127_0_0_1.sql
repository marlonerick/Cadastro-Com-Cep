-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2019 às 20:33
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--
CREATE DATABASE IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idcadastro` int(10) NOT NULL,
  `nome` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `rg` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `sexo` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `data` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `estadocivil` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `profissao` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `telefone` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `celular` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `endereco` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `numero` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `complemento` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `cidade` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `bairro` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `estado` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `cep` varchar(45) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idcadastro`, `nome`, `rg`, `cpf`, `sexo`, `data`, `estadocivil`, `profissao`, `telefone`, `celular`, `email`, `endereco`, `numero`, `complemento`, `cidade`, `bairro`, `estado`, `cep`) VALUES
(1, 'Marlon', '50', '388', 'M', '10/09/1996', 'Solteiro', 'Estudante', '', '19983762471', 'erick.marlon13@hotmail.com', 'Santa barbara', '245', '', 'Sao paulo', '', 'SP', '13455561'),
(3, 'Marlon Erick de Souza Amarante', '', '', '0', '', '0', '', '19983762471', '', 'erick.marlon13@hotmail.com', 'Rua LituÃ¢nia, 245', '13455-561', '', 'Santa Barbara d&#39;oeste', '', '0', ''),
(5, 'Marlon Erick de Souza Amarante', '50.434.621-8', '388.080.628-48', 'Masculino', '1996-09-10', '0', 'Estudante', '19983762471', '19983762471', 'erick.marlon13@hotmail.com', 'Rua LituÃ¢nia, 245', '13455-561', '245', 'Santa Barbara d&#39;oeste', '', 'SP', '13455-561'),
(10, 'Marlon Erick de Souza Amarante', '50.434.621-8', '388.080.628-48', 'Masculino', '1996-09-10', '0', 'Estudante', '19983762471', '19983762471', 'erick.marlon13@hotmail.com', 'Rua LituÃ¢nia, 245', '13455-561', '245', 'Santa Barbara d&#39;oeste', '', 'SP', '13455-561'),
(11, 'Marlon Erick de Souza Amarante', '50.434.621-8', '388.080.628-48', '0', '1996-09-10', '0', 'Estudante', '19983762471', '19983762471', 'erick.marlon13@hotmail.com', 'Rua LituÃ¢nia, 245', '13455-561', '245', 'Santa Barbara d&#39;oeste', '', 'SP', '13455-561'),
(13, 'Marlon Erick de Souza Amarante', '', '', '0', '', '0', '', '19983762471', '', 'erick.marlon13@hotmail.com', 'Rua LituÃ¢nia, 245', '13455-561', '245', 'Santa Barbara d&#39;oeste', '', 'SP', '13455-561'),
(16, '', '', '', '0', '', '0', '', '', '', '', 'Rua LituÃ¢nia, 245', '', '', 'Santa BÃ¡rbara D&#39;Oeste', '', '', '13455-561'),
(17, 'Marlon Erick', '', '', '0', '', '0', '', '19983762471', '', '', 'Rua LituÃ¢nia, 245', '13455-561', '', 'Santa BÃ¡rbara D&#39;Oeste', '', '', '13455-561'),
(18, 'Marlon Erick de Souza Amarante', '', '', '0', '', '0', '', '19983762471', '', 'erick.marlon13@hotmail.com', 'Avenida Nova Londrina', '13455-561', '', 'Londrina', '', '', '86031-220'),
(19, 'Simone martins de Souza', '', '', 'Feminino', '', '0', '', '19983762471', '', '', 'Rua LituÃ¢nia', '13455-561', '', 'Santa BÃ¡rbara D&#39;Oeste', '', '', '13455-561'),
(20, 'Marinez martins de Souza', '', '', 'Feminino', '', 'Solteiro(a)', 'Estudante', '19983762471', '', 'erick.marlon13@hotmail.com', 'Rua LituÃ¢nia, 245', '13455-561', '245', 'Santa Barbara d&#39;oeste', '', '', '13455-561');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idcadastro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idcadastro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
