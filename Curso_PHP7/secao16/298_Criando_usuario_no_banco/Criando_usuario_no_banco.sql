SELECT * FROM mysql.user;

CREATE USER 'filipe'@'localhost' IDENTIFIED BY 'teste123';

GRANT ALL PRIVILEGES ON *.* 'filipe'@'localhost';

FLUSH PRIVILEGES;