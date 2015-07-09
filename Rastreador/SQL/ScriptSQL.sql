-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Técnico (
Matrícula Texto(1),
Disponível Texto(1),
Id_tecnico Texto(1) PRIMARY KEY,
Nome_tecnico Texto(1)
)

CREATE TABLE Loja (
Nome_Loja Texto(1),
Id_loja Texto(1) PRIMARY KEY
)

CREATE TABLE OS (
Status Texto(1),
Id_OS Texto(1) PRIMARY KEY
)

CREATE TABLE Instalação (
Id_instalacao Texto(1) PRIMARY KEY,
Data Texto(1),
Hora Texto(1),
Endereço Texto(1),
Id_cliente Texto(1),
Id_OS Texto(1),
Placa Texto(1),
Id_tecnico Texto(1),
Id_usuario Texto(1),
FOREIGN KEY(Id_OS) REFERENCES OS (Id_OS),
FOREIGN KEY(Id_tecnico) REFERENCES Técnico (Id_tecnico)
)

CREATE TABLE Veículo (
Modelo Texto(1),
Placa Texto(1) PRIMARY KEY
)

CREATE TABLE Planos (
Id Texto(1) PRIMARY KEY,
Tipo Texto(1),
Id_instalacao Texto(1),
FOREIGN KEY(Id_instalacao) REFERENCES Instalação (Id_instalacao)
)

CREATE TABLE Usuário (
Senha Texto(1),
Tipo Texto(1),
Login Texto(1),
Id_usuario Texto(1) PRIMARY KEY,
Nome Texto(1),
Id_loja Texto(1),
FOREIGN KEY(Id_loja) REFERENCES Loja (Id_loja)
)

CREATE TABLE Cliente (
Endereco Texto(1),
RG Texto(1),
Id_cliente Texto(1) PRIMARY KEY,
Cpf Texto(1),
Nome_cliente Texto(1)
)

CREATE TABLE Analisa (
Situacao Texto(1),
Id_analise Texto(1) PRIMARY KEY,
Id_cliente Texto(1),
Id_usuario Texto(1),
FOREIGN KEY(Id_cliente) REFERENCES Cliente (Id_cliente)/*falha: chave estrangeira*/
)

ALTER TABLE Instalação ADD FOREIGN KEY(Id_cliente) REFERENCES Cliente (Id_cliente)
ALTER TABLE Instalação ADD FOREIGN KEY(Placa) REFERENCES Veículo (Placa)
ALTER TABLE Instalação ADD FOREIGN KEY(Id_usuario) REFERENCES Usuário (Id_usuario)
