-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

-- Tabela de Grupos
CREATE TABLE Grupo (
codGrupo int(10) PRIMARY KEY,
tituloTrabalho varchar(100),
alunoA varchar(100),
alunoB varchar(100),
alunoC varchar(100),
alunoD varchar(100)
);

-- Tabela de Professores
CREATE TABLE Professor (
codProfessor int(10) PRIMARY KEY,
nome varchar(100),
titulacao varchar(15)
);

-- Tabela de Alunos
CREATE TABLE Aluno (
ra char(13) PRIMARY KEY,
codGrupo int(10),
codTrabalho int(10),
tituloTrabalho varchar(100),
nome varchar(100),
orientador varchar(50),
areaPesquisa varchar(50),
curso varchar(50),
email varchar(70)
);

-- Tabela de Telefones
CREATE TABLE Telefone (
numero varchar(14) PRIMARY KEY,
ra char(13),
tipo varchar(10),
FOREIGN KEY(ra) REFERENCES Aluno (ra)
);

-- Tabela de Trabalhos
CREATE TABLE Trabalho (
codTrabalho int(10) PRIMARY KEY,
codProfessor int(10),
orientador varchar(100),
convidado1 varchar(100),
convidado2 varchar(100),
autor varchar(100),
titulo varchar(100),
cursoAutor varchar(50),
diaApresentacao date,
horario time,
sala varchar(5),
eGrupo tinyint(1),
FOREIGN KEY(codProfessor) REFERENCES Professor (codProfessor)
);

-- Tabela de Usuarios
-- Usuário padrão: Admin
-- Senha: AdminAdmin
CREATE TABLE usuario (
codUsuario int(10) PRIMARY KEY AUTO_INCREMENT,
nome varchar(30),
senha varchar(30),
ultimoAcesso timestamp
);

-- Adicionando o usuário Admin
INSERT INTO usuario (nome, senha) VALUES ('Admin', 'AdminAdmin');
