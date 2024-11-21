CREATE DATABASE fatectoolsbanco;

CREATE TABLE disciplinas (
    id_disciplina INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
);

CREATE TABLE cursos (
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
);

CREATE TABLE ferramentas (
    id_ferramenta INT PRIMARY KEY AUTO_INCREMENT,
    link_download VARCHAR(100),
    nome VARCHAR(100),
    descricao VARCHAR(100)
);

CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    senha VARCHAR(100),
    nome_completo VARCHAR(100),
    email VARCHAR(100),
    nome_usuario VARCHAR(100)
);

CREATE TABLE categoria_usuarios (
    id_cat_usuario INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100)
);

CREATE TABLE categorias_ferramentas (
    id_cat_ferramenta INT PRIMARY KEY,
    descricao VARCHAR(100),
    id_ferramenta INT,
    FOREIGN KEY (id_ferramenta) REFERENCES ferramentas (id_ferramenta)
);

CREATE TABLE disciplina_curso ( 
    id_disciplina INT,
    id_curso INT,
    PRIMARY KEY (id_disciplina, id_curso),
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas (id_disciplina),
    FOREIGN KEY (id_curso) REFERENCES cursos (id_curso)
);

CREATE TABLE ferramenta_disciplina (
    id_ferramenta INT,
    id_disciplina INT,
    PRIMARY KEY (id_ferramenta, id_disciplina),
    FOREIGN KEY (id_ferramenta) REFERENCES ferramentas (id_ferramenta),
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas (id_disciplina)
);

CREATE TABLE ferramenta_curso (
    id_ferramenta INT,
    id_curso INT,
    PRIMARY KEY (id_ferramenta, id_curso),
    FOREIGN KEY (id_ferramenta) REFERENCES ferramentas (id_ferramenta),
    FOREIGN KEY (id_curso) REFERENCES cursos (id_curso)
);
