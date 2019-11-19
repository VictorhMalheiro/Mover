-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 10.129.76.12
-- Generation Time: 19-Nov-2019 às 21:30
-- Versão do servidor: 5.6.26-log
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alu_casa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_casa`
--

CREATE TABLE IF NOT EXISTS `tab_casa` (
`cod_casa` int(11) NOT NULL,
  `qtd_quarto` int(11) DEFAULT NULL,
  `qtd_banheiro` int(11) DEFAULT NULL,
  `qtd_suite` int(11) DEFAULT NULL,
  `area` float DEFAULT NULL,
  `aluguel` float DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `garagem` varchar(5) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tab_casa`
--

INSERT INTO `tab_casa` (`cod_casa`, `qtd_quarto`, `qtd_banheiro`, `qtd_suite`, `area`, `aluguel`, `tipo`, `garagem`, `cod_usuario`) VALUES
(1, 2, 2, 1, 90, 1250, '2', '2', 1),
(2, 3, 2, 1, 120, 1500, '2', '3', 1),
(3, 2, 1, 1, 50, 940, '1', '1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_endereco_casa`
--

CREATE TABLE IF NOT EXISTS `tab_endereco_casa` (
`cod_endereco` int(11) NOT NULL,
  `logradouro` varchar(30) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cod_casa` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tab_endereco_casa`
--

INSERT INTO `tab_endereco_casa` (`cod_endereco`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `cod_casa`) VALUES
(1, 'Av. Cap. Felicio Gomes', '400', 'Residencial Minerva', 'Barretos', 'SP', '14781556', 1),
(2, 'Rua 20', '2381', 'Centro', 'Barretos', 'SP', '14783242', 2),
(3, 'Rua Nemer Assad Mockdici', '177', 'Zequinha Amendola', 'Barretos', 'SP', '14781266', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_endereco_usuario`
--

CREATE TABLE IF NOT EXISTS `tab_endereco_usuario` (
`cod_endereco` int(11) NOT NULL,
  `logradouro` varchar(30) DEFAULT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tab_endereco_usuario`
--

INSERT INTO `tab_endereco_usuario` (`cod_endereco`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `cod_usuario`) VALUES
(1, 'Av. Cap. Felicio Gomes', 400, 'Residencial Minerva', 'Barretos', 'SP', '14781556', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_imagem_casa`
--

CREATE TABLE IF NOT EXISTS `tab_imagem_casa` (
`cod_imagem` int(11) NOT NULL,
  `nome_imagem` varchar(220) DEFAULT NULL,
  `caminho_imagem` varchar(220) DEFAULT NULL,
  `cod_casa` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tab_imagem_casa`
--

INSERT INTO `tab_imagem_casa` (`cod_imagem`, `nome_imagem`, `caminho_imagem`, `cod_casa`) VALUES
(1, '5dd45d53809bd.jpeg', '/assets/upload/', 1),
(2, '5dd45e57911b2.jpeg', '/assets/upload/', 2),
(3, '5dd45ee5e61ea.jpeg', '/assets/upload/', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_tel`
--

CREATE TABLE IF NOT EXISTS `tab_tel` (
`cod_tel` int(11) NOT NULL,
  `tel_fixo` varchar(15) NOT NULL,
  `tel_celular` varchar(15) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tab_tel`
--

INSERT INTO `tab_tel` (`cod_tel`, `tel_fixo`, `tel_celular`, `cod_usuario`) VALUES
(1, '1733233333', '17988283702', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_usuario`
--

CREATE TABLE IF NOT EXISTS `tab_usuario` (
`cod_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nivel` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `tab_usuario`
--

INSERT INTO `tab_usuario` (`cod_usuario`, `nome`, `email_usuario`, `login`, `senha`, `nivel`) VALUES
(1, 'Victor Hugo Malheiro', 'victor@gmail.com', 'vicmalheiro', '123', 0),
(2, 'Filipe Camilo', 'filipe@gmail.com', 'filipe', '123', 1),
(3, 'Bruno Antonio', 'brunoviado@gmail.com', 'bruno', '123', 1),
(4, 'Evandro Amorim', 'evan@gmail.com', 'evandro', '1234', 1),
(5, 'Evandro Amorim', 'teste@gmail.com', 'Evandro', 'dasda', 1),
(8, 'Juliana Borges Barros', 'juba@gmail.com', 'juba', '123', 1),
(9, 'Evandro', 'evandro@mover.com', 'Evan', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_casa`
--
ALTER TABLE `tab_casa`
 ADD PRIMARY KEY (`cod_casa`), ADD KEY `tab_casa_fk` (`cod_usuario`);

--
-- Indexes for table `tab_endereco_casa`
--
ALTER TABLE `tab_endereco_casa`
 ADD PRIMARY KEY (`cod_endereco`), ADD KEY `tab_endereco_casa_fk` (`cod_casa`);

--
-- Indexes for table `tab_endereco_usuario`
--
ALTER TABLE `tab_endereco_usuario`
 ADD PRIMARY KEY (`cod_endereco`), ADD KEY `tab_endereco_usuario_fk` (`cod_usuario`);

--
-- Indexes for table `tab_imagem_casa`
--
ALTER TABLE `tab_imagem_casa`
 ADD PRIMARY KEY (`cod_imagem`);

--
-- Indexes for table `tab_tel`
--
ALTER TABLE `tab_tel`
 ADD PRIMARY KEY (`cod_tel`), ADD KEY `tab_tel_fk` (`cod_usuario`);

--
-- Indexes for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
 ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_casa`
--
ALTER TABLE `tab_casa`
MODIFY `cod_casa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tab_endereco_casa`
--
ALTER TABLE `tab_endereco_casa`
MODIFY `cod_endereco` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tab_endereco_usuario`
--
ALTER TABLE `tab_endereco_usuario`
MODIFY `cod_endereco` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tab_imagem_casa`
--
ALTER TABLE `tab_imagem_casa`
MODIFY `cod_imagem` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tab_tel`
--
ALTER TABLE `tab_tel`
MODIFY `cod_tel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tab_casa`
--
ALTER TABLE `tab_casa`
ADD CONSTRAINT `tab_casa_fk` FOREIGN KEY (`cod_usuario`) REFERENCES `tab_usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `tab_endereco_casa`
--
ALTER TABLE `tab_endereco_casa`
ADD CONSTRAINT `tab_endereco_casa_fk` FOREIGN KEY (`cod_casa`) REFERENCES `tab_casa` (`cod_casa`);

--
-- Limitadores para a tabela `tab_endereco_usuario`
--
ALTER TABLE `tab_endereco_usuario`
ADD CONSTRAINT `tab_endereco_usuario_fk` FOREIGN KEY (`cod_usuario`) REFERENCES `tab_usuario` (`cod_usuario`);

--
-- Limitadores para a tabela `tab_tel`
--
ALTER TABLE `tab_tel`
ADD CONSTRAINT `tab_tel_fk` FOREIGN KEY (`cod_usuario`) REFERENCES `tab_usuario` (`cod_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
