 DROP DATABASE IF EXISTS fatectoolsbanco;
 
 CREATE DATABASE fatectoolsbanco;

USE fatectoolsbanco;

CREATE TABLE disciplinas (
    id_disciplina AUTO_INCREMENT PRIMARY KEY ,
    nome VARCHAR(100)
);

CREATE TABLE cursos (
    id_curso INT AUTO_INCREMENT PRIMARY KEY ,
    nome VARCHAR(100)
);


CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY ,
    nome_usuario VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100)
    
);

CREATE TABLE categoria_usuarios (
    id_cat_usuario INT AUTO_INCREMENT PRIMARY KEY 
    descricao VARCHAR(100)
);

CREATE TABLE categorias_ferramentas (
    id_cat_ferramenta INT AUTO_INCREMENT PRIMARY KEY ,
    descricao VARCHAR(100)
);

CREATE TABLE ferramentas (
    id_ferramenta INT AUTO_INCREMENT PRIMARY KEY ,
    link_download VARCHAR(100),
    nome VARCHAR(100),
    descricao TEXT,
    situacao ENUM('Ativa', 'Inativa'),
    id_cat_ferramenta INT,
    FOREIGN KEY (id_cat_ferramenta) REFERENCES categorias_ferramentas (id_cat_ferramenta)
);

CREATE TABLE disciplina_curso (
    id_disciplina INT AUTO_INCREMENT PRIMARY KEY , 
    id_curso INT AUTO_INCREMENT PRIMARY KEY ,
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas (id_disciplina),
    FOREIGN KEY (id_curso) REFERENCES cursos (id_curso)
);

CREATE TABLE ferramenta_disciplina (
    id_ferramenta INT AUTO_INCREMENT PRIMARY KEY ,
    id_disciplina INT AUTO_INCREMENT PRIMARY KEY ,
    FOREIGN KEY (id_ferramenta) REFERENCES ferramentas (id_ferramenta),
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas (id_disciplina)
);

CREATE TABLE ferramenta_curso ( 
    id_ferramenta INT AUTO_INCREMENT PRIMARY KEY ,
    id_curso INT AUTO_INCREMENT PRIMARY KEY ,
    FOREIGN KEY (id_ferramenta) REFERENCES ferramentas (id_ferramenta),
    FOREIGN KEY (id_curso) REFERENCES cursos (id_curso)
);
