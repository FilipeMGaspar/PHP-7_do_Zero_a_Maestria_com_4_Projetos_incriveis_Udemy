ALTER TABLE carros ADD motor INT;

ALTER TABLE carros drop ano_fabrico;

ALTER TABLE carros MODIFY COLUMN descricao VARCHAR(500);