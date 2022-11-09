-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2022 às 22:37
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc2_0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncios`
--

CREATE TABLE `anuncios` (
  `IdAnuncio` int(11) NOT NULL,
  `FkIdClienteCriadorInAnuncios` int(11) DEFAULT NULL,
  `FkIdFormaDePagamentoInAnuncios` int(11) DEFAULT NULL,
  `DataDeCriacao` date DEFAULT NULL,
  `DataServico` date DEFAULT NULL,
  `Aberto` tinyint(1) DEFAULT NULL,
  `FkIdCandidatos` int(11) DEFAULT NULL,
  `DescricaoAnuncio` varchar(300) DEFAULT NULL,
  `FkIdPacienteInAnuncios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `IdAtendimento` int(11) NOT NULL,
  `FkIdAnuncioInAtendimento` int(11) DEFAULT NULL,
  `FkIdClienteInAtendimento` int(11) DEFAULT NULL,
  `DataAtendimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `IdAvaliacao` int(11) NOT NULL,
  `FkIdClienteInAvaliacao` int(11) DEFAULT NULL,
  `FkIdAnuncioInAvaliacao` int(11) DEFAULT NULL,
  `Avaliacao` float DEFAULT NULL,
  `Observacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

CREATE TABLE `candidato` (
  `IdCandidato` int(11) NOT NULL,
  `FkIdClienteInCandidato` int(11) DEFAULT NULL,
  `FkIdAnuncioInCandidato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `FkFormaDePagamentoPrincipalInCliente` int(11) DEFAULT NULL,
  `DataDeNascimentoUsuario` date DEFAULT NULL,
  `Cpf` varchar(14) DEFAULT NULL,
  `Rg` varchar(14) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `LoginUsuario` varchar(30) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Id`, `Nome`, `FkFormaDePagamentoPrincipalInCliente`, `DataDeNascimentoUsuario`, `Cpf`, `Rg`, `email`, `LoginUsuario`, `senha`, `Foto`) VALUES
(93, 'testefoto', NULL, '2022-10-31', '123', '123', '123@123', '123', '123123', '1667396950_123.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `IdContato` int(11) NOT NULL,
  `FkIdClienteInContato` int(11) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `NomeContato` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia`
--

CREATE TABLE `experiencia` (
  `IdExperiencia` int(11) NOT NULL,
  `FkIdClienteInExperiencia` int(11) DEFAULT NULL,
  `Experiencia` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

CREATE TABLE `formacao` (
  `Idformacao` int(11) NOT NULL,
  `FkIdClienteInFormacao` int(11) DEFAULT NULL,
  `Instituicao` varchar(50) DEFAULT NULL,
  `Formacao` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formasdepagamento`
--

CREATE TABLE `formasdepagamento` (
  `IdFormaDePagamento` int(11) NOT NULL,
  `FkIdClienteInFormaDePagamento` int(11) DEFAULT NULL,
  `TipoDePagamento` enum('pix','Dinheiro') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `IdPaciente` int(11) NOT NULL,
  `FkIdClienteInPaciente` int(11) DEFAULT NULL,
  `NomePaciente` varchar(50) DEFAULT NULL,
  `DataDeNascimentoPasciente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`IdPaciente`, `FkIdClienteInPaciente`, `NomePaciente`, `DataDeNascimentoPasciente`) VALUES
(11, 93, 'Joao', '2022-11-24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`IdAnuncio`),
  ADD KEY `FkIdClienteCriadorInAnuncios` (`FkIdClienteCriadorInAnuncios`) USING BTREE,
  ADD KEY `FkIdFormaDePagamentoInAnuncios` (`FkIdFormaDePagamentoInAnuncios`) USING BTREE;

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`IdAtendimento`),
  ADD KEY `FkIdAnuncioInAtendimento` (`FkIdAnuncioInAtendimento`) USING BTREE,
  ADD KEY `FkIdClienteInAtendimento` (`FkIdClienteInAtendimento`) USING BTREE;

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`IdAvaliacao`),
  ADD KEY `FkIdClienteInAvaliacao` (`FkIdClienteInAvaliacao`);

--
-- Índices para tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`IdCandidato`),
  ADD KEY `FkIdAnuncioInCandidato` (`FkIdAnuncioInCandidato`),
  ADD KEY `FkIdClienteInCandidato` (`FkIdClienteInCandidato`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FkFormaDePagamentoPrincipalInCliente` (`FkFormaDePagamentoPrincipalInCliente`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`IdContato`),
  ADD KEY `FkIdClienteInContato` (`FkIdClienteInContato`);

--
-- Índices para tabela `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`IdExperiencia`),
  ADD KEY `FkIdClienteInExperiencia` (`FkIdClienteInExperiencia`);

--
-- Índices para tabela `formacao`
--
ALTER TABLE `formacao`
  ADD PRIMARY KEY (`Idformacao`),
  ADD KEY `FkIdClienteInFormacao` (`FkIdClienteInFormacao`);

--
-- Índices para tabela `formasdepagamento`
--
ALTER TABLE `formasdepagamento`
  ADD PRIMARY KEY (`IdFormaDePagamento`),
  ADD KEY `FkIdClienteInFormaDePagamento` (`FkIdClienteInFormaDePagamento`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IdPaciente`),
  ADD KEY `FkIdClienteInPaciente` (`FkIdClienteInPaciente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `IdAnuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `IdAtendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `IdAvaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `IdCandidato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `IdContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `IdExperiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `formacao`
--
ALTER TABLE `formacao`
  MODIFY `Idformacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `formasdepagamento`
--
ALTER TABLE `formasdepagamento`
  MODIFY `IdFormaDePagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `IdPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `FkIdClienteCriador` FOREIGN KEY (`FkIdClienteCriadorInAnuncios`) REFERENCES `cliente` (`Id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `FkIdFormaDePagamento` FOREIGN KEY (`FkIdFormaDePagamentoInAnuncios`) REFERENCES `formasdepagamento` (`IdFormaDePagamento`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `FkIdAnuncio` FOREIGN KEY (`FkIdAnuncioInAtendimento`) REFERENCES `anuncios` (`IdAnuncio`),
  ADD CONSTRAINT `FkIdCliente` FOREIGN KEY (`FkIdClienteInAtendimento`) REFERENCES `cliente` (`Id`);

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `FkIdClienteInAvaliacao` FOREIGN KEY (`FkIdClienteInAvaliacao`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `FkIdAnuncioInCandidato` FOREIGN KEY (`FkIdAnuncioInCandidato`) REFERENCES `anuncios` (`IdAnuncio`) ON DELETE SET NULL,
  ADD CONSTRAINT `FkIdClienteInCandidato` FOREIGN KEY (`FkIdClienteInCandidato`) REFERENCES `cliente` (`Id`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FkFormaDePagamentoPrincipalInCliente` FOREIGN KEY (`FkFormaDePagamentoPrincipalInCliente`) REFERENCES `formasdepagamento` (`IdFormaDePagamento`);

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `FkIdClienteInContato` FOREIGN KEY (`FkIdClienteInContato`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `FkIdClienteInExperiencia` FOREIGN KEY (`FkIdClienteInExperiencia`) REFERENCES `cliente` (`Id`);

--
-- Limitadores para a tabela `formacao`
--
ALTER TABLE `formacao`
  ADD CONSTRAINT `FkIdClienteInFormacao` FOREIGN KEY (`FkIdClienteInFormacao`) REFERENCES `cliente` (`Id`);

--
-- Limitadores para a tabela `formasdepagamento`
--
ALTER TABLE `formasdepagamento`
  ADD CONSTRAINT `FkIdClienteInFormaDePagamento` FOREIGN KEY (`FkIdClienteInFormaDePagamento`) REFERENCES `cliente` (`Id`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `FkIdClienteInPaciente` FOREIGN KEY (`FkIdClienteInPaciente`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
