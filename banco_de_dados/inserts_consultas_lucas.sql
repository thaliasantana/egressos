DROP DATABASE egressos;

INSERT INTO pais (NomePais) VALUES ("Brasil");

INSERT INTO estado (nomeEstado, idPais) VALUES ("Goiás", 1);

INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Ceres", 1);

INSERT INTO curso (nomeCurso) VALUES ("Técnico em Informática");

INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES ();

INSERT INTO egresso VALUES (null, "Fulano", "111.222.333-44", "2000-01-01", "fulano@gmail.com", "987654321", "123456789", "M", "Rua 1", "100", "Centro", "Casa", 1);
SELECT * FROM pais;
SELECT * FROM estado;


INSERT INTO pergunta (enunciadoPergunta) VALUES ("Que dia é hoje?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Que será amanhã?");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "segunda");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "terca");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "quarta");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "quinta");

INSERT INTO opcao (idPergunta, texto) VALUES (2, "segunda");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "terca");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "quarta");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "quinta");


SELECT * FROM opcao;
SELECT * FROM egresso;
SELECT * FROM resposta;

SELECT texto FROM opcao WHERE idPergunta = 1;

INSERT INTO resposta VALUES (1, 2, 7, 2018);