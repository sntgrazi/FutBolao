-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Dez-2022 às 22:01
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bolao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apostateste`
--

CREATE TABLE `apostateste` (
  `id` int(11) NOT NULL,
  `id_dadojogos` int(11) DEFAULT NULL,
  `timea` int(11) DEFAULT NULL,
  `timab` int(11) DEFAULT NULL,
  `user` varchar(200) DEFAULT NULL,
  `dataH` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `apostateste`
--

INSERT INTO `apostateste` (`id`, `id_dadojogos`, `timea`, `timab`, `user`, `dataH`) VALUES
(1, 64, 3, 3, 'sntgrazi', '2022-12-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_jogos`
--

CREATE TABLE `dados_jogos` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `horario` varchar(10) NOT NULL,
  `timea` varchar(10) NOT NULL,
  `timeb` varchar(10) NOT NULL,
  `local` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `rodada` varchar(30) NOT NULL,
  `rt1` int(11) NOT NULL,
  `rt2` int(11) NOT NULL,
  `status_jogo` varchar(15) NOT NULL DEFAULT 'ABERTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dados_jogos`
--

INSERT INTO `dados_jogos` (`id`, `data`, `horario`, `timea`, `timeb`, `local`, `tipo`, `rodada`, `rt1`, `rt2`, `status_jogo`) VALUES
(1, '2022-11-20', '12:00', 'CAT', 'EQU', 'LUSAIL', 'GRUPO A', '1 RODADA', 0, 2, 'ABERTO'),
(2, '2022-11-21', '10:00', 'ING', 'IRA', 'INTERNACIONAL KHALIFA', 'GRUPO B', '1 RODADA', 6, 2, 'ABERTO'),
(3, '2022-11-21', '13:00', 'SEN', 'HOL', 'AL THUMAMA', 'GRUPO A', '1 RODADA', 0, 2, 'ABERTO'),
(4, '2022-11-21', '16:00', 'EUA', 'GAL', 'AHMAD BIN ALI', 'GRUPO B', '1 RODADA', 1, 1, 'ABERTO'),
(5, '2022-11-22', '07:00', 'ARG', 'ARS', 'LUSAIL', 'GRUPO C', '1 RODADA', 1, 2, 'ABERTO'),
(6, '2022-11-22', '10:00', 'DIN', 'TUN', 'CIDADE DA EDUCACAO', 'GRUPO D', '1 RODADA', 0, 0, 'ABERTO'),
(7, '2022-11-22', '13:00', 'MEX', 'POL', 'ESTADIO 974', 'GRUPO C', '1 RODADA', 0, 0, 'ABERTO'),
(8, '2022-11-22', '16:00', 'FRA', 'AUS', 'AL JANOUB', 'GRUPO D', '1 RODADA', 4, 1, 'ABERTO'),
(9, '2022-11-23', '07:00', 'MAR', 'CRO', 'AL BAYT', 'GRUPO F', '1 RODADA', 0, 0, 'ABERTO'),
(10, '2022-11-23', '10:00', 'ALE', 'JAP', 'INTERNACIONAL KHALIFA', 'GRUPO E', '1 RODADA', 1, 2, 'ABERTO'),
(11, '2022-11-23', '13:00', 'ESP', 'CRC', 'AL THUMAMA', 'GRUPO E', '1 RODADA', 7, 0, 'ABERTO'),
(12, '2022-11-23', '16:00', 'BEL', 'CAN', 'AHMAD BIN ALI', 'GRUPO F', '1 RODADA', 1, 0, 'ABERTO'),
(13, '2022-11-24', '07:00', 'SUI', 'CAM', 'AL JANOUB', 'GRUPO G', '1 RODADA', 1, 0, 'ABERTO'),
(14, '2022-11-24', '10:00', 'URU', 'COR', 'CIDADE DA EDUCACAO', 'GRUPO H', '1 RODADA', 0, 0, 'ABERTO'),
(15, '2022-11-24', '13:00', 'POR', 'GAN', 'ESTADIO 974', 'GRUPO H', '1 RODADA', 3, 2, 'ABERTO'),
(16, '2022-11-24', '16:00', 'BRA', 'SER', 'LUSAIL', 'GRUPO G', '1 RODADA', 2, 0, 'ABERTO'),
(17, '2022-11-25', '10:00', 'CAT', 'SEN', 'AL THUMAMA', 'GRUPO A', '2 RODADA', 1, 3, 'ABERTO'),
(18, '2022-11-25', '13:00', 'HOL', 'EQU', 'INTERNACIONAL KHALIFA', 'GRUPO A', '2 RODADA', 1, 1, 'ABERTO'),
(19, '2022-11-25', '07:00', 'GAL', 'IRA', 'AHMAD BIN ALI', 'GRUPO B', '2 RODADA', 0, 2, 'ABERTO'),
(20, '2022-11-25', '16:00', 'ING', 'EUA', 'AL BAYT', 'GRUPO B', '2 RODADA', 0, 0, 'ABERTO'),
(21, '2022-11-26', '10:00', 'POL', 'ARA', 'CIDADE DA EDUCACAO', 'GRUPO C', '2 RODADA', 2, 0, 'ABERTO'),
(22, '2022-11-26', '16:00', 'ARG', 'MEX', 'LUSAIL', 'GRUPO C', '2 RODADA', 2, 0, 'ABERTO'),
(23, '2022-11-26', '07:00', 'TUN', 'AUS', 'AL JANOUB', 'GRUPO D', '2 RODADA', 0, 1, 'ABERTO'),
(24, '2022-11-26', '13:00', 'FRA', 'DIN', 'ESTADIO 974', 'GRUPO D', '2 RODADA', 2, 1, 'ABERTO'),
(25, '2022-11-27', '07:00', 'JAP', 'CRC', 'AHMAD BIN ALI', 'GRUPO E', '2 RODADA', 0, 1, 'ABERTO'),
(26, '2022-11-27', '16:00', 'ESP', 'ALE', 'AL BAYT', 'GRUPO E', '2 RODADA', 1, 1, 'ABERTO'),
(27, '2022-11-27', '10:00', 'BEL', 'MAR', 'AL THUMAMA', 'GRUPO F', '2 RODADA', 0, 2, 'ABERTO'),
(28, '2022-11-27', '13:00', 'CRO', 'CAN', 'INTERNACIONAL KHALIFA', 'GRUPO F', '2 RODADA', 4, 1, 'ABERTO'),
(29, '2022-11-28', '07:00', 'CAM', 'SER', 'AL JANOUB', 'GRUPO G', '2 RODADA', 3, 3, 'ABERTO'),
(30, '2022-11-28', '13:00', 'BRA', 'SUI', 'ESTADIO 974', 'GRUPO G', '2 RODADA', 1, 0, 'ABERTO'),
(31, '2022-11-28', '10:00', 'COR', 'GAN', 'CIDADE DA EDUCACAO', 'GRUPO H', '2 RODADA', 2, 3, 'ABERTO'),
(32, '2022-11-28', '16:00', 'POR', 'URU', 'LUSAIL', 'GRUPO H', '2 RODADA', 2, 0, 'ABERTO'),
(33, '2022-11-29', '12:00', 'HOL', 'CAT', 'AL BAYT', 'GRUPO A', '3 RODADA', 2, 0, 'ABERTO'),
(34, '2022-11-29', '12:00', 'EQU', 'SEN', 'INTERNACIONAL KHALIFA', 'GRUPO A', '3 RODADA', 1, 2, 'ABERTO'),
(35, '2022-11-29', '16:00', 'IRA', 'EUA', 'AL THUMAMA', 'GRUPO B', '3 RODADA', 0, 1, 'ABERTO'),
(36, '2022-11-29', '16:00', 'GAL', 'ING', 'AHMAD BIN ALI', 'GRUPO B', '3 RODADA', 0, 3, 'ABERTO'),
(37, '2022-11-30', '16:00', 'POL', 'ARG', 'ESTADIO 974', 'GRUPO C', '3 RODADA', 0, 2, 'ABERTO'),
(38, '2022-11-30', '16:00', 'ARA', 'MEX', 'LUSAIL', 'GRUPO C', '3 RODADA', 1, 2, 'ABERTO'),
(39, '2022-11-30', '12:00', 'TUN', 'FRA', 'CIDADE DA EDUCACAO', 'GRUPO D', '3 RODADA', 1, 0, 'ABERTO'),
(40, '2022-11-30', '12:00', 'AUS', 'DIN', 'AL JANOUB', 'GRUPO D', '3 RODADA', 1, 0, 'ABERTO'),
(41, '2022-12-01', '16:00', 'JAP', 'ESP', 'INTERNACIONAL KHALIFA', 'GRUPO E', '3 RODADA', 2, 1, 'ABERTO'),
(42, '2022-12-01', '16:00', 'CRC', 'ALE', 'AL BAYT', 'GRUPO E', '3 RODADA', 2, 4, 'ABERTO'),
(43, '2022-12-01', '12:00', 'CRO', 'BEL', 'AHMAD BIN ALI', 'GRUPO F', '3 RODADA', 0, 0, 'ABERTO'),
(44, '2022-12-01', '12:00', 'CAN', 'MAR', 'AL THUMAMA', 'GRUPO F', '3 RODADA', 1, 2, 'ABERTO'),
(45, '2022-12-02', '16:00', 'CAM', 'BRA', 'LUSAIL', 'GRUPO G', '3 RODADA', 1, 0, 'ABERTO'),
(46, '2022-12-02', '16:00', 'SER', 'SUI', 'ESTADIO 974', 'GRUPO G', '3 RODADA', 3, 3, 'ABERTO'),
(47, '2022-12-02', '12:00', 'COR', 'POR', 'CIDADE DA EDUCACAO', 'GRUPO H', '3 RODADA', 2, 1, 'ABERTO'),
(48, '2022-12-02', '12:00', 'GAN', 'URU', 'AL JANOUB', 'GRUPO H', '3 RODADA', 0, 2, 'ABERTO'),
(49, '2022-12-03', '12:00', 'HOL', 'EUA', 'INTERNACIONAL KHALIFA', 'OITAVAS DE FINAL', 'OITAVAS', 1, 3, 'ABERTO'),
(50, '2022-12-03', '16:00', 'ARG', 'AUS', 'AHMAD BIN ALI', 'OITAVAS DE FINAL', 'OITAVAS', 0, 0, 'ABERTO'),
(51, '2022-12-05', '12:00', 'JAP', 'CRO', 'AL JANOUB', 'OITAVAS DE FINAL', 'OITAVAS', 1, 1, 'ABERTO'),
(52, '2022-12-05', '16:00', 'BRA', 'COR', 'ESTADIO 974', 'OITAVAS DE FINAL', 'OITAVAS', 4, 1, 'ABERTO'),
(53, '2022-12-04', '16:00', 'ING', 'SEN', 'AL BAYT', 'OITAVAS DE FINAL', 'OITAVAS', 3, 0, 'ABERTO'),
(54, '2022-12-04', '12:00', 'FRA', 'POL', 'AL THUMAMA', 'OITAVAS DE FINAL', 'OITAVAS', 3, 1, 'ABERTO'),
(55, '2022-12-06', '12:00', 'MAR', 'ESP', 'CIDADE DA EDUCACAO', 'OITAVAS DE FINAL', 'OITAVAS', 0, 0, 'ABERTO'),
(56, '2022-12-06', '16:00', 'POR', 'SUI', 'LUSAIL', 'OITAVAS DE FINAL', 'OITAVAS', 6, 1, 'ABERTO'),
(57, '2022-12-09', '16:00', 'HOL', 'ARG', 'LUSAIL', 'QUARTAS DE FINAL', 'QUARTAS', 2, 2, 'ABERTO'),
(58, '2022-12-09', '12:00', 'CRO', 'BRA', 'CIDADE DA EDUCACAO', 'QUARTAS DE FINAL', 'QUARTAS', 1, 1, 'ABERTO'),
(59, '2022-12-10', '16:00', 'ING', 'FRA', 'AL BAYT', 'QUARTAS DE FINAL', 'QUARTAS', 1, 2, 'ABERTO'),
(60, '2022-12-10', '12:00', 'MAR', 'POR', 'AL THUMAMA', 'QUARTAS DE FINAL', 'QUARTAS', 1, 0, 'ABERTO'),
(61, '2022-12-13', '16:00', 'ARG', 'CRO', 'LUSAIL', 'SEMIFINAL', 'SEMIFINAL', 3, 0, 'ABERTO'),
(62, '2022-12-14', '16:00', 'FRA', 'MAR', 'AL BAYT', 'SEMIFINAL', 'SEMIFINAL', 2, 0, 'ABERTO'),
(64, '2022-12-18', '12:00', 'ARG', 'FRA', 'LUSAIL', 'FINAL', 'FINAL', 3, 3, 'ABERTO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `email`, `telefone`, `senha`) VALUES
(1, 'sntgrazi', 'grazielle200101@gmail.com', '75991171663', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Juliana', 'juliana@gmail.com', '7591171663', '7c6f8dba4a02404f97b5953d2c4172a7');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apostateste`
--
ALTER TABLE `apostateste`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_jogos`
--
ALTER TABLE `dados_jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apostateste`
--
ALTER TABLE `apostateste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `dados_jogos`
--
ALTER TABLE `dados_jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
