
CREATE DATABASE farmacia90;

USE farmacia90;

CREATE TABLE medicamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
    );
INSERT INTO medicamentos (nome, preco, quantidade)
VALUES 
('Paracetamol', 5.50, 100),
('Ibuprofeno', 8.75, 50),
('Amoxicilina', 12.30, 200),
('Dipirona', 3.45, 150);

INSERT INTO medicamentos (nome, preco, quantidade, categoria, data_validade)
VALUES 
('Paracetamol', 5.50, 100, 'Analgésico', '2024-12-31'),
('Ibuprofeno', 8.75, 50, 'Anti-inflamatório', '2025-01-15'),
('Amoxicilina', 12.30, 200, 'Antibiótico', '2024-11-20'),
('Dipirona', 3.45, 150, 'Analgésico', '2024-10-30');



select *from medicamentos;


drop TABLE medicamentos;
CREATE DATABASE farmacia90;

USE farmacia90;

CREATE TABLE medicamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
    );
INSERT INTO medicamentos (nome, preco, quantidade)
VALUES 
('Paracetamol', 5.50, 100),
('Ibuprofeno', 8.75, 50),
('Amoxicilina', 12.30, 200),
('Dipirona', 3.45, 150);

INSERT INTO medicamentos (nome, preco, quantidade, categoria, data_validade)
VALUES 
('Paracetamol', 5.50, 100, 'Analgésico', '2024-12-31'),
('Ibuprofeno', 8.75, 50, 'Anti-inflamatório', '2025-01-15'),
('Amoxicilina', 12.30, 200, 'Antibiótico', '2024-11-20'),
('Dipirona', 3.45, 150, 'Analgésico', '2024-10-30');



select *from medicamentos;


drop TABLE medicamentos;