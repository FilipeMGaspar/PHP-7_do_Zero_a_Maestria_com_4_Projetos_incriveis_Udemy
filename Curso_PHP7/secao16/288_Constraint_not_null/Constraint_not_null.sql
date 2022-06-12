CREATE TABLE notnull (
	nome VARCHAR(100) NOT NULL,
	idade INT
);

INSERT INTO notnull (nome) VALUES ("Filipe");

INSERT INTO notnull (nome, idade) VALUES ("Maria", 12);

INSERT INTO notnull (idade) VALUES (37);

SET @@GLOBAL.SQL_MODE = 'STRICT_ALL_TABLES';