CREATE database floricultura;

CREATE TABLE usuarios(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(25),
    email VARCHAR(25),
    senha VARCHAR(25)
);

CREATE TABLE produtos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
   	descricao VARCHAR(100),
    preco INT
);

INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha');
INSERT INTO produto (nome, preco, descricao) VALUES ('$nome_produto', '$preco_produto', '$descricao_produto');
