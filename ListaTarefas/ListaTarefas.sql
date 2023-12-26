CREATE DATABASE IF NOT EXISTS listatarefas;
USE listatarefas;

CREATE TABLE listatarefas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nomeTarefa VARCHAR(100),
    status ENUM('Atribuída', 'Andamento', 'Concluída') NOT NULL DEFAULT 'Atribuída'
);
