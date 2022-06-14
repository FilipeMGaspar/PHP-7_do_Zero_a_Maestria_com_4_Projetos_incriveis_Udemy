SELECT * FROM mysql.user;

CREATE USER 'usuario'@'localhost' IDENTIFIED BY '123' GRANT ALL PRIVILEGES ON *.* 'usuario'@'localhost';
FLUSH PRIVILEGES;