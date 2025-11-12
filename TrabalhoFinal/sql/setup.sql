-- Script de criação do banco e tabelas

-- Tabela de perguntas: armazena as questões exibidas no formulário
CREATE TABLE perguntas (
    id SERIAL PRIMARY KEY,
    texto VARCHAR(255) NOT NULL,
    ordem INT DEFAULT 0
);

-- Tabela de respostas: armazena as respostas anônimas
CREATE TABLE respostas (
    id SERIAL PRIMARY KEY,
    pergunta_id INT REFERENCES perguntas(id),
    nota INT,
    feedback TEXT,
    data_resposta TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
