-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25-Nov-2018 às 13:38
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ra` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codGrupo` int(11) NOT NULL,
  `codTrabalho` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curso` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ra`, `codGrupo`, `codTrabalho`, `nome`, `curso`, `email`) VALUES
('0040481612045', 0, 0, 'Rafaela Miranda', 'Análise e Desenvolvimento de Sistemas', 'rafsbrug@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `codGrupo` int(10) NOT NULL,
  `tituloTrabalho` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientador` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areaPesquisa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alunoA` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alunoB` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alunoC` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alunoD` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`codGrupo`, `tituloTrabalho`, `orientador`, `areaPesquisa`, `alunoA`, `alunoB`, `alunoC`, `alunoD`) VALUES
(3, 'Desenvolvendo um chatbot amigavél ', 'Agnaldo Pescelaro Pezzo', 'I.A', 'Rafaela Miranda', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `acao` varchar(50) NOT NULL,
  `creat_at` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `tabela` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `acao`, `creat_at`, `user`, `tabela`) VALUES
(1, 'select', '25-11-2018 10:24:40', 'Rafaela Miranda', 'trabalho'),
(2, 'delete', '25-11-2018 10:24:45', 'Rafaela Miranda', 'trabalho'),
(3, 'delete', '25-11-2018 10:24:45', 'Rafaela Miranda', 'trabalho'),
(4, 'select', '25-11-2018 10:24:46', 'Rafaela Miranda', 'trabalho'),
(5, 'select', '25-11-2018 10:25:04', 'Valdirene Miranda', 'trabalho'),
(6, 'select', '25-11-2018 10:25:06', 'Valdirene Miranda', 'grupo'),
(7, 'select', '25-11-2018 10:25:15', 'Victor Marcorin', 'trabalho'),
(8, 'select', '25-11-2018 10:25:19', 'Victor Marcorin', 'telefone'),
(9, 'select', '25-11-2018 10:25:53', 'Valdirene Miranda', 'trabalho'),
(10, 'select', '25-11-2018 10:25:56', 'Valdirene Miranda', 'grupo'),
(11, 'select', '25-11-2018 10:25:56', 'Valdirene Miranda', 'professor'),
(12, 'select', '25-11-2018 10:25:56', 'Valdirene Miranda', 'professor'),
(13, 'insert', '25-11-2018 10:26:27', 'Valdirene Miranda', 'trabalho'),
(14, 'select', '25-11-2018 10:26:29', 'Valdirene Miranda', 'trabalho'),
(15, 'select', '25-11-2018 10:26:44', 'Rafaela Miranda', 'trabalho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `codProfessor` int(10) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulacao` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`codProfessor`, `nome`, `titulacao`) VALUES
(1, 'Acácia de Fátima Ventura', 'doutor'),
(2, 'Adalberto Zorzo', 'mestre'),
(3, 'Agnaldo Pescelaro Pezzo', 'mestre'),
(4, 'Alberto Martins Junior', 'mestre'),
(5, 'Alex Paulo Siqueira Silva', 'mestre'),
(6, 'Aloisio Daniel Vendemiatti', 'mestre'),
(7, 'Amarildo Bertassi', 'mestre'),
(8, 'Ana Karina Giusti Mantovani', 'especialista'),
(9, 'Ana Lúcia Spigolon', 'graduado'),
(10, 'André de Lima', 'doutor'),
(11, 'Andreia Aparecida dos Santos', 'especialista'),
(12, 'Antonio Alfredo Lacerda', 'especialista'),
(13, 'Benedito Aparecido Cruz', 'mestre'),
(14, 'Benedito Luciano Antunes de França', 'mestre'),
(15, 'Carlos Augusto Amaral Moreira', 'doutor'),
(16, 'Carlos Frederico Faé', 'graduado'),
(17, 'Cleberson Eugenio Forte', 'doutor'),
(18, 'Clerio de Vietro', 'especialista'),
(19, 'Clerivaldo Jose Roccia', 'mestre'),
(20, 'Cristiane do Carmo Schmidt Bueno de Moraes', 'mestre'),
(21, 'Daives Arakem Bergamasco', 'mestre'),
(22, 'Daniela Dal Fabbro Amorim', 'mestre'),
(23, 'Daniela Maria Feltrin Marchini', 'mestre'),
(24, 'Daniele Junqueira Frosoni', 'especialista'),
(25, 'Diógenes de Oliveira', 'mestre'),
(26, 'Doralice de Souza Luro Balan', 'doutor'),
(27, 'Douglas Hamilton de Oliveira', 'mestre'),
(28, 'Edison Valentim Monteiro', 'mestre'),
(29, 'Edson Roberto Gaseta', 'especialista'),
(30, 'Eduardo Antonio Vicentini', 'mestre'),
(31, 'Elton Rafael Mauricio da Silva Pereira', 'mestre'),
(32, 'Enrique Viana Arce', 'doutor'),
(33, 'Evandro Santaclara', 'especialista'),
(34, 'Fabio Pereira de Queiroz', 'graduado'),
(35, 'Francesco Artur Perroti', 'mestre'),
(36, 'Francisco Carlos Mancin', 'mestre'),
(37, 'Gilberto Francisco de Oliveira', 'mestre'),
(38, 'Gustavo Carvalho Gomes de Abreu', 'especialista'),
(39, 'Henri Alves de Godoy', 'mestre'),
(40, 'Humberto Celeste Innarelli', 'doutor'),
(41, 'Isac Martins de Oliveira', 'mestre'),
(42, 'Ivan Menerval da Silva', 'mestre'),
(43, 'Jaime Cazuhiro Ossada', 'doutor'),
(44, 'Jeferson Wilian de Godoy Stenico', 'doutor'),
(45, 'João Batista Giordano', 'doutor'),
(46, 'Joclenes Emilio Diehl', 'especialista'),
(47, 'Jonas Bôde', 'especialista'),
(48, 'José Alberto Florentino Rodrigues Filho', 'doutor'),
(49, 'José Antonio Della Negra', 'graduado'),
(50, 'José Eduardo Rossilho e Figueiredo', 'mestre'),
(51, 'José Fornazier C. Sampaio', 'mestre'),
(52, 'José Luiz Rondelli', 'graduado'),
(53, 'José Luiz Zem', 'doutor'),
(54, 'José Mário Balan', 'especialista'),
(55, 'José Mario Frasson Scafi', 'mestre'),
(56, 'José Martins Junior', 'doutor'),
(57, 'José Renato de Siqueira Lopes', 'especialista'),
(58, 'José William Pinto Gomes', 'especialista'),
(59, 'Julio Cesar de Lemos', 'mestre'),
(60, 'Katia Manoela Siqueira', 'doutor'),
(61, 'Kellen Manoela Siqueira', 'doutor'),
(62, 'Kleber de Oliveira Andrade', 'mestre'),
(63, 'Leonardo Franchini Vinhola', 'especialista'),
(64, 'Lilian de Souza', 'mestre'),
(65, 'Liliana Aparecida de Oliveira Scafi Vulcano', 'especialista'),
(66, 'Luciana Ramos de Souza', 'mestre'),
(67, 'Luciene Maria Garbuio Castello Branco', 'mestre'),
(68, 'Luiz Carlos Caetano', 'especialista'),
(69, 'Magaly Pitolli', 'mestre'),
(70, 'Marcelo Cândido de Azevedo', 'mestre'),
(71, 'Marcelo Passaro Fontana', 'especialista'),
(72, 'Márcio Roberto Baldo Taglietta', 'especialista'),
(73, 'Marco Anselmo de Godoi Prezoto', 'mestre'),
(74, 'Marcos de Carvalho Dias', 'doutor'),
(75, 'Marcos Vinicius Lahr Giraldi', 'especialista'),
(76, 'Maria Adelina Pereira', 'mestre'),
(77, 'Maria Alice Ximenes Cruz', 'doutor'),
(78, 'Maria Alice Ximenes Cruz', 'doutor'),
(79, 'Maria Camila Bedin', 'doutor'),
(80, 'Maria Cristina Aranda', 'doutor'),
(81, 'Maria Elizete Luz Saes', 'mestre'),
(82, 'Mariana Godoy Vazquez Miano', 'doutor'),
(83, 'Maricê Léo Sartori Balducci', 'mestre'),
(84, 'Mauro Roberto Schluter', 'mestre'),
(85, 'Miguel Ronaldo Galhani', 'especialista'),
(86, 'Murilo Fujita', 'mestre'),
(87, 'Nancy de Palma Moretti', 'doutor'),
(88, 'Nelson Maniasso', 'doutor'),
(89, 'Odilon Delmont Filho', 'doutor'),
(90, 'Osvaldo Succi Junior', 'mestre'),
(91, 'Paula da Fonte Sanches', 'mestre'),
(92, 'Pedro Domingos Antoniolli', 'doutor'),
(93, 'Rafael Ferreira Alves', 'doutor'),
(94, 'Renan Mercuri Pinto', 'mestre'),
(95, 'Renato Kraide Soffner', 'doutor'),
(96, 'Renato Willian M. de Oliveira', 'mestre'),
(97, 'Reydner Furtado Garbero', 'mestre'),
(98, 'Ricardo Bertoni Pompeu', 'mestre'),
(99, 'Rogério Nunes de Freitas', 'especialista'),
(100, 'Rosilma Mirtes dos Santos', 'mestre'),
(101, 'Rossano Pablo Pinto', 'mestre'),
(102, 'Samuel Tanaami', 'mestre'),
(103, 'Sanete Irani de Andrade', 'mestre'),
(104, 'Sérgio Luiz Cabrini', 'mestre'),
(105, 'Silvia Aparecida José e Silva', 'mestre'),
(106, 'Thais Godoy Vazquez Macetti', 'doutor'),
(107, 'Valdecir José Tralli', 'mestre'),
(108, 'Valmir Cafeli', 'mestre'),
(109, 'Wagner Siqueira Cavalcante', 'mestre'),
(110, 'Wilson Ricardo Antoniassi de Almeida', 'doutor'),
(111, 'Wladimir da Costa', 'mestre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `codTelefone` int(10) NOT NULL,
  `numero` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra` char(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`codTelefone`, `numero`, `ra`, `tipo`) VALUES
(3, '(19)98350-2490', '0040481612045', 'fixo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalho`
--

CREATE TABLE `trabalho` (
  `codTrabalho` int(10) NOT NULL,
  `codGrupo` int(10) DEFAULT NULL,
  `convidado1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `convidado2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diaApresentacao` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sala` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `trabalho`
--

INSERT INTO `trabalho` (`codTrabalho`, `codGrupo`, `convidado1`, `convidado2`, `diaApresentacao`, `horario`, `sala`) VALUES
(3, 3, 'Francisco Carlos Mancin', 'Antonio Alfredo Lacerda', '04/12/2018', '09h30', 'C2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codUsuario` int(10) NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `nome`, `user`, `email`, `senha`, `status`, `nivel`) VALUES
(17, 'Rafaela Miranda', 'admin', 'rafsbrug@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(18, 'Valdirene Miranda', 'val', 'teste@teste.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 1, 2),
(19, 'Victor Marcorin', 'victor', 'victor.am.ccomp@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioNivel`
--

CREATE TABLE `usuarioNivel` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarioNivel`
--

INSERT INTO `usuarioNivel` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Secretaria'),
(3, 'Professor'),
(4, 'Indefinido');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ra`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codGrupo`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codProfessor`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`codTelefone`),
  ADD KEY `ra` (`ra`);

--
-- Indexes for table `trabalho`
--
ALTER TABLE `trabalho`
  ADD PRIMARY KEY (`codTrabalho`),
  ADD KEY `codGrupo` (`codGrupo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`),
  ADD KEY `usuarioNivel_fk` (`nivel`);

--
-- Indexes for table `usuarioNivel`
--
ALTER TABLE `usuarioNivel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `codGrupo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `codProfessor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `codTelefone` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trabalho`
--
ALTER TABLE `trabalho`
  MODIFY `codTrabalho` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `usuarioNivel`
--
ALTER TABLE `usuarioNivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`ra`) REFERENCES `aluno` (`ra`);

--
-- Limitadores para a tabela `trabalho`
--
ALTER TABLE `trabalho`
  ADD CONSTRAINT `trabalho_ibfk_1` FOREIGN KEY (`codGrupo`) REFERENCES `grupo` (`codGrupo`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_nivelUsuario` FOREIGN KEY (`nivel`) REFERENCES `usuarioNivel` (`id`),
  ADD CONSTRAINT `usuarioNivel_fk` FOREIGN KEY (`nivel`) REFERENCES `usuarioNivel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
