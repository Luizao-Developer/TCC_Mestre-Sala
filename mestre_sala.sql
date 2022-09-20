-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2022 às 03:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mestre_sala`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `Codigo` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `tbBarbearia_Codigo` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbarbearia`
--

CREATE TABLE `tbbarbearia` (
  `Codigo` int(11) NOT NULL,
  `CNPJ` varchar(45) NOT NULL,
  `NomeBarbearia` varchar(45) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telefone_comercial` varchar(45) NOT NULL,
  `Telefone_pessoal` varchar(45) NOT NULL,
  `Senha_de_acesso` varchar(45) NOT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `Cidade` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `Foto` int(11) DEFAULT NULL,
  `adicional` varchar(300) DEFAULT NULL,
  `Facebook` varchar(50) DEFAULT NULL,
  `Instagram` varchar(50) DEFAULT NULL,
  `Data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbbarbearia`
--

INSERT INTO `tbbarbearia` (`Codigo`, `CNPJ`, `NomeBarbearia`, `Endereco`, `Email`, `Telefone_comercial`, `Telefone_pessoal`, `Senha_de_acesso`, `CEP`, `Cidade`, `Estado`, `Status`, `Foto`, `adicional`, `Facebook`, `Instagram`, `Data_cadastro`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]', '[value-10]', '[value-11]', '[value-12]', 0, NULL, '', '', '2022-08-18 16:17:34'),
(2, 'rgreg', 'ghgnfd', 'dhn', 'tteodoro1977@gmail.com', 'rgreg', 'eregerg', '$2y$10$e/NbZ0a.Nj.85xrE6rauT.h7fnlJOR7xdX1Dnj', '', 'gsergtgtg', '...', 'Em reforma', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(3, 'rgreg', 'ghgnfd', 'dhn', 'tteodoro1977@gmail.com', 'rgreg', 'eregerg', '$2y$10$5nt69NHQkBb3auQ6xbWM6uW23zgKIioYNfsi4j', '', 'gsergtgtg', '...', 'Em reforma', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(4, 'e3d3f3f3f3', 'dhn', 'dhn', 'tteodoro1977@gmail.com', '44984332260', '3f34f34f', '$2y$10$lf6IMrTW5kATYfeo9RpxyOlHdm8CgtsBtRJNKQ', '6544443', 'sao bernardo da colina', '...', 'Fechado temporariamente/tempo indeterminado', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(5, 'rferfwrefwerf', 'dhn', 'dhn', 'tteodoro1977@gmail.com', '44984332260', 'rfwerfwerfwerfw', '$2y$10$rG4jgsi6jrXaTF1Ylx8oceinc75mVvwmmAEojF', '6544443', 'sao bernardo da colina', '...', 'Em reforma', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(6, 'e3d3f3f3f3', 'dhn', 'dhn', 'tteodoro1977@gmail.com', '44984332260', '44984332260', '$2y$10$EfYnKoyIApg.VrX6I806sOI.V08/VhKK8YOiKN', '6544443', 'sao bernardo da colina', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(7, 'e3d3f3f3f3', 'Barbearia sao dimas', 'Rua 7 de Março', 'dimas@email.com', '23452562563', '43262356', '$2y$10$1Gmez2UOsUq93Zb9DBZMUu0Ro91SHRyO2OMg7g', '87538000', 'Perobal', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(8, 'wswsw', 'dhn', 'tteodoro1977@gmail.com', 'tteodoro1977@gmail.com', 'edweqdw', 'dqwedqwed', '$2y$10$NJ67Xnn5/61zly8cL8tWVuprHIHkR5O1FFXhOR', '6544443', 'sao bernardo da colina', '...', 'Fechado temporariamente/tempo indeterminado', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(9, 's', 's', 's', 's', 's', 's', '$2y$10$7xBy4SfIqhe/5bhuo7nxJe6AJ83BJH6xHDKJca', 's', 's', '...', 'Fechado temporariamente/tempo indeterminado', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(10, 'rerfrfefe', 'Sandro', 'Rua 13 de Abril', 'sa@gmail.com', '44984332260', '2342345345', '$2y$10$BlP81Ed7v36M1k/A.kGgxO5hkU/E5PgoOaaW7o', '34567382', 'Umuarama', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(11, '3423425345', 'sao', 'sao', 'sao@email.com', '3425452345', '435245', '$2y$10$vndIk6IBJLhbimTGSnhd1O1mkvBl0CLL1rwQtU', '32434', 'saolandia', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(12, 'tgretg', 'barbearia sao jose', 'tgreg', 'regtretg', 'regtergt', 'trgergtg', '$2y$10$sko4oXecCXDXnSir3j9H0ui1rv4KADvcWL65l7', 'regtreg', 'regtregt', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(13, '32445345234534', 'Barbearia europa', 'Rua sao jasão', 'europa@email.com', '42345345', '324523452435', '$2y$10$eJ1JvfnlZkaTeasYLLeSIuXFhrp5.Lhpoisz6D', '87538000', 'Perobal', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(14, '42345345345', 'Barbearia europa', 'rua sem nada', 'eu@email.com', '44984332260', '243523452345', 'senha', '6544443', 'sao bernardo da colina', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(15, '24r5345345', 'Barbearia seu Bufalo', 'Rua tarde da noite', 'bufalo@email.com', '2423452345', '4r235435345', 'bufalo', '2435235345', 'Bufalo city', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 16:17:34'),
(16, '21541544235', 'Barbearia zezinho', 'Rua 13 de Abril', 'ze@email.com', '4523452345', '4352435235', 'ze', '2154215423', 'Luciana', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 21:12:34'),
(17, 'rewgewrg', 'erferf', 'revtrtve', '1@email.com', 'regwergwergw', 'ergwergwerg', '1', '23234', 'regregtertg', '...', 'Aberto', NULL, NULL, NULL, NULL, '2022-08-18 21:50:27');

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
  `Senha_de_acesso` varchar(45) NOT NULL,
  `Nome_de_usuario` varchar(45) NOT NULL,
  `Foto` int(11) DEFAULT NULL,
  `tbBarbearia_Codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`Codigo`, `Telefone`, `Nome`, `Endereco`, `Data_nascimento`, `Cidade`, `CEP`, `UF`, `Email`, `Senha_de_acesso`, `Nome_de_usuario`, `Foto`, `tbBarbearia_Codigo`) VALUES
(1, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 0, NULL),
(2, '44984332260', 'sebastiao', 'rua sem fim da senhor clotilde', '2022-08-18', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$fMwa.vKddhP0pYRM6lVrpO1mOnA1ykKrDzuVUw', 'sebo', NULL, NULL),
(3, '44984332260', 'tteodoro1977@gmail.com', 'rua sem fim da senhor clotilde', '2022-08-07', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$LDBjnz39Ktn/o6fkYs.w1e7Etor1fnwdbFCvPd', 'dhn', NULL, NULL),
(4, '44984332260', 'tteodoro1977@gmail.com', 'rua sem fim da senhor clotilde', '2022-08-31', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$uAM/Wc76Gfg1mEhq78NYF.zqpeo6CH0BJka4Os', 'dhn', NULL, NULL),
(5, '44984332260', 'tteodoro1977@gmail.com', 'rua sem fim da senhor clotilde', '2022-09-02', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$TbhrCyS4P3zUotOKyC6R/OxSesBoR4alPqCkUi', 'dhn', NULL, NULL),
(6, '44984332260', 'tteodoro1977@gmail.com', 'rua sem fim da senhor clotilde', '2022-08-24', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$Q6jDoGlB8lXtn3aBb6aGmujXEVaLz9bQZuMCkt', 'dhn', NULL, NULL),
(7, '44984332260', 'tteodoro1977@gmail.com', 'rua sem fim da senhor clotilde', '2022-08-16', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$00RMcsReEGMY7W1Fhru4ceEt/SBPqvWYKm2Q82', 'dhn', NULL, NULL),
(8, '2435235345', 'dimas@email.com', 'rua sem fim da senhor clotilde', '2022-08-25', 'sao bernardo da colina', '6544443', '...', 'dna@email.com', '$2y$10$9Pi.xPP9g6jVY/4Cfz1x1ejHNoTCkC16qUt8Nb', 'dha', NULL, NULL),
(9, 's', 's', 's', '2022-08-24', 's', 's', '...', 's', '$2y$10$sH5jWa4GqklTQpDzCMMvJOIGJoDEBOIAoJ1RAs', 's', NULL, NULL),
(10, '44984332260', 'tteodoro1977@gmail.com', 'rua sem fim da senhor clotilde', '2022-08-22', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$T1YAVas6fnEew4F7AblOF.jRvScNDVijcEo60/', 'dhn', NULL, NULL),
(11, 'h54h645h6', 'dimas@email.com', '5h45h6', '2022-08-26', '546h456', '54h6456h', '...', '5tg45h6', '$2y$10$sk4EBx8tkYBChlGXDzYUr..LGpgcisfF23POZs', 'dha', NULL, NULL),
(12, '44984332260', 'Luiz Antonio', 'rua sem fim da senhor clotilde', '2022-08-08', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$efPUDknJyejyXm9loNi5AuH7y2fnqwrKtiLwFI', 'Luizão', NULL, NULL),
(13, 'ss', 'ss', 'ss', '2022-08-18', 'ss', 'ss', '...', 'ss', '$2y$10$EA37zjTJYc5vZ910CQAIAOaO3/ipiZUqqSsW5k', 'ss', NULL, NULL),
(14, '44984332260', 'Luiz', 'rua sem fim da senhor clotilde', '2022-08-30', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', '$2y$10$eMekvx0IJmRrv9X81KMG6eXugS94e0axlhUXoE', 'Luizi', NULL, NULL),
(15, '2435235345', 'dna@email.com', 'rua sem fim da senhor clotilde', '2022-08-24', 'sao bernardo da colina', '6544443', '...', 'dna@email.com', '123', 'dhn', NULL, NULL),
(16, '2342345', 'Luiz', 'ferwrgwrg', '2022-08-30', 'rgergergerg', 'ergerge', '...', 'lu@email.com', 'lu', 'as', NULL, NULL),
(17, '24323452345', 'Marcao', '32452345', '2022-08-09', 'Cidade qualquer', '23452345', '...', 'mar@email.com', 'marcao', 'Marcao', NULL, NULL),
(18, '4215342345', 'Lazaro', 'Rua de cidade', '2022-08-09', 'Douradina', '2151345', '...', 'la@email.com', 'lazaro', 'Lazaro', NULL, NULL),
(19, '44984332260', 'egergt', 'rua sem fim da senhor clotilde', '2022-08-23', 'sao bernardo da colina', '6544443', '...', 'tteodoro1977@gmail.com', 'tegteergtegtetg', 'egtergt', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionarios`
--

CREATE TABLE `tbfuncionarios` (
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
  `Status` varchar(45) NOT NULL,
  `PIS_PASEP` varchar(45) NOT NULL,
  `Data_contratacao` varchar(45) NOT NULL,
  `Data_demissao` varchar(45) DEFAULT NULL,
  `tbBarbearia_Codigo` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfuncionarios`
--

INSERT INTO `tbfuncionarios` (`Codigo`, `Telefone`, `Nome`, `Endereco`, `Data_nascimento`, `Cidade`, `CEP`, `UF`, `Email`, `Foto`, `Status`, `PIS_PASEP`, `Data_contratacao`, `Data_demissao`, `tbBarbearia_Codigo`) VALUES
(1, '43', '345t345', 'gerger', 'ergereg', 'ergerge', 'ergererg', 'regerg', 'ergerg', NULL, 'ergerge', 'ergerg', 'ergerge', NULL, 5),
(7, 'gertgete', 'defr', 'rtherth', '2022-09-08', 'thertherthe', 'herther', '...', 'rthertherhe', NULL, 'Em licença', 'retherthert', '2022-09-08', NULL, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprocedimento`
--

CREATE TABLE `tbprocedimento` (
  `Codigo` int(11) NOT NULL,
  `StatusProcedimento` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Tempo_estimado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `tbBarbearia_Codigo` (`tbBarbearia_Codigo`);

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbbarbearia`
--
ALTER TABLE `tbbarbearia`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbprocedimento`
--
ALTER TABLE `tbprocedimento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbrecebimento`
--
ALTER TABLE `tbrecebimento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT;

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
-- Limitadores para a tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `tbcliente_ibfk_1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`Codigo`);

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
