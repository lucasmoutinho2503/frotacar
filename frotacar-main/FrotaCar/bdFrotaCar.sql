CREATE DATABASE IF NOT EXISTS frotacar;

USE frotacar;

CREATE TABLE IF NOT EXISTS viatura(
idViatura BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
placa VARCHAR(10) NOT NULL,
placaDiscreta VARCHAR(10),
marca VARCHAR(30) NOT NULL,
modelo VARCHAR(30) NOT NULL,
cor VARCHAR(30) NOT NULL,
ano TINYINT(4) NOT NULL,
renavam INT(30) NOT NULL,
tipo VARCHAR(30) NOT NULL,
setor VARCHAR(50) NOT NULL,
subSetor VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS diarioDeBordoRetirada(
idDiarioRetirada BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nome VARCHAR(100) NOT NULL,
placa VARCHAR(10) NOT NULL,
modelo VARCHAR(30) NOT NULL,
dataRetirada DATE NOT NULL,
horaRetirada TIME NOT NULL,
localRetirada VARCHAR(50) NOT NULL,
destino VARCHAR(50) NOT NULL,
dataEntregaEstimada DATE NOT NULL,
horaEntregaEstimada DATE NOT NULL);

CREATE TABLE IF NOT EXISTS diarioDeBordoEntrega(
idDiarioEntrega BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
placa VARCHAR(10) NOT NULL,
dataEntrega DATE NOT NULL,
horaEntrega TIME NOT NULL,
localEntrega varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS motorista(
idMotorista BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nome VARCHAR(100) NOT NULL,
cpf INT(11) NOT NULL,
idFunc INT(11) NOT NULL,
setor VARCHAR(50) NOT NULL,
numeroCnh INT(20) NOT NULL,
validadeCnh DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS admGestao(
idAdmGestao BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nome VARCHAR(100) NOT NULL,
cpf INT(11) NOT NULL,
idFunc INT(11) NOT NULL,
funcao VARCHAR(50) NOT NULL);