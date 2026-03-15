-- Script de creación de la base de datos bdviajefeliz para PostgreSQL
-- Ejecutar como superusuario (postgres) con: psql -U postgres -f bdviajefeliz_postgresql.sql

CREATE DATABASE bdviajefeliz;

\c bdviajefeliz

CREATE TABLE empresa (
    idempresa   BIGSERIAL PRIMARY KEY,
    enombre     VARCHAR(150),
    edireccion  VARCHAR(150)
);

CREATE TABLE responsable (
    rnumeroempleado BIGSERIAL PRIMARY KEY,
    rnumerolicencia BIGINT,
    rnombre         VARCHAR(150),
    rapellido       VARCHAR(150)
);

CREATE TABLE viaje (
    idviaje             BIGSERIAL PRIMARY KEY,
    vdestino            VARCHAR(150),
    vcantmaxpasajeros   INT,
    idempresa           BIGINT,
    rnumeroempleado     BIGINT,
    vimporte            FLOAT,
    vrecaudacion        FLOAT,
    FOREIGN KEY (idempresa) REFERENCES empresa(idempresa)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (rnumeroempleado) REFERENCES responsable(rnumeroempleado)
        ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE pasajero (
    pdocumento      BIGINT PRIMARY KEY,
    pnombre         VARCHAR(150),
    papellido       VARCHAR(150),
    ptelefono       INT,
    idviaje         BIGINT,
    pnumeroasiento  VARCHAR(15),
    pnumeroticket   BIGINT,
    FOREIGN KEY (idviaje) REFERENCES viaje(idviaje)
);
