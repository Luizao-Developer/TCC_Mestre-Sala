-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jul-2022 às 00:35
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc_mestre_sala`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `Codigo` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `tbBarbearia_Codigo` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagendamento`
--

CREATE TABLE `tbagendamento` (
  `Codigo` int(11) NOT NULL,
  `StatusAgendamento` varchar(45) NOT NULL,
  `Servico` varchar(45) NOT NULL,
  `Preco` double NOT NULL,
  `Data` varchar(45) NOT NULL,
  `Hora` varchar(45) NOT NULL,
  `tbCliente_Senha_de_acesso1` varchar(45) NOT NULL,
  `tbProcedimento_Codigo` int(11) NOT NULL,
  `tbFuncionarios_tbPessoa_Codigo` int(45) NOT NULL,
  `tbFuncionarios_Codigo` int(45) NOT NULL,
  `tbCliente_Codigo` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbarbearia`
--

CREATE TABLE `tbbarbearia` (
  `Codigo` int(11) NOT NULL,
  `CNPJ` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Telefone_comercial` varchar(45) NOT NULL,
  `Telefone_pessoal` varchar(45) NOT NULL,
  `Senha_de_acesso` varchar(45) NOT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `Codigo` int(11) NOT NULL,
  `Telefone` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Data_nascimento` varchar(45) NOT NULL,
  `Cidade` varchar(45) NOT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `UF` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Foto` mediumblob DEFAULT NULL,
  `Senha_de_acesso` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Nome_de_usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionarios`
--

CREATE TABLE `tbfuncionarios` (
  `Codigo` int(11) NOT NULL,
  `Telefone` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Data/nascimento` varchar(45) NOT NULL,
  `Cidade` varchar(45) NOT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `UF` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Foto` mediumblob DEFAULT NULL,
  `Status` varchar(45) NOT NULL,
  `PIS-PASEP` varchar(45) NOT NULL,
  `Data_contratacao` varchar(45) NOT NULL,
  `Data_demissao` varchar(45) DEFAULT NULL,
  `tbBarbearia_Codigo` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprocedimento`
--

CREATE TABLE `tbprocedimento` (
  `Codigo` int(11) NOT NULL,
  `StatusProcedimento` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Tempo_estimado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrecebimento`
--

CREATE TABLE `tbrecebimento` (
  `Codigo` int(11) NOT NULL,
  `StatusRecebimento` varchar(45) NOT NULL,
  `Data` varchar(45) NOT NULL,
  `Forma_recebimento` varchar(45) NOT NULL,
  `Valor_recebido` double NOT NULL,
  `Saldo` double DEFAULT NULL,
  `Comentarios` varchar(45) DEFAULT NULL,
  `Estrelas` varchar(45) DEFAULT NULL,
  `tbAgendamento_Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `fk_tbAdmin_tbBarbearia1` (`tbBarbearia_Codigo`);

--
-- Índices para tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `fk_tbAgendamento_tbProcedimento1` (`tbProcedimento_Codigo`),
  ADD KEY `fk_tbAgendamento_tbFuncionarios1` (`tbFuncionarios_Codigo`),
  ADD KEY `fk_tbAgendamento_tbCliente1` (`tbCliente_Codigo`);

--
-- Índices para tabela `tbbarbearia`
--
ALTER TABLE `tbbarbearia`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `fk_tbFuncionarios_tbBarbearia1` (`tbBarbearia_Codigo`);

--
-- Índices para tabela `tbprocedimento`
--
ALTER TABLE `tbprocedimento`
  ADD PRIMARY KEY (`Codigo`);

--
-- Índices para tabela `tbrecebimento`
--
ALTER TABLE `tbrecebimento`
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `fk_tbRecebimento_tbAgendamento1` (`tbAgendamento_Codigo`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD CONSTRAINT `fk_tbAdmin_tbBarbearia1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  ADD CONSTRAINT `fk_tbAgendamento_tbCliente1` FOREIGN KEY (`tbCliente_Codigo`) REFERENCES `tbcliente` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbAgendamento_tbFuncionarios1` FOREIGN KEY (`tbFuncionarios_Codigo`) REFERENCES `tbfuncionarios` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbAgendamento_tbProcedimento1` FOREIGN KEY (`tbProcedimento_Codigo`) REFERENCES `tbprocedimento` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD CONSTRAINT `fk_tbFuncionarios_tbBarbearia1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbrecebimento`
--
ALTER TABLE `tbrecebimento`
  ADD CONSTRAINT `fk_tbRecebimento_tbAgendamento1` FOREIGN KEY (`tbAgendamento_Codigo`) REFERENCES `tbagendamento` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
