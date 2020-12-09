-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2020 às 17:54
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdsimetria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbapadrinhamento`
--

CREATE TABLE `tbapadrinhamento` (
  `codApadrinhamento` int(11) NOT NULL,
  `codApadrinhado` int(11) NOT NULL,
  `codPadrinho` int(11) NOT NULL,
  `dataApadrinhamento` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbapadrinhamento`
--

INSERT INTO `tbapadrinhamento` (`codApadrinhamento`, `codApadrinhado`, `codPadrinho`, `dataApadrinhamento`) VALUES
(2, 1, 4, '2020-12-07 13:31:20'),
(3, 2, 4, '2020-12-07 13:31:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoacao`
--

CREATE TABLE `tbdoacao` (
  `codDoacao` int(11) NOT NULL,
  `dataDoacao` datetime NOT NULL DEFAULT current_timestamp(),
  `rastrearDoacao` varchar(15) NOT NULL,
  `codUsers` int(11) NOT NULL,
  `codPublicacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbdoacao`
--

INSERT INTO `tbdoacao` (`codDoacao`, `dataDoacao`, `rastrearDoacao`, `codUsers`, `codPublicacao`) VALUES
(1, '2020-12-07 13:29:29', 'AV123456789OB', 4, 5),
(2, '2020-12-07 13:29:55', 'AS123567823AS', 4, 3),
(3, '2020-12-07 13:30:25', 'AZ234659687AZ', 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbescolaridade`
--

CREATE TABLE `tbescolaridade` (
  `codEscolaridade` int(11) NOT NULL,
  `serieEscolaridade` varchar(50) NOT NULL,
  `anofimEscolaridade` date NOT NULL,
  `instituicaoEscolaridade` varchar(100) NOT NULL,
  `codInstituicaoEscolaridade` int(11) NOT NULL,
  `nivelEscolaridade` varchar(50) NOT NULL,
  `identificarEscolaridade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbescolaridade`
--

INSERT INTO `tbescolaridade` (`codEscolaridade`, `serieEscolaridade`, `anofimEscolaridade`, `instituicaoEscolaridade`, `codInstituicaoEscolaridade`, `nivelEscolaridade`, `identificarEscolaridade`) VALUES
(1, '3º ano', '2020-12-07', 'Etec Getúlio Vargas', 4321, 'Ensino Médio', 191),
(2, '1º ano', '2020-12-07', 'EE. Oswaldo Catalano', 7896, 'Educação Infantil', 273),
(3, '6º ano', '2020-12-07', 'EMEF Madre Joana Angélica de Jesus', 1701, 'Ensino Fundamental', 321),
(4, '', '0000-00-00', '', 0, '', 0),
(5, '', '0000-00-00', '', 0, '', 0),
(6, '', '0000-00-00', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfavoritos`
--

CREATE TABLE `tbfavoritos` (
  `codFavoritos` int(11) NOT NULL,
  `codPublicacao` int(11) NOT NULL,
  `codUsers` int(11) NOT NULL,
  `dataFavoritos` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfavoritos`
--

INSERT INTO `tbfavoritos` (`codFavoritos`, `codPublicacao`, `codUsers`, `dataFavoritos`) VALUES
(1, 1, 4, '2020-12-07 13:23:43'),
(2, 3, 4, '2020-12-07 13:23:49'),
(3, 6, 4, '2020-12-07 13:24:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfoneinstituicao`
--

CREATE TABLE `tbfoneinstituicao` (
  `codFoneInstituicao` int(11) NOT NULL,
  `NumeroFoneInstituicao` varchar(14) NOT NULL,
  `CelularFoneInstituicao` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfoneinstituicao`
--

INSERT INTO `tbfoneinstituicao` (`codFoneInstituicao`, `NumeroFoneInstituicao`, `CelularFoneInstituicao`) VALUES
(2, '(11) 2554-8796', '(11) 99524-875'),
(3, '(11) 5214-8547', '(11) 9457-8521'),
(4, '(11) 8754-5214', '(11) 3654-9874'),
(5, '5858', '8585');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbhistorico`
--

CREATE TABLE `tbhistorico` (
  `codHistorico` int(11) NOT NULL,
  `codPublicacao` int(11) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbinstituicao`
--

CREATE TABLE `tbinstituicao` (
  `codInstituicao` int(11) NOT NULL,
  `nomeInstituicao` varchar(150) NOT NULL,
  `admInstituicao` varchar(50) NOT NULL,
  `coddaInstituicao` int(11) NOT NULL,
  `modalidadeInstituicao` varchar(50) NOT NULL,
  `portematriculaInstituicao` int(11) NOT NULL,
  `totalmatriculaInstituicao` int(11) NOT NULL,
  `cepInstituicao` varchar(20) NOT NULL,
  `ufInstituicao` varchar(2) NOT NULL,
  `complementoInstituicao` varchar(20) NOT NULL,
  `cidadeInstituicao` varchar(50) NOT NULL,
  `bairroInstituicao` varchar(50) NOT NULL,
  `municipioInstituicao` varchar(50) NOT NULL,
  `logInstituicao` varchar(50) NOT NULL,
  `numInstituicao` int(11) NOT NULL,
  `imgInstituicao` varchar(50) NOT NULL,
  `codFoneInstituicao` int(11) NOT NULL,
  `codLoginInstituicao` int(11) NOT NULL,
  `codNivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbinstituicao`
--

INSERT INTO `tbinstituicao` (`codInstituicao`, `nomeInstituicao`, `admInstituicao`, `coddaInstituicao`, `modalidadeInstituicao`, `portematriculaInstituicao`, `totalmatriculaInstituicao`, `cepInstituicao`, `ufInstituicao`, `complementoInstituicao`, `cidadeInstituicao`, `bairroInstituicao`, `municipioInstituicao`, `logInstituicao`, `numInstituicao`, `imgInstituicao`, `codFoneInstituicao`, `codLoginInstituicao`, `codNivel`) VALUES
(3, 'Etec Getúlio Vargas', 'Técnica', 4321, 'municipal', 750, 500, '04266-040', 'SP', 'Rua ', 'São Paulo', 'Ipiranga', 'São Paulo', 'R. Clóvis Bueno de Azevedo', 70, 'img/escolas/gv.jpg', 2, 2, 2),
(4, 'EE. Oswaldo Catalano', 'Estadual', 7896, 'estadual', 1000, 854, '03065-000', 'SP', 'Instituição de Ensin', 'São Paulo', 'Tatuapé', 'São Paulo', 'Rua Filipe Camarão', 350, 'img/escolas/oc.jpg', 3, 3, 2),
(5, 'EMEF Madre Joana Angélica de Jesus', 'Municipal', 1701, 'estadual', 874, 600, '08460-200', 'SP', 'Escola', 'São Paulo', 'Jardim Soares', 'São Paulo', 'Rua Antônio Quaresma', 425, 'img/escolas/madre.jpg', 4, 4, 2),
(6, 'SUELI FERREIRA FERMINO', 'Estadual', 8888, 'municipal', 444, 222, '08460-530', 'SP', 'k,juhk,', 'São Paulo', 'Jardim São Paulo(Zona Leste)', 'fjngfj', 'Rua Furtado de Morais', 77, '', 5, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogininstituicao`
--

CREATE TABLE `tblogininstituicao` (
  `codLoginInstituicao` int(11) NOT NULL,
  `emailLoginInstituicao` varchar(100) NOT NULL,
  `senhaLoginInstituicao` varchar(100) NOT NULL,
  `dataLoginInstituicao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblogininstituicao`
--

INSERT INTO `tblogininstituicao` (`codLoginInstituicao`, `emailLoginInstituicao`, `senhaLoginInstituicao`, `dataLoginInstituicao`) VALUES
(2, 'etecgetuliovargas@gov.com.br', '456321', '2020-12-07 00:40:09'),
(3, 'oswaldocatalano@gov.com.br', 'tatuape', '2020-12-07 00:50:54'),
(4, 'madrejoana@gov.com.br', 'madre', '2020-12-07 01:03:17'),
(5, 'eeeee@gg.cc.sa', '777', '2020-12-07 01:16:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnivel`
--

CREATE TABLE `tbnivel` (
  `codNivel` int(11) NOT NULL,
  `acessoNivel` int(11) NOT NULL,
  `tipoNivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbnivel`
--

INSERT INTO `tbnivel` (`codNivel`, `acessoNivel`, `tipoNivel`) VALUES
(1, 1, 'Aluno'),
(2, 2, 'instituicao'),
(3, 3, 'usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpendencias`
--

CREATE TABLE `tbpendencias` (
  `codPendencias` int(11) NOT NULL,
  `descPendencias` varchar(50) NOT NULL,
  `tiPendencias` varchar(20) NOT NULL,
  `codAluno` int(11) NOT NULL,
  `codDoador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpendencias`
--

INSERT INTO `tbpendencias` (`codPendencias`, `descPendencias`, `tiPendencias`, `codAluno`, `codDoador`) VALUES
(1, 'precisa da sua ajuda', 'Ajuda', 1, 4),
(2, 'Seu herói já chegou', 'Herói', 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacao`
--

CREATE TABLE `tbpublicacao` (
  `codPublicacao` int(11) NOT NULL,
  `tituloPublicacao` varchar(20) NOT NULL,
  `descricaoPublicacao` varchar(100) NOT NULL,
  `dataPublicacao` datetime NOT NULL DEFAULT current_timestamp(),
  `fotoPublicacao` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpublicacao`
--

INSERT INTO `tbpublicacao` (`codPublicacao`, `tituloPublicacao`, `descricaoPublicacao`, `dataPublicacao`, `fotoPublicacao`, `status`) VALUES
(1, 'Caderno', 'Gostaria de um caderno bem bonito e clean. Gosto das cores rosa e azul. Minha mãe não tem cindições ', '2020-12-07 12:57:25', 'Caderno', 'inativo'),
(2, 'Pacote de Sulfite', 'Preciso de um pacote de folhas sulfite para trabalho escolar. A escola não esta fornecendo materiais', '2020-12-07 13:02:49', 'Pacote de Sulfite', 'ativo'),
(3, 'Mochila Feminina', 'Gostaria de uma mochila rosa, da Barbie, para levar meus materiais para a escola. Minha mochila atua', '2020-12-07 13:04:49', 'Mochila Feminina', 'inativo'),
(4, 'Fichário Feminino', 'Gostaria de um fichario para melhor organização. Não tenho dinheiro para comprar. Seria muito legal ', '2020-12-07 13:07:25', 'Fichário Feminino', 'ativo'),
(5, 'Lápis de Cor', 'Gostaria de uma nova caixa de lápis de cor. Não tenho nenhum, e tenho que ficar pedindo emprestado, ', '2020-12-07 13:09:30', 'Lápis de Cor', 'inativo'),
(6, 'Tinta', 'Preciso de um pacotinho de tinta para a aula de artes. A escola não fornece bons materiais, o que nã', '2020-12-07 13:12:28', 'Tinta', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacaoinstitu`
--

CREATE TABLE `tbpublicacaoinstitu` (
  `codPublicacaoInstituicao` int(11) NOT NULL,
  `codPublicacao` int(11) NOT NULL,
  `codInstituicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacaousuario`
--

CREATE TABLE `tbpublicacaousuario` (
  `codPublicacaoUsuario` int(11) NOT NULL,
  `codPublicacao` int(11) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpublicacaousuario`
--

INSERT INTO `tbpublicacaousuario` (`codPublicacaoUsuario`, `codPublicacao`, `codUsuario`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 1),
(5, 5, 2),
(6, 6, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusers`
--

CREATE TABLE `tbusers` (
  `codUsers` int(11) NOT NULL,
  `nomeUsers` varchar(100) NOT NULL,
  `nascUsers` date NOT NULL,
  `sexoUsers` varchar(1) NOT NULL,
  `iconUsers` varchar(50) NOT NULL,
  `cpfUsers` varchar(14) NOT NULL,
  `cepUsers` varchar(15) NOT NULL,
  `cidadeUsers` varchar(100) NOT NULL,
  `ufUsers` varchar(2) NOT NULL,
  `municipioUsers` varchar(100) NOT NULL,
  `bairroUsers` varchar(100) NOT NULL,
  `logUsers` varchar(100) NOT NULL,
  `numUsers` int(11) NOT NULL,
  `complementoUsers` varchar(50) NOT NULL,
  `codNivel` int(11) NOT NULL,
  `codEscolaridade` int(11) NOT NULL,
  `codInstituicao` int(11) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusers`
--

INSERT INTO `tbusers` (`codUsers`, `nomeUsers`, `nascUsers`, `sexoUsers`, `iconUsers`, `cpfUsers`, `cepUsers`, `cidadeUsers`, `ufUsers`, `municipioUsers`, `bairroUsers`, `logUsers`, `numUsers`, `complementoUsers`, `codNivel`, `codEscolaridade`, `codInstituicao`, `iduser`) VALUES
(1, 'Stephani Henrique', '2002-09-24', 'F', 'MulherAranha', '123.123.123-12', '08460157', 'São Paulo', 'SP', 'São Paulo', 'Jardim Soares', 'Rua Eusébio Rodrigues', 181, '', 2, 1, 3, 1),
(2, 'Tais Fermino', '2015-02-25', 'F', 'BlackWidow', '213.213.213-21', '08042-060', 'São Paulo', 'SP', 'São Paulo', 'Jardim Lajeado', 'Rua Aveloz', 214, '', 2, 2, 4, 2),
(3, 'Nathalia Araujo', '2010-05-07', 'F', 'Storm', '748.748.747-18', '05208-190', 'São Paulo', 'SP', 'São Paulo', 'Vila Perus', 'Rua Manuel Felizardo de Souza', 37, '', 2, 3, 5, 3),
(4, 'Aline Mendonça', '1989-03-20', 'F', 'BlackCat', '345.345.345-34', '03941-060', 'São Paulo', 'SP', 'São Paulo', 'Jardim Paraguaçu', 'Rua Taiobeiras', 300, '', 3, 4, 5, 4),
(5, 'Carlos Eduardo', '1979-06-29', 'M', 'Batman', '956.956.956-47', '04147-090', 'São Paulo', 'SP', 'São Paulo', 'Vila do Bosque', 'Travessa José Bracarense', 708, '', 3, 5, 5, 5),
(6, 'Allan Vidal', '1977-03-13', 'M', 'Capitão', '126.126.126-75', '04406-190', 'São Paulo', 'SP', 'São Paulo', 'Vila Império', 'Rua Professor Marcos Lindenberg', 231, '', 3, 6, 5, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `created`) VALUES
(1, 'stephani@gmail.com', '$2y$10$sYtN7xXFnFNVMzNTCuBpLe2isMztvz95sOPnx8wIj4KZDtFGiKQde', '2020-12-07 12:33:24'),
(2, 'Tais@gmail.com', '$2y$10$o/n1fCMVV1dlDnsY.3w/4eByqy4SnftTvUlYTkiu8CwDoWHW03AzK', '2020-12-07 12:38:35'),
(3, 'Nathalia@gmail.com', '$2y$10$WE4IxY7r3jYZFNwzQOk8PeaSyDk0CqYcE3wb7iTqmcLI0BFhzH1fi', '2020-12-07 12:43:30'),
(4, 'aline@gmail.com', '$2y$10$yBhCG7KKF0CmJQ.U/buvjOyxDIwyTQBBF6HYA7hNF5gaqCxp.UfKS', '2020-12-07 12:49:02'),
(5, 'Carlos@gmail.com', '$2y$10$OVdIBbLZMQe8Xdhrwr.g.e9gxpj5YhvefCTgXfkPO/iTdSZkPic..', '2020-12-07 12:52:22'),
(6, 'Allan@gmail.com', '$2y$10$qaueYVvahP3XpLQ58Cs3ue3fMZIooKKLLCEGqK4CMzT5tlWxBlKBe', '2020-12-07 12:54:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  ADD PRIMARY KEY (`codApadrinhamento`),
  ADD KEY `codApadrinhado_fk` (`codApadrinhado`),
  ADD KEY `codPadrinho_fk` (`codPadrinho`);

--
-- Índices para tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD PRIMARY KEY (`codDoacao`),
  ADD KEY `codUsers_1fk` (`codUsers`),
  ADD KEY `codPublicacao_1fk` (`codPublicacao`);

--
-- Índices para tabela `tbescolaridade`
--
ALTER TABLE `tbescolaridade`
  ADD PRIMARY KEY (`codEscolaridade`);

--
-- Índices para tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  ADD PRIMARY KEY (`codFavoritos`),
  ADD KEY `codUsers_2fk` (`codUsers`),
  ADD KEY `codPublicacao_2fk` (`codPublicacao`);

--
-- Índices para tabela `tbfoneinstituicao`
--
ALTER TABLE `tbfoneinstituicao`
  ADD PRIMARY KEY (`codFoneInstituicao`);

--
-- Índices para tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD PRIMARY KEY (`codHistorico`),
  ADD KEY `codUsers_3fk` (`codUsuario`),
  ADD KEY `codPublicacao_3fk` (`codPublicacao`);

--
-- Índices para tabela `tbinstituicao`
--
ALTER TABLE `tbinstituicao`
  ADD PRIMARY KEY (`codInstituicao`),
  ADD KEY `codFoneInstituicao_fk` (`codFoneInstituicao`),
  ADD KEY `codLoginInstituicao_fk` (`codLoginInstituicao`),
  ADD KEY `codNivel_fk` (`codNivel`);

--
-- Índices para tabela `tblogininstituicao`
--
ALTER TABLE `tblogininstituicao`
  ADD PRIMARY KEY (`codLoginInstituicao`);

--
-- Índices para tabela `tbnivel`
--
ALTER TABLE `tbnivel`
  ADD PRIMARY KEY (`codNivel`);

--
-- Índices para tabela `tbpendencias`
--
ALTER TABLE `tbpendencias`
  ADD PRIMARY KEY (`codPendencias`),
  ADD KEY `codAluno_fk` (`codAluno`),
  ADD KEY `codDoador_fk` (`codDoador`);

--
-- Índices para tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD PRIMARY KEY (`codPublicacao`);

--
-- Índices para tabela `tbpublicacaoinstitu`
--
ALTER TABLE `tbpublicacaoinstitu`
  ADD PRIMARY KEY (`codPublicacaoInstituicao`),
  ADD KEY `codPublicacao_4fk` (`codPublicacao`),
  ADD KEY `codInstituicao_fk` (`codInstituicao`);

--
-- Índices para tabela `tbpublicacaousuario`
--
ALTER TABLE `tbpublicacaousuario`
  ADD PRIMARY KEY (`codPublicacaoUsuario`),
  ADD KEY `codPublicacao_5fk` (`codPublicacao`),
  ADD KEY `codUsers_4fk` (`codUsuario`);

--
-- Índices para tabela `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`codUsers`),
  ADD KEY `codNivel_2fk` (`codNivel`),
  ADD KEY `codEscolaridade_fk` (`codEscolaridade`),
  ADD KEY `codInstituicao_2fk` (`codInstituicao`),
  ADD KEY `codUsers_5fk` (`iduser`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  MODIFY `codApadrinhamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  MODIFY `codDoacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbescolaridade`
--
ALTER TABLE `tbescolaridade`
  MODIFY `codEscolaridade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  MODIFY `codFavoritos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbfoneinstituicao`
--
ALTER TABLE `tbfoneinstituicao`
  MODIFY `codFoneInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  MODIFY `codHistorico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbinstituicao`
--
ALTER TABLE `tbinstituicao`
  MODIFY `codInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblogininstituicao`
--
ALTER TABLE `tblogininstituicao`
  MODIFY `codLoginInstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbnivel`
--
ALTER TABLE `tbnivel`
  MODIFY `codNivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbpendencias`
--
ALTER TABLE `tbpendencias`
  MODIFY `codPendencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  MODIFY `codPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbpublicacaoinstitu`
--
ALTER TABLE `tbpublicacaoinstitu`
  MODIFY `codPublicacaoInstituicao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpublicacaousuario`
--
ALTER TABLE `tbpublicacaousuario`
  MODIFY `codPublicacaoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `codUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbapadrinhamento`
--
ALTER TABLE `tbapadrinhamento`
  ADD CONSTRAINT `codApadrinhado_fk` FOREIGN KEY (`codApadrinhado`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codPadrinho_fk` FOREIGN KEY (`codPadrinho`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD CONSTRAINT `codPublicacao_1fk` FOREIGN KEY (`codPublicacao`) REFERENCES `tbpublicacao` (`codPublicacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codUsers_1fk` FOREIGN KEY (`codUsers`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbfavoritos`
--
ALTER TABLE `tbfavoritos`
  ADD CONSTRAINT `codPublicacao_2fk` FOREIGN KEY (`codPublicacao`) REFERENCES `tbpublicacao` (`codPublicacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codUsers_2fk` FOREIGN KEY (`codUsers`) REFERENCES `tbusers` (`codUsers`);

--
-- Limitadores para a tabela `tbhistorico`
--
ALTER TABLE `tbhistorico`
  ADD CONSTRAINT `codPublicacao_3fk` FOREIGN KEY (`codPublicacao`) REFERENCES `tbpublicacao` (`codPublicacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codUsers_3fk` FOREIGN KEY (`codUsuario`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbinstituicao`
--
ALTER TABLE `tbinstituicao`
  ADD CONSTRAINT `codFoneInstituicao_fk` FOREIGN KEY (`codFoneInstituicao`) REFERENCES `tbfoneinstituicao` (`codFoneInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codLoginInstituicao_fk` FOREIGN KEY (`codLoginInstituicao`) REFERENCES `tblogininstituicao` (`codLoginInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codNivel_fk` FOREIGN KEY (`codNivel`) REFERENCES `tbnivel` (`codNivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbpendencias`
--
ALTER TABLE `tbpendencias`
  ADD CONSTRAINT `codAluno_fk` FOREIGN KEY (`codAluno`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codDoador_fk` FOREIGN KEY (`codDoador`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbpublicacaoinstitu`
--
ALTER TABLE `tbpublicacaoinstitu`
  ADD CONSTRAINT `codInstituicao_fk` FOREIGN KEY (`codInstituicao`) REFERENCES `tbinstituicao` (`codInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codPublicacao_4fk	` FOREIGN KEY (`codPublicacao`) REFERENCES `tbpublicacao` (`codPublicacao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbpublicacaousuario`
--
ALTER TABLE `tbpublicacaousuario`
  ADD CONSTRAINT `codPublicacao_5fk` FOREIGN KEY (`codPublicacao`) REFERENCES `tbpublicacao` (`codPublicacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codUsers_4fk` FOREIGN KEY (`codUsuario`) REFERENCES `tbusers` (`codUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbusers`
--
ALTER TABLE `tbusers`
  ADD CONSTRAINT `codEscolaridade_fk` FOREIGN KEY (`codEscolaridade`) REFERENCES `tbescolaridade` (`codEscolaridade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codInstituicao_2fk` FOREIGN KEY (`codInstituicao`) REFERENCES `tbinstituicao` (`codInstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codNivel_2fk` FOREIGN KEY (`codNivel`) REFERENCES `tbnivel` (`codNivel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `codUsers_5fk` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
