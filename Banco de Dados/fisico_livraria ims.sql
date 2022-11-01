

CREATE TABLE autor (
cod_autor INTEGER PRIMARY KEY AUTO_INCREMENT,
nome_autor VARCHAR(400)
);

CREATE TABLE editora (
cod_editora INTEGER PRIMARY KEY AUTO_INCREMENT,
nome_editora VARCHAR(100),
img VARCHAR (100)
);

CREATE TABLE genero (
cod_genero INTEGER PRIMARY KEY AUTO_INCREMENT,
descricao VARCHAR(50)
);

CREATE TABLE livro (
cod_livro INTEGER PRIMARY KEY AUTO_INCREMENT,
qtd_estoque INTEGER,
nome VARCHAR(400),
img VARCHAR (100),
preco DECIMAL(10,2),
cod_editora INTEGER,
FOREIGN KEY(cod_editora) REFERENCES editora (cod_editora)
);

CREATE TABLE compra (
cod_compra INTEGER PRIMARY KEY AUTO_INCREMENT,
valor_total DECIMAL(10),
data_compra DATETIME,
cod_pagamento INTEGER,
cod_cliente INTEGER
);

CREATE TABLE forma_pagamento (
cod_pagamento INTEGER PRIMARY KEY AUTO_INCREMENT,
descricao VARCHAR(50)
);

CREATE TABLE usuario (
cod_cliente INTEGER PRIMARY KEY AUTO_INCREMENT,
cpf VARCHAR(20),
email VARCHAR(100),
senha VARCHAR(25)
);

CREATE TABLE admin (
cod_admin INTEGER PRIMARY KEY AUTO_INCREMENT,
descricao VARCHAR(50),
cod_cliente INTEGER,
FOREIGN KEY(cod_cliente) REFERENCES usuario (cod_cliente)
);

CREATE TABLE autor_livro (
cod_autor INTEGER,
cod_livro INTEGER,
FOREIGN KEY(cod_autor) REFERENCES autor (cod_autor),
FOREIGN KEY(cod_livro) REFERENCES livro (cod_livro)
);

CREATE TABLE genero_livro (
cod_livro INTEGER,
cod_genero INTEGER,
FOREIGN KEY(cod_livro) REFERENCES livro (cod_livro),
FOREIGN KEY(cod_genero) REFERENCES genero (cod_genero)
);

CREATE TABLE livro_compra (
cod_livro INTEGER,
cod_compra INTEGER,
FOREIGN KEY(cod_livro) REFERENCES livro (cod_livro),
FOREIGN KEY(cod_compra) REFERENCES compra (cod_compra)
);

ALTER TABLE compra ADD FOREIGN KEY(cod_pagamento) REFERENCES forma_pagamento (cod_pagamento);
ALTER TABLE compra ADD FOREIGN KEY(cod_cliente) REFERENCES usuario (cod_cliente);



insert into autor (cod_autor, nome_autor) VALUES 
(1," C.S. Lewis"),
(2, "J. K. Rowling"),
(3, "J. R. R. Tolkien"),
(4, "Antoine de Saint-Exupéry"),
(5, "Charles Dickens"),
(6, "Dan Brown"),
(7, "Sir Arthur Conan Doyle"),
(8, "Maurice Leblanc"),
(9, "Rick Riordan"),
(10, "Anne Frank");

insert into editora (cod_editora, nome_editora, img) VALUES
(1, "WMF Martins Fontes", "wmf.jpg"), 
(2, "Rocco", "rc.jpg"),
(3, "Allen & Unwin", "au.jpg"),
(4, "Escala.", "ec.jpg"),
(5, "José Olympio", "jo.jpg"),
(6, "sextante", "st.jpg"), 
(7, "Zahar", "zh.jpg"),
(8, "Principis", "pc.jpg"),
(9, " Intrínseca", "is.jpg"),
(10, "Grupo Editorial Record", "ger.jpg");

insert into genero (descricao) VALUES
("Ação"),
("Fantasia"),
("Aventura"),
("Infantil"),
("Ficção"),
("Romance"),
("Fabula"),
("Suspense"),
("Misterio"),
("Autobiografia");

insert into livro (cod_livro, qtd_estoque, nome, img, preco, cod_editora) VALUES 
(1, 18, "Narnia O Leão, a Feiticeira e o Guarda-Roupa", "1nar.jpg", 18.50, 1),
(2, 22, "Harry Potter e a Pedra Filosofal ", "1har.jpg", 49.99, 2),
(3, 25, "Harry Potter e a Camara Secreta", "2har.jpg", 44.99, 2),
(4, 25, "Harry Potter e o Prisioneiro de Azkaban","3har.jpg", 49.99, 2),
(5, 22, "Harry Potter e o Calice de Fogo", "4har.jpg", 49.99, 2),
(6, 24, "Harry Potter e a Ordem da Fenix", "5har.jpg", 44.99, 2),
(7, 22, "Harry Potter e o Enigma do Principe", "6har.jpg", 49.99, 2),
(8, 20, "Harry Potter e as Reliquias da Morte", "7har.jpg", 49.99, 2),
(9, 27, 'O Senhor dos Aneis A Sociedade do Anel', "1sa.jpg", 57.50, 3),
(10, 25, "O Senhor dos Aneis As duas torres ", "2sa.jpg", 57.50, 3),
(11, 25, "O Senhor dos Aneis O retorno do rei ", "3sa.jpg", 57.50, 3),
(12, 30, "O Pequeno Principe", "1pp.jpg", 39.99, 4),
(13, 27, "Historia em Duas Cidades", "1hdc.jpg", 39.99, 5),
(14, 28, "O Codigo Da Vinci", "1cv.jpg", 39.99, 6),
(15, 27, "As Aventuras de Sherlock Holmes", "1sh.jpg", 44.99, 7),
(16, 27, "As Memorias de Sherlock Holmes", "2sh.jpg", 44.99, 7),
(17, 27, "A Volta de Sherlock Holmes", "3sh.jpg", 44.99, 7),
(18, 27, "O ultimo Adeus de Sherlock Holmes", "4sh.jpg", 44.99, 7),
(19, 20, "Arsene Lupin O Ladrão de Casaca", "1al.jpg", 39.99, 8),
(20, 20, "Arsene Lupin Contra Herlock Sholmes", "2al.jpg",39.99, 8),
(21, 20, "Arsene Lupin As Confissões de Arsene Lupin", "3al.jpg", 39.99, 8),
(22, 25, "Percy Jackson O Ladrao de Raios", "1pj.jpg",39.99, 9),
(23, 25, "Percy Jackson O Mar de Monstros", "2pj.jpg",39.99, 9),
(24, 25, "Percy Jackson A Maldicao do Tita", "3pj.jpg",39.99, 9),
(25, 18, "Anne Frank", "1af.jpg",39.99, 10);

insert into forma_pagamento (descricao) VALUES 
("Dinheiro"),
("Debito"),
("Boleto"),
("Credito"),
('Pix');

insert into usuario (cpf, email, senha) VALUES
("36985214742", "jsinacio@gmai.com", "231457"),
("14587269365", "italopan@gmail.com","123548"),
("78945612325", "betolao@gmail.com", "456784"),
("45678912328", "lola@gmail.com", "254896"),
("15975368424", "fabioko@gmail.com", "234569"),
("78945621327", "carlagod@gmail.com", "567812"),
("75698412336", "vitokl@gmail.com", "456598"),
("15478932658", "hadadpt@gmail.com", "854721"),
("45691287325", "jairbols@gmail.com", "659721"),
("47589632148", "luizlula@gmail.com", "687512");

insert into compra (valor_total, data_compra, cod_pagamento, cod_cliente) VALUES
(44.99, "2022-05-24", 1, 1),
(39.99, "2022-05-28", 1, 1),
(39.99, "2022-05-29", 1, 2),
(119.97, "2022-06-14", 2, 3),
(39.99, "2022-06-18", 2, 3),
(89.98, "2022-06-19", 2, 4),
(39.99, "2022-06-22", 3, 4),
(89.98, "2022-07-01", 3, 5),
(89.98, "2022-07-18", 4, 6),
(39.99, "2022-08-26", 5, 7);

insert into admin (descricao,cod_cliente) VALUES 
("chefe geral", 8),
("vendedor", 9),
("Administrator geral do sistema", 10);

insert into autor_livro(cod_autor, cod_livro) VALUES
(1,1),
(2,2),
(2,3),
(2,4),
(2,5),
(2,6),
(2,7),
(2,8),
(3,9),
(3,10),
(3,11),
(4,12),
(5,13),
(6,14),
(7,15),
(7,16),
(7,17),
(7,18),
(8,19),
(8,20),
(8,21),
(9,22),
(9,23),
(9,24),
(10,25);
insert into genero_livro(cod_livro, cod_genero) VALUES
(1,1),
(2,2),
(3,2),
(4,2),
(5,2),
(6,2),
(7,2),
(8,2),
(9,3),
(10,3),
(11,3),
(12,4),
(13,5),
(14,6),
(15,7),
(16,7),
(17,7),
(18,7),
(19,8),
(20,8),
(21,8),
(22,9),
(23,9),
(24,9),
(25,10);
insert into livro_compra (cod_livro, cod_compra) VALUES 
(5,1),
(25,2),
(24,3),
(15,4),
(16,4),
(17,4),
(13,5),
(4,6),
(5,6),
(22,7),
(6,8),
(7,8),
(8,8),
(7,9),
(21,10);


