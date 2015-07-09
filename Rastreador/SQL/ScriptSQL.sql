-- Geração de Modelo físico
-- Rastreador - SQL -> MySQL.

CREATE TABLE Tecnico (
Matricula text(60),
Disponivel text(10),
Nome_tecnico text(600),
Id_tecnico int(5) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (Id_tecnico)
);

CREATE TABLE Loja (
Nome_Loja text(800),
Id_loja int(5) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (Id_loja)
);

CREATE TABLE OS (
Status text(100),
Id_OS int(5) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (Id_OS)
);

CREATE TABLE Instalacao (
Id_instalacao int(5) unsigned NOT NULL AUTO_INCREMENT,
Data text(30),
Hora text(30),
Endereço text(900),
Id_cliente int(5),
Id_OS int(5),
Placa text(100),
Id_tecnico int(5),
Id_usuario int(5),
PRIMARY KEY (Id_instalacao)/*,
FOREIGN KEY(Id_OS) REFERENCES OS (Id_OS),
FOREIGN KEY(Id_tecnico) REFERENCES Tecnico (Id_tecnico)*/
);

CREATE TABLE Veiculo (
Id_Veiculo int(5) unsigned NOT NULL AUTO_INCREMENT,
Modelo text(800),
Placa text(60),
PRIMARY KEY (Id_Veiculo)
);

CREATE TABLE Planos (
Id int(5) unsigned NOT NULL AUTO_INCREMENT,
Tipo text(800),
Id_instalacao int(5),
PRIMARY KEY (Id)/*,
FOREIGN KEY(Id_instalacao) REFERENCES Instalacao (Id_instalacao)*/
);

CREATE TABLE Usuario (
Senha text(800),
Tipo text(800),
Login text(800),
Id_usuario int(5) unsigned NOT NULL AUTO_INCREMENT,
Nome text(900),
Id_loja int(5),
PRIMARY KEY (Id_usuario)/*,
FOREIGN KEY(Id_loja) REFERENCES Loja (Id_loja)*/
);

CREATE TABLE Cliente (
Endereco text(900),
RG text(30),
Id_cliente int(5) unsigned NOT NULL AUTO_INCREMENT,
Cpf text(14),
Nome_cliente text(900),
PRIMARY KEY (Id_cliente)
);

CREATE TABLE Analisa (
Situacao text(900),
Id_analise int(5) unsigned NOT NULL AUTO_INCREMENT,
Id_cliente int(5),
Id_usuario int(5),
PRIMARY KEY (Id_analise)/*,
FOREIGN KEY(Id_cliente) REFERENCES Cliente (Id_cliente)/*falha: chave estrangeira*/
);
/*
ALTER TABLE Instalacao ADD CONSTRAINT Id_cliente  FOREIGN KEY (Id_cliente) REFERENCES Cliente ;
ALTER TABLE Instalacao ADD CONSTRAINT Id_Veiculo  FOREIGN KEY (Id_Veiculo) REFERENCES Veiculo ;
ALTER TABLE Instalacao ADD CONSTRAINT Id_usuario  FOREIGN KEY (Id_usuario) REFERENCES Usuario ;

*/






