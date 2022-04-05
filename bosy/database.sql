create database busy;
CREATE TABLE Firmaer
(
  ID    int   NOT NULL primary key auto_increment,
  Navn  varchar(50) NOT NULL,
  Orgnr varchar(50) NOT  NULL    ,
  Adresse varchar(50) NOT NULL    
);

CREATE TABLE Personer
(
  ID        INT     NOT NULL primary key auto_increment,
  Fornavn   VARCHAR(50) NOT NULL,
  Etternavn VARCHAR(50) NOT NULL,
  Nummer    VARCHAR(50) NOT NULL,
  FirmaID   INT     NOT NULL
);