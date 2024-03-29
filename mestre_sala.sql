-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2022 às 20:34
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

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
  `CodigoAgendamento` int(11) NOT NULL,
  `StatusAgendamento` varchar(45) NOT NULL,
  `Barbearia` varchar(50) NOT NULL,
  `Cliente` varchar(50) NOT NULL,
  `Preco` decimal(10,0) NOT NULL,
  `Data_agendamento` varchar(45) NOT NULL,
  `Hora` varchar(45) NOT NULL,
  `tbProcedimento_Codigo` int(11) NOT NULL,
  `tbCliente_Codigo` int(45) NOT NULL,
  `tbBarbearia_Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbagendamento`
--

INSERT INTO `tbagendamento` (`CodigoAgendamento`, `StatusAgendamento`, `Barbearia`, `Cliente`, `Preco`, `Data_agendamento`, `Hora`, `tbProcedimento_Codigo`, `tbCliente_Codigo`, `tbBarbearia_Codigo`) VALUES
(4, 'Agendado', 'Barbearia teste', 'Jubinicio', '10', '2022-11-30', '45', 39, 20, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbarbearia`
--

CREATE TABLE `tbbarbearia` (
  `CodigoBarbearia` int(11) NOT NULL,
  `CNPJ` varchar(45) NOT NULL,
  `nomeAdmin` varchar(100) NOT NULL,
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
  `Foto` varchar(50) DEFAULT NULL,
  `adicional` varchar(300) DEFAULT NULL,
  `Facebook` varchar(50) DEFAULT NULL,
  `Instagram` varchar(50) DEFAULT NULL,
  `Data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbbarbearia`
--

INSERT INTO `tbbarbearia` (`CodigoBarbearia`, `CNPJ`, `nomeAdmin`, `NomeBarbearia`, `Endereco`, `Email`, `Telefone_comercial`, `Telefone_pessoal`, `Senha_de_acesso`, `CEP`, `Cidade`, `Estado`, `Status`, `Foto`, `adicional`, `Facebook`, `Instagram`, `Data_cadastro`) VALUES
(14, '42345345345', '', 'Barbearia teste', 'rua sem nada', 'eu@email.com', '(44) 9843-3226', '243523452345', 'senha', '65444-43', 'sao bernardo da colina', 'estado', 'Aberto', '1.png', 'Aqui vc é um rei', '', '', '2022-08-18 16:17:34'),
(19, '43.857.249/4284', '', 'Barbearia red', 'Rua 7 de setembro 1239 Jardim Independencia', 'tteodoro1977@gmail.com', '(44) 9843-2100', '(44) 9843-4221', '24', '87538-000', 'Perobal', '...', 'Aberto', '1.jpg', '', '', 'redBarber', '2022-11-20 10:01:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbbarbearias_clientes`
--

CREATE TABLE `tbbarbearias_clientes` (
  `Codigo_Cliente` int(20) NOT NULL,
  `Codigo_Barbearia` int(20) NOT NULL,
  `Data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbbarbearias_clientes`
--

INSERT INTO `tbbarbearias_clientes` (`Codigo_Cliente`, `Codigo_Barbearia`, `Data_cadastro`) VALUES
(20, 14, '2022-10-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `CodigoCliente` int(11) NOT NULL,
  `Telefone` varchar(45) NOT NULL,
  `Nome` varchar(45) NOT NULL,
  `Endereco` varchar(45) NOT NULL,
  `Data_nascimento` varchar(45) NOT NULL,
  `Cidade` varchar(45) NOT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `UF` varchar(45) NOT NULL,
  `EmailCliente` varchar(45) NOT NULL,
  `Senha_de_acesso` varchar(45) NOT NULL,
  `Nome_de_usuario` varchar(45) NOT NULL,
  `Foto` varchar(50) DEFAULT NULL,
  `tbBarbearia_Codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`CodigoCliente`, `Telefone`, `Nome`, `Endereco`, `Data_nascimento`, `Cidade`, `CEP`, `UF`, `EmailCliente`, `Senha_de_acesso`, `Nome_de_usuario`, `Foto`, `tbBarbearia_Codigo`) VALUES
(20, '98542231', 'Jubinicio', 'rua sem nada', '2022-10-11', 'sao bernardo da colina', '6544443', '...', 'ju@gmail.com', 'ju', 'Jubinicio', '1.jpg', NULL),
(21, '(44) 9843-3226', 'Canal do Lu', '1239, Rua Tajuba, Jardim dos principes', '2022-11-03', 'Perobal', '87538-000', 'PR', 'luizteodorolaoct@gmail.com', 'bolsonaro22', 'Canal do Lu', NULL, NULL),
(22, '(44) 9843-3226', 'Luiz Antonio', '1239 Rua Tajubá Jardim Independencia', '2002-02-15', 'Perobal', '87538-000', 'PR', 'tteodoro1977@gmail.com', 'luiz2002', 'Luizão', NULL, NULL),
(23, '(44) 9834-3221', 'Luiz Silva', '1456 Rua 7 de Abril Bairro jardim das flores', '2022-11-01', 'Xambrê', '87535-000', 'PR', 'siv@gmail.com', 'luizantonio', 'silvinho', NULL, NULL);

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
  `StatusFunc` varchar(45) NOT NULL,
  `PIS_PASEP` varchar(45) NOT NULL,
  `RG` varchar(15) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `Data_contratacao` varchar(45) NOT NULL,
  `Data_demissao` varchar(45) DEFAULT NULL,
  `tbBarbearia_Codigo` int(45) NOT NULL,
  `tbProcedimento_Codigo` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfuncionarios`
--

INSERT INTO `tbfuncionarios` (`Codigo`, `Telefone`, `Nome`, `Endereco`, `Data_nascimento`, `Cidade`, `CEP`, `UF`, `Email`, `Foto`, `StatusFunc`, `PIS_PASEP`, `RG`, `CPF`, `Data_contratacao`, `Data_demissao`, `tbBarbearia_Codigo`, `tbProcedimento_Codigo`) VALUES
(7, 'gertgete', 'defr', 'rtherth', '2022-09-08', 'thertherthe', 'herther', '...', 'rthertherhe', NULL, 'Em licença', 'retherthert', '', '', '2022-09-08', NULL, 14, 0),
(11, 'w', 'w', 'w', '2022-08-31', 'w', 'w', '...', 'w', NULL, 'Trabalhando', 'w', '', '', '2022-09-16', NULL, 14, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprocedimento`
--

CREATE TABLE `tbprocedimento` (
  `Codigo` int(11) NOT NULL,
  `StatusProcedimento` varchar(45) NOT NULL,
  `NomeProcedimento` varchar(45) NOT NULL,
  `Descricao` text NOT NULL,
  `Valor` decimal(10,0) NOT NULL,
  `Tempo_estimado` varchar(45) NOT NULL,
  `tbBarbearia_Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbprocedimento`
--

INSERT INTO `tbprocedimento` (`Codigo`, `StatusProcedimento`, `NomeProcedimento`, `Descricao`, `Valor`, `Tempo_estimado`, `tbBarbearia_Codigo`) VALUES
(1, 't', 't', 't', '0', '45', 14),
(36, 'Ativo', 'Corte de Cabelo Masculino', 'Corte masculino', '20', '30 min', 14),
(39, 'Ativo', 'Barba', 'Estilização e corte de barba', '21', '10 min', 14);

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
  ADD PRIMARY KEY (`CodigoAgendamento`),
  ADD KEY `fk_tbAgendamento_tbProcedimento1` (`tbProcedimento_Codigo`),
  ADD KEY `fk_tbAgendamento_tbCliente1` (`tbCliente_Codigo`),
  ADD KEY `tbBarbearia_Codigo` (`tbBarbearia_Codigo`);

--
-- Índices para tabela `tbbarbearia`
--
ALTER TABLE `tbbarbearia`
  ADD PRIMARY KEY (`CodigoBarbearia`);

--
-- Índices para tabela `tbbarbearias_clientes`
--
ALTER TABLE `tbbarbearias_clientes`
  ADD KEY `Codigo_Barbearia` (`Codigo_Barbearia`),
  ADD KEY `Codigo_Cliente` (`Codigo_Cliente`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`CodigoCliente`),
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
  ADD PRIMARY KEY (`Codigo`),
  ADD KEY `tbBarbearia_Codigo` (`tbBarbearia_Codigo`);

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
  MODIFY `CodigoAgendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbbarbearia`
--
ALTER TABLE `tbbarbearia`
  MODIFY `CodigoBarbearia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `CodigoCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbprocedimento`
--
ALTER TABLE `tbprocedimento`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  ADD CONSTRAINT `fk_tbAdmin_tbBarbearia1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`CodigoBarbearia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  ADD CONSTRAINT `fk_tbAgendamento_tbCliente1` FOREIGN KEY (`tbCliente_Codigo`) REFERENCES `tbcliente` (`CodigoCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbAgendamento_tbProcedimento1` FOREIGN KEY (`tbProcedimento_Codigo`) REFERENCES `tbprocedimento` (`Codigo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbagendamento_ibfk_1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`CodigoBarbearia`);

--
-- Limitadores para a tabela `tbbarbearias_clientes`
--
ALTER TABLE `tbbarbearias_clientes`
  ADD CONSTRAINT `tbbarbearias_clientes_ibfk_1` FOREIGN KEY (`Codigo_Barbearia`) REFERENCES `tbbarbearia` (`CodigoBarbearia`),
  ADD CONSTRAINT `tbbarbearias_clientes_ibfk_2` FOREIGN KEY (`Codigo_Cliente`) REFERENCES `tbcliente` (`CodigoCliente`);

--
-- Limitadores para a tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD CONSTRAINT `tbcliente_ibfk_1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`CodigoBarbearia`);

--
-- Limitadores para a tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD CONSTRAINT `fk_tbFuncionarios_tbBarbearia1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`CodigoBarbearia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbprocedimento`
--
ALTER TABLE `tbprocedimento`
  ADD CONSTRAINT `tbprocedimento_ibfk_1` FOREIGN KEY (`tbBarbearia_Codigo`) REFERENCES `tbbarbearia` (`CodigoBarbearia`);

--
-- Limitadores para a tabela `tbrecebimento`
--
ALTER TABLE `tbrecebimento`
  ADD CONSTRAINT `fk_tbRecebimento_tbAgendamento1` FOREIGN KEY (`tbAgendamento_Codigo`) REFERENCES `tbagendamento` (`CodigoAgendamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
