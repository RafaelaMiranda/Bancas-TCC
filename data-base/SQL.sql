-- Criar tabela Professor

CREATE TABLE professor (
    nome varchar(100),
    titulacao varchar(15),
    primary key(nome)
);

-- Inserir dados na tabela Professor

INSERT INTO professor (nome, titulacao) VALUES
('Antonio Alfredo Lacerda', 'Especialista'),
('Cristine do Carmo Schmidt Bueno de Moraes', 'Mestre'),
('Marcos de Carvalho Dias', 'Doutor');


-- Criar tabela Aluno

CREATE TABLE aluno(
    ra char(13) not null,
    nome varchar(100),
    curso varchar(50),
    tituloTrabalho varchar(100),
    areaPesquisa varchar(50),
    orientador varchar(50),
    email varchar(70),
    primary key(ra),
	foreign key(orientador) references professor(nome)
);

-- Inserir dados na tabela Aluno

INSERT INTO aluno (ra, nome, curso, tituloTrabalho, areaPesquisa, orientador, email) VALUES
('0040641311019', 'José Claudio Alvarez Junior', 'Gestão Empresarial', 'Criação de Conhecimento', 'Gestão do Conhecimento', 'Carlos Henrique Menezes Garcia', 'zeh.claudio@hotmail.com'),
('0040481522005', 'Rogério do Nascimento', 'Análise e Desenvolvimento de Sistema', 'Raciocínio lógico na educação fundamental', 'Educação', 'Ricardo Bertassi Pompeu', 'rognask@hotmail.com');

-- Criar tabela Telefone

CREATE TABLE telefone(
    ra char(13) not null,
    tipo varchar(10),
    numero varchar(14) not null,
    primary key(numero),
    foreign key(ra) references aluno(ra)
);

-- Inserir dados na tabela Telefone

INSERT INTO telefone (ra, tipo, numero) VALUES
('0040641311019', 'casa', '193396-0660'),
('0040481522005', 'casa', '193626-3714');

-- Criar tabela Grupo

CREATE TABLE grupo(
    codGrupo int AUTO_INCREMENT,
    tituloTrabalho varchar(100),
    alunoA varchar(100),
    alunoB varchar(100),
    alunoC varchar(100),
    alunoD varchar(100),
    PRIMARY KEY(codGrupo)
);

-- Inserir dados na tabela Grupo

INSERT INTO grupo (tituloTrabalho, alunoA, alunoB) VALUES
('Criação de Conhecimento', 'José Claudio Alvarez Junior', 'Rogério do Nascimento');

-- Criar tabela Trabalho

CREATE TABLE trabalho(
    autor varchar(100),
    titulo varchar(100),
    cursoAutor varchar(50),
    orientador varchar(100),
    convidado1 varchar(100),
    convidado2 varchar(100),
    diaApresentacao date,
    horario time,
    sala varchar(5),
    PRIMARY KEY(autor)
);

-- Inserir dados na tabela Trabalho

INSERT INTO trabalho (autor, titulo, cursoAutor, orientador, convidado1, convidado2, diaApresentacao, horario, sala) VALUES
('José Claudio Alvarez Junior', 'Criação de Conhecimento', 'Gestão Empresarial', 'Carlos Henrique Menezes Garcia', 'Anderson Lima Barbosa', 'Ricardo Bertassi Pompeu', '2015-11-28', '10:00:00', 'B07'),
('Rogério do Nascimento', 'Raciocínio lógico na educação fundamental', 'Análise e Desenvolvimento de Sistema', 'Ricardo Bertassi Pompeu', 'Antonio Alfredo Lacerda', 'Carlos Augusto Amaral Moreira', '2018-11-25', '15:00:00', 'C05');