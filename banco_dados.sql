CREATE DATABASE jornal;

USE jornal;

CREATE TABLE noticias (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    autor VARCHAR(255) NOT NULL,
    data DATE NOT NULL,
    PRIMARY KEY (id)
);