-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

-- Tabela de Grupos
CREATE TABLE Grupo (
codGrupo int(10) PRIMARY KEY AUTO_INCREMENT,
tituloTrabalho varchar(100),
orientador varchar(50),
areaPesquisa varchar(50),
alunoA varchar(100),
alunoB varchar(100),
alunoC varchar(100),
alunoD varchar(100)
);

-- Tabela de Professores
CREATE TABLE Professor (
codProfessor int(10) PRIMARY KEY AUTO_INCREMENT,
nome varchar(100),
titulacao varchar(15)
);

-- Tabela de Alunos
CREATE TABLE Aluno (
ra char(13) PRIMARY KEY,
codTrabalho int(10),
codGrupo int(10),
nome varchar(100),
curso varchar(50),
email varchar(70)
);

-- Tabela de Telefones
CREATE TABLE Telefone (
codTelefone int(10) PRIMARY KEY AUTO_INCREMENT,
numero varchar(14),
ra char(13),
tipo varchar(10),
FOREIGN KEY(ra) REFERENCES Aluno (ra)
);

-- Tabela de Trabalhos
CREATE TABLE Trabalho (
codTrabalho int(10) PRIMARY KEY AUTO_INCREMENT,
codGrupo int(10),
convidado1 varchar(100),
convidado2 varchar(100),
diaApresentacao varchar(50),
horario varchar(50),
sala varchar(5),
FOREIGN KEY(codGrupo) REFERENCES Grupo (codGrupo)
);

-- Tabela de Usuarios
-- Usuário padrão: Admin
-- Senha: AdminAdmin
CREATE TABLE usuario (
codUsuario int(10) PRIMARY KEY AUTO_INCREMENT,
nome varchar(30),
senha varchar(30),
);

-- Adicionando o usuário Admin
INSERT INTO usuario (nome, senha) VALUES ('Admin', 'AdminAdmin');
