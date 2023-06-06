DROP DATABASE IF EXISTS lista5;
CREATE DATABASE lista5;
USE lista5;

CREATE TABLE AGENDA(
    id_agenda int not null auto_increment,
    apelido varchar(50) not null,
    endereco varchar(40) not null,
    bairro varchar(70) not null,
    cidade varchar(50) not null,
    estado varchar(02) not null,
    telefone varchar(15) not null,
    celular varchar(15) not null,
    email varchar(70) not null,
    dt_cadastro date,
    nome_foto varchar(100) null,
    primary key (id_agenda)
);