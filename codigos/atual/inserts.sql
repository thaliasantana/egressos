INSERT INTO pais (NomePais) VALUES ("Brasil");

INSERT INTO estado (nomeEstado, idPais) VALUES ("Goiás", 1);

INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Ceres", 1);

INSERT INTO curso (nomeCurso) VALUES ("Técnico em Informática");

INSERT INTO egresso VALUES (null, "Fulano", "11122233344", "2000-01-01", "fulano@gmail.com", "987654321", "123456789", 
"M", "Rua 1", "100", "Centro", "Casa", 1);

INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2012, 1, 1);

/* Aqui começa de fato todas as inserções referentes ao questionário */

INSERT INTO pergunta (enunciadoPergunta) VALUES ("Qual seu nível de satisfação em relação ao curso?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Qual seu nível de satisfação em relação ao IF Goiano?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Qual seu nível de satisfação em relação às atividades de ensino, pesquisa e extensão?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Sente-se capacitado a ingressar no mercado de trabalho?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Tem interesse em voltar a Instituição para outros cursos?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Continua estudando?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Trabalha?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Já participou do Encontro de Egressos?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Como ficou sabendo do evento?");
INSERT INTO pergunta (enunciadoPergunta) VALUES ("Tem hábito de acessar o site do IF Goiano?");

INSERT INTO opcao (idPergunta, texto) VALUES (1, "Excelente");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "Ótimo");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "Bom");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "Regular");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "Ruim");
INSERT INTO opcao (idPergunta, texto) VALUES (1, "Péssimo");

INSERT INTO opcao (idPergunta, texto) VALUES (2, "Excelente");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "Ótimo");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "Bom");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "Regular");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "Ruim");
INSERT INTO opcao (idPergunta, texto) VALUES (2, "Péssimo");

INSERT INTO opcao (idPergunta, texto) VALUES (3, "Excelente");
INSERT INTO opcao (idPergunta, texto) VALUES (3, "Ótimo");
INSERT INTO opcao (idPergunta, texto) VALUES (3, "Bom");
INSERT INTO opcao (idPergunta, texto) VALUES (3, "Regular");
INSERT INTO opcao (idPergunta, texto) VALUES (3, "Ruim");
INSERT INTO opcao (idPergunta, texto) VALUES (3, "Péssimo");

INSERT INTO opcao (idPergunta, texto) VALUES (4, "Sim, totalmente");
INSERT INTO opcao (idPergunta, texto) VALUES (4, "Sim, parcialmente");
INSERT INTO opcao (idPergunta, texto) VALUES (4, "Não");

INSERT INTO opcao (idPergunta, texto) VALUES (5, "Sim");
INSERT INTO opcao (idPergunta, texto) VALUES (5, "Não");
INSERT INTO opcao (idPergunta, texto) VALUES (5, "Já retornei");

INSERT INTO opcao (idPergunta, texto) VALUES (6, "Sim");
INSERT INTO opcao (idPergunta, texto) VALUES (6, "Não");

INSERT INTO opcao (idPergunta, texto) VALUES (7, "Sim, na área");
INSERT INTO opcao (idPergunta, texto) VALUES (7, "Sim, em outra área");
INSERT INTO opcao (idPergunta, texto) VALUES (7, "Não");

INSERT INTO opcao (idPergunta, texto) VALUES (8, "Sim");
INSERT INTO opcao (idPergunta, texto) VALUES (8, "Não");

INSERT INTO opcao (idPergunta, texto) VALUES (9, "Amigos");
INSERT INTO opcao (idPergunta, texto) VALUES (9, "WhatsApp");
INSERT INTO opcao (idPergunta, texto) VALUES (9, "Redes sociais");
INSERT INTO opcao (idPergunta, texto) VALUES (9, "E-mail");
INSERT INTO opcao (idPergunta, texto) VALUES (9, "Site Institucional");

INSERT INTO opcao (idPergunta, texto) VALUES (10, "Sim");
INSERT INTO opcao (idPergunta, texto) VALUES (10, "Não");

INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 1, 1, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 2, 7, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 3, 13, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 4, 19, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 5, 22, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 6, 25, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 7, 27, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 8, 30, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 9, 32, 2018);
INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 10, 37, 2018);



