CREATE DATABASE counterskins;

CREATE TABLE usuario (
    id_usuario INT NOT NULL AUTO_INCREMENT UNIQUE,
    nome_usuario VARCHAR(50) NOT NULL,
    sobrenome_usuario VARCHAR(100) NOT NULL,
    cpf_usuario VARCHAR(11) NOT NULL UNIQUE,
    email_usuario VARCHAR(70) NOT NULL UNIQUE,
    senha_usuario VARCHAR(255) NOT NULL,
    celular_usuario VARCHAR(14) NOT NULL, -- FORMATO +55 XX XXXXXXXXX
    link_steam_usuario VARCHAR(255) NOT NULL,
    tipo_usuario CHAR(1) NOT NULL, -- |a = admin e  u - user| (Sem grupo de permissão)
    PRIMARY KEY (id_usuario),
);




CREATE TABLE inventario (
    id_invetario INT NOT NULL AUTO_INCREMENT UNIQUE,
    id_item INT NOT NULL,
    id_usuario INT NOT NULL,

    status_item CHAR(1) NOT NULL, -- |c = comprado (item comprado do site),  t - transferido (item veio de transferecia da conta steam), r - retirado(item foi transferido para conta steam), v - vendido(item foi vendido para outro usuario)| 
    status_negociacao CHAR(1) NOT NULL, -- |a - anunciado, e = estoque| 
    preco_compra FLOAT(20,2),
    preco_venda FLOAT(20,2),
    PRIMARY KEY (id_invetario),
    FOREIGN KEY (id_item) REFERENCES item(id_item),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);


CREATE TABLE item (
    id_item INT NOT NULL AUTO_INCREMENT UNIQUE,
    nome_item VARCHAR(70) NOT NULL,
    descricao_item VARCHAR(180) NOT NULL,
    tipo_item VARCHAR(30) NOT NULL, -- Faca, arma, luva ...
    desgaste_item FLOAT(10,10),
    imagem_item VARCHAR(50) NOT NULL, -- Url da pasta
    PRIMARY KEY (id_item),
);



CREATE TABLE transacao (
    id_transacao INT NOT NULL AUTO_INCREMENT UNIQUE,
    valor_compra FLOAT(20,2),
    valor_venda FLOAT(20,2),
    data_compra DATETIME,
    data_venda DATETIME,
    tipo_transacao CHAR(1) NOT NULL -- | c - compra, v- venda|
    id_usuario_vendendor INT,
    id_usuario_comprador INT,
    PRIMARY KEY (id_compra),
    FOREIGN KEY (id_usuario_comprador) REFERENCES usuario(id_usuario)
    FOREIGN KEY (id_usuario_vendendor) REFERENCES usuario(id_usuario)
);




