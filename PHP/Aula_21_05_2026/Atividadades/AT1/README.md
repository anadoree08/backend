-- Criação do banco de dados
CREATE DATABASE empresa;

-- Conexão com o banco
\c empresa

-- Criação da tabela
CREATE TABLE funcionarios (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    cargo VARCHAR(50),
    salario NUMERIC(10,2)
);

-- Inserção de registros
INSERT INTO funcionarios (nome, cargo, salario)
VALUES
('Ana', 'Gerente', 5000.00),
('Carlos', 'Programador', 3500.00);

-- Consulta dos dados
SELECT * FROM funcionarios;

-- Atualização de dados
UPDATE funcionarios
SET salario = 4000.00
WHERE id = 2;

-- Exclusão de dados
DELETE FROM funcionarios
WHERE id = 1;