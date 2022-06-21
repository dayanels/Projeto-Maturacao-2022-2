create database mtr;
use mtr;

CREATE TABLE discente (
    matricula VARCHAR(250) PRIMARY KEY,
    nome VARCHAR(250),
    senha VARCHAR(250),
    fk_Curso INTEGER,
    ativo BOOLEAN
);

CREATE TABLE docente (
    nome VARCHAR(250),
    senha VARCHAR(250),
    matricula VARCHAR(250) PRIMARY KEY,
    ativo BOOLEAN
);

CREATE TABLE disciplina (
    nome VARCHAR(250),
    cod_Disciplina INTEGER PRIMARY KEY,
    periodo INTEGER,
    data_de_Encerramento DATE,
    ativo BOOLEAN,
    fk_Docente VARCHAR(250)
);

CREATE TABLE monitor (
    fk_Discente VARCHAR(250) PRIMARY KEY,
    fk_Docente VARCHAR(250),
    fk_Disciplina INTEGER
);

CREATE TABLE super_user (
    login VARCHAR(250) PRIMARY KEY,
    senha VARCHAR(250)
);

CREATE TABLE agendamento (
    horario DATE,
    cod_Agendamento INTEGER PRIMARY KEY,
    fk_Local INTEGER,
    fk_Historico INTEGER,
    fk_Discente VARCHAR(250),
    fk_Docente VARCHAR(250),
    fk_Disciplina INTEGER,
    fk_Monitor VARCHAR(250)
);

CREATE TABLE local (
    departamento VARCHAR(250),
    sala VARCHAR(250),
    cod_Local INTEGER PRIMARY KEY
);

CREATE TABLE curso (
    cod_Curso INTEGER PRIMARY KEY,
    ativo BOOLEAN,
    nome VARCHAR(250)
);

CREATE TABLE historico (
    presenca BOOLEAN,
    cod_Historico INTEGER PRIMARY KEY
);

CREATE TABLE matriculas (
    fk_Disciplina INTEGER,
    fk_Discente VARCHAR(250)
);

CREATE TABLE grade (
    fk_Disciplina INTEGER,
    fk_Curso INTEGER
);
 
ALTER TABLE discente ADD CONSTRAINT FK_Discente_2
    FOREIGN KEY (fk_Curso)
    REFERENCES curso (cod_Curso)
    ON DELETE RESTRICT;
 
ALTER TABLE disciplina ADD CONSTRAINT FK_Disciplina_2
    FOREIGN KEY (fk_Docente)
    REFERENCES docente (matricula)
    ON DELETE RESTRICT;
 
ALTER TABLE monitor ADD CONSTRAINT FK_Monitor_2
    FOREIGN KEY (fk_Discente)
    REFERENCES discente (matricula)
    ON DELETE CASCADE;
 
ALTER TABLE monitor ADD CONSTRAINT FK_Monitor_3
    FOREIGN KEY (fk_Docente)
    REFERENCES docente (matricula)
    ON DELETE CASCADE;
 
ALTER TABLE monitor ADD CONSTRAINT FK_Monitor_4
    FOREIGN KEY (fk_Disciplina)
    REFERENCES disciplina (cod_Disciplina)
    ON DELETE CASCADE;
 
ALTER TABLE agendamento ADD CONSTRAINT FK_Agendamento_2
    FOREIGN KEY (fk_Local)
    REFERENCES local (cod_Local)
    ON DELETE CASCADE;
 
ALTER TABLE agendamento ADD CONSTRAINT FK_Agendamento_3
    FOREIGN KEY (fk_Historico)
    REFERENCES historico (cod_Historico)
    ON DELETE CASCADE;
 
ALTER TABLE agendamento ADD CONSTRAINT FK_Agendamento_4
    FOREIGN KEY (fk_Discente)
    REFERENCES discente (matricula);
 
ALTER TABLE agendamento ADD CONSTRAINT FK_Agendamento_5
    FOREIGN KEY (fk_Docente)
    REFERENCES docente (matricula);
 
ALTER TABLE agendamento ADD CONSTRAINT FK_Agendamento_6
    FOREIGN KEY (fk_Disciplina)
    REFERENCES disciplina (cod_Disciplina);
 
ALTER TABLE agendamento ADD CONSTRAINT FK_Agendamento_7
    FOREIGN KEY (fk_Monitor)
    REFERENCES monitor (fk_Discente);
 
ALTER TABLE matriculas ADD CONSTRAINT FK_matricula_1
    FOREIGN KEY (fk_Disciplina)
    REFERENCES disciplina (cod_Disciplina)
    ON DELETE RESTRICT;
 
ALTER TABLE matriculas ADD CONSTRAINT FK_matricula_2
    FOREIGN KEY (fk_Discente)
    REFERENCES discente (matricula)
    ON DELETE SET NULL;
 
ALTER TABLE grade ADD CONSTRAINT FK_Grade_1
    FOREIGN KEY (fk_Disciplina)
    REFERENCES disciplina (cod_Disciplina)
    ON DELETE SET NULL;
 
ALTER TABLE grade ADD CONSTRAINT FK_Grade_2
    FOREIGN KEY (fk_Curso)
    REFERENCES curso (cod_Curso)
    ON DELETE SET NULL;