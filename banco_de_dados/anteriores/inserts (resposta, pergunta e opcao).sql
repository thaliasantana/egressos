﻿INSERT INTO pais (NomePais) VALUES ("Brasil");

INSERT INTO estado (nomeEstado, idPais) VALUES ("Goiás", 1);

INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Ceres", 1);
INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Uruana", 1);
INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Rubiataba", 1);
INSERT INTO cidade (nomeCidade, idEstado) VALUES ("São Patrício", 1);
INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Carmo do Rio Verde", 1);
INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Rialma", 1);
INSERT INTO cidade (nomeCidade, idEstado) VALUES ("Nova Glória", 1);

INSERT INTO curso (nomeCurso) VALUES ("Técnico Agrícola");
INSERT INTO curso (nomeCurso) VALUES ("Técnico em Informática para Internet Integrado ao Ensino Médio");
INSERT INTO curso (nomeCurso) VALUES ("Técnico em Informática Integrado ao Ensino Médio");
INSERT INTO curso (nomeCurso) VALUES ("Técnico em Meio Ambiente Integrado ao Ensino Médio");
INSERT INTO curso (nomeCurso) VALUES ("Técnico em Agropecuária Integrado ao Ensino Médio");
INSERT INTO curso (nomeCurso) VALUES ("Técnico em Administração");
INSERT INTO curso (nomeCurso) VALUES ("Técnico em Informática");
INSERT INTO curso (nomeCurso) VALUES ("Bacharelado em Sistemas de Informação");
INSERT INTO curso (nomeCurso) VALUES ("Bacharelado em Zootecnia");
INSERT INTO curso (nomeCurso) VALUES ("Bacharelado em Agronomia");
INSERT INTO curso (nomeCurso) VALUES ("Licenciatura em Ciências Biolôgicas");
INSERT INTO curso (nomeCurso) VALUES ("Licenciatura em Química");
INSERT INTO curso (nomeCurso) VALUES ("Especilização em Ensino de Ciências da Natureza");
INSERT INTO curso (nomeCurso) VALUES ("Especialização em Educação Matemática");
INSERT INTO curso (nomeCurso) VALUES ("Mestrado em Irrigação do Cerrado");

select * from egresso;
INSERT INTO egresso VALUES (null, "Guilherme Machado", "12345678998", "1998-03-01", "guimachado@gmail.com", "62987654321", "62123456789", 
"M", "Rua 1", "100", "Centro", "Casa", 1);
INSERT INTO egresso VALUES (null, "Arthur Felipe Souza Starling", "11122233344", "2000-01-01", "arthurfss@gmail.com", "62997344532", "62997344532", 
"M", "Rua Amato Alves Moreira", "453", "Jardim do Sol", "Casa", 4);
INSERT INTO egresso VALUES (null, "Marina Malta Nogueira", "11123245343", "1989-11-01", "mariana@gmail.com", "61982321234", "61982321234", 
"F", "Rua 45", "23", "Vale do Uru", "Casa", 6);
INSERT INTO egresso VALUES (null, "João Pedro Guimarães Guilherme", "23456432134", "1995-06-23", "Joaopedro@gmail.com", "62987345321", "62987345321", 
"M", "Avenida da Cerejeiras ", "07", "Centro", "torre b ", 5);
INSERT INTO egresso VALUES (null, "Giovanna Menconi Rowell", "234678901234", "2000-11-11", "gihmenconi@gmail.com", "62993203949", "62993203949", 
"F", "Avenida Azul", "1900", "vila multirão", "Casa", 5);
INSERT INTO egresso VALUES (null, "Rahilly Machado", "11122233222", "2004-12-03", "ramachado@gmail.com", "62986543234", "61982243234", 
"F", "Rua J", "111", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Eloisa Antero Guisse", "176545689984", "2002-04-01", "eloguisse@gmail.com", "62987545432", "62987545432", 
"F", "Rua 41", "1067", "Sul", "Casa", 2);
INSERT INTO egresso VALUES (null, "João Pedro Campos Porto", "54349893344", "2000-09-01", "joaocampos@hotmail.com", "14993293949", "14993293949", 
"M", "Rua Bamgu", "10", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Leticia Bezerra Goncalves Holanda", "54676565789", "1090-09-11", "gosalvesleticia@hotmail.com", "62993393949", "62989565454", 
"F", "Rua Manaus", "104", "Asa sul", "Casa", 3);
INSERT INTO egresso VALUES (null, "Letícia Barbieri Stroeh", "23456789045", "1999-09-11", "leticia@hotmail.com", "62993390909", "62993390909", 
"F", "Rua Mendes", "345", "radial leste", "Casa", 3);
INSERT INTO egresso VALUES (null, "Pedro Gabriel Paiva", "89765489045", "1997-09-10", "pedrinho@hotmail.com", "62993490969", "62993490969", 
"M", "Avenida Radial Leste", "349", "graviola", "torre e", 4);
INSERT INTO egresso VALUES (null, "Samara Dália Tavares Silva", "89765564345", "1997-09-10", "samaara@hotmail.com", "62994440969", "62994440969", 
"F", "Avenida sudeste", "348", "Norte", "casa", 5);
INSERT INTO egresso VALUES (null, "Gustavo Neves da Cruz", "89952564345", "1992-09-10", "gusneves@hotmail.com", "62995440969", "62995440969", 
"M", "Avenida sudeste", "38", "Norte", "casa", 5);
INSERT INTO egresso VALUES (null, "Laryssa Coe Lucena", "89765509045", "1989-09-19", "laryssa@hotmail.com", "629894534534", "629894534534", 
"F", "Avenida M", "358", "Marista", "casa", 4);
INSERT INTO egresso VALUES (null, "Ian Seo Takose", "89986545655", "1995-09-10", "seoian@hotmail.com", "62998900969", "62998900969", 
"M", "Avenida LM", "523", "Vale Azul", "casa", 5);
INSERT INTO egresso VALUES (null, "Thiago Frota Maranhão", "41122233222", "2004-02-03", "thiagof@gmail.com", "62934543234", "61998743234", 
"M", "Rua Jane Passos", "11", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "João Vitor Ferraz Catrinck", "41125678222", "2001-02-03", "vitorj@gmail.com", "62989703234", "62989703234", 
"M", "Rua Potiguar", "112", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Livia Men Yao Gu", "41125609090", "2002-01-03", "liviamen@gmail.com", "62943213234", "62989708734", 
"F", "Rua Lunar", "23", "Marte", "Casa", 3);
INSERT INTO egresso VALUES (null, "Rafaela Moraes Miserani de Freitas", "89725609090", "2002-11-12", "rafaela@gmail.com", "62943234534", "62943234534", 
"F", "Rua Beira Mar", "223", "Marcial", "Casa", 1);
INSERT INTO egresso VALUES (null, "Thiago Galante Pereira", "89725609567", "2002-11-09", "thiagopereira@gmail.com", "62943254321", "62943254321", 
"M", "Rua tabular", "293", "Marista", "Casa", 1);
INSERT INTO egresso VALUES (null, "Breno Valente Manhaes", "89725609333", "2002-09-09", "brenovm@gmail.com", "62988054321", "62988054321", 
"M", "Rua araras", "29", "Leste", "Casa", 1);
INSERT INTO egresso VALUES (null, "Artur Libanio de Araujo Yordaky", "89729099333", "2002-09-06", "arturaraujo@gmail.com", "62984567821", "62984567821", 
"M", "Rua Amaral", "29", "Leste", "Casa", 4);
INSERT INTO egresso VALUES (null, "Júlia Vilaça de Queiroz Magalhães", "89729099393", "2002-09-06", "juliaqo@gmail.com", "62983214821", "62983214821", 
"F", "Rua Amado", "290", "Vale das Melancias", "Casa", 4);
INSERT INTO egresso VALUES (null, "	Maria Clara Acioli Lins Rocha", "89098769090", "2001-11-12", "mariacla@gmail.com", "62943765432", "62943765432", 
"F", "Rua Beira Mar", "23", "Vila rural", "Casa", 1);
INSERT INTO egresso VALUES (null, "Maria Luisa Cardozo Elias", "97655609567", "2002-11-09", "mariaaa@gmail.com", "62943254763", "62943254763", 
"F", "Rua tabular", "28", "Marista", "Casa", 1);
INSERT INTO egresso VALUES (null, "Isabela Cunha da Silva", "89729999393", "2002-09-09", "isa@gmail.com", "62997654321", "62997654321", 
"F", "Rua Teodoro", "7898", "Norte", "Casa", 1);
INSERT INTO egresso VALUES (null, "Aureliano Alves Cardoso", "89729056563", "1992-09-06", "aurelio@gmail.com", "62988909876", "62988909876", 
"M", "Rua Amaral", "29", "Leste", "Casa", 4);
INSERT INTO egresso VALUES (null, "Laura Cavalcante Campelo", "77790993373", "2003-08-06", "laura@gmail.com", "62983989021", "62983989021", 
"F", "Rua Amado", "290", "Vale das Melancias", "Casa", 4);
INSERT INTO egresso VALUES (null, "Paula Cristina Pereira Cruz", "66666999333", "1998-10-09", "paulinha@gmail.com", "62997654565", "62997654565", 
"F", "Rua B", "78", "Vale do Sol", "Casa", 6);
INSERT INTO egresso VALUES (null, "Rodrigo Salgado Domingos Porto", "65657056563", "1995-09-06", "rodrigo@gmail.com", "62943215876", "62943215876", 
"M", "Rua Z", "290", "Vale do Sol", "Casa", 6);
INSERT INTO egresso VALUES (null, "Gabriel Morais Barros", "75690993373", "2003-08-06", "gabrielm@gmail.com", "62982349021", "62982349021", 
"M", "Rua Monteiro Lobato", "290", "Vale das Melancias", "Casa", 4);
INSERT INTO egresso VALUES (null, "Gabriel de Alencar Fernandes", "67543399333", "1978-10-09", "gabrielalencar@gmail.com", "62991234565", "62991234565", 
"M", "Rua 34", "98", "Vale do Araguaia", "Casa", 1);
INSERT INTO egresso VALUES (null, "Ana Julia Oliveira", "65643212309", "1995-08-06", "anajulia@gmail.com", "62989098876", "62989098876", 
"F", "Rua Z", "2988", "Centro", "Casa", 6);
INSERT INTO egresso VALUES (null, "Augusto Soares Gonçalves", "75690093373", "2003-08-06", "augustosoaresm@gmail.com", "62982345321", "62982345321", 
"M", "Rua Lobato", "290", "Vale do Melão", "Casa", 4);
INSERT INTO egresso VALUES (null, "Helena Fraga La Noce", "12349099333", "2001-09-06", "helena@gmail.com", "62999999821", "62999999821", 
"M", "Rua Amora", "2679", "Centro", "Casa", 1);
INSERT INTO egresso VALUES (null, "Maria Julia Figueiredo Sudario", "89744449333", "2003-05-06", "mariajulia@gmail.com", "62989809821", "62989809821", 
"F", "Rua Maria Souza", "900", "Vale Do Uru", "Casa", 2);
INSERT INTO egresso VALUES (null, "Giovanna Sebben Ballen", "81234569090", "2000-01-12", "sebeen@gmail.com", "629909065432", "62990905432", 
"F", "Rua Beira Mar", "23", "Vila rural", "Casa", 1);
INSERT INTO egresso VALUES (null, "Caio Hermano Maia de Oliveira", "80725609567", "2002-11-09", "caiohm@gmail.com", "62989854763", "62983994763", 
"M", "Rua 23 de Maio", "28", "Marinho", "Casa", 1);
INSERT INTO egresso VALUES (null, "Arthur Silva de Vasconcelos", "81239569090", "2002-01-11", "arthursilva@gmail.com", "629888865432", "629888865432", 
"M", "Rua da Oliveiras", "73", "Vila do Multirão", "Casa", 1);
INSERT INTO egresso VALUES (null, "Laura de Oliveira Afonso", "84445609567", "2002-03-19", "oliveiraa@gmail.com", "62989878903", "62989878903", 
"F", "Rua 25 de Maio", "209", "Maroto", "Casa", 1);
INSERT INTO egresso VALUES (null, "Maria Júlia Andrade de Barros", "11124324222", "1984-12-03", "mariaJulia@gmail.com", "62981111234", "629811112344", 
"F", "Avenida H", "231", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Felipe Leite Toledo", "176545111984", "1998-04-06", "felipetoledo@gmail.com", "62987545442", "62987545452", 
"F", "Rua 13", "106", "Sul", "Casa", 2);
INSERT INTO egresso VALUES (null, "Rodrigo Correia Fontenele de Azevedo", "54349893354", "1997-09-05", "rdcorreia@hotmail.com", "14993297749", "14984293949", 
"M", "Rua ACB", "1034", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Ana Julia Felipe", "99124324222", "1999-12-03", "anafelipe@gmail.com", "62981111777", "62981111777", 
"F", "Avenida BH", "31", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Nicole Braz Domen", "176545911984", "1998-04-06", "nicole@gmail.com", "62985555442", "62985555442", 
"F", "Rua 44", "106", "Sul", "Casa", 2);
INSERT INTO egresso VALUES (null, "Antônio Eduardo Rossano", "54349890354", "1997-09-05", "atonio@hotmail.com", "14995497749", "14995497749", 
"M", "Rua jaú", "34", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Luca Twardowski Prá Scherer", "789545111984", "1999-05-06", "lucatwa@gmail.com", "62985444442", "62985444442", 
"M", "Rua 94", "222", "Sul", "Casa", 2);
INSERT INTO egresso VALUES (null, "Tiago Mamede Diógenes", "54399893354", "1997-09-05", "tiagomamede@hotmail.com", "14967697749", "14967697749", 
"M", "Rua PH", "67", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Yuri Barros Mendes", "54349930070", "1987-09-05", "yuri@hotmail.com", "62967697749", "14977697749", 
"M", "Rua X", "670", "Centro", "Casa", 5);
INSERT INTO egresso VALUES (null, "Tiago Ribeiro Paiva", "56349803000", "1990-09-15", "tiagopaiva@hotmail.com", "62999897749", "62999897749", 
"M", "Rua Pau Brasil", "70", "buriti", "Casa", 1);
INSERT INTO egresso VALUES (null, "Matheus Homrich", "56345559550", "1968-09-15", "matheushom@hotmail.com", "62988897749", "62988897749", 
"M", "Rua Tocantins", "606", "Bacuri", "Casa", 3);
INSERT INTO egresso VALUES (null, "Mirella de Souza Gomes", "86345555550", "1968-09-15", "mirella@hotmail.com", "62988897761", "62988897761", 
"F", "Avenida Tocantins", "610", "Bacuri", "Casa", 3);
INSERT INTO egresso VALUES (null, "André Torres Carvalho", "56345501050", "1968-09-15", "ctorres@hotmail.com", "62989997761", "62989997761", 
"M", "Avenida Brasil", "630", "São Paulo", "Casa", 4);
INSERT INTO egresso VALUES (null, "Lucca Bezzon Silva", "56345800050", "1968-09-15", "luccabem@hotmail.com", "61989997761", "61989997761", 
"M", "Avenida Brasileia", "60", "Centro", "Casa", 6);
INSERT INTO egresso VALUES (null, "Gustavo Lima Parente", "12345100050", "1988-09-13", "guslima@hotmail.com", "62989876761", "62989876761", 
"M", "Avenida Tambu ", "611", "Samambaia", "Casa", 5);
INSERT INTO egresso VALUES (null, "Gustavo Esteche Araujo", "99945100050", "1994-10-15", "gustavoaraujo@hotmail.com", "61989997333", "61989997333", 
"M", "Avenida Jambu", "604", "Tucupi", "Casa", 6);
INSERT INTO egresso VALUES (null, "	Júlia Stancioli Paiva", "99995255550", "1972-09-25", "juliasp@hotmail.com", "14988897749", "14988897749", 
"F", "Rua aroeira", "23", "Jequitibá", "Casa", 1);
INSERT INTO egresso VALUES (null, "	Davi Proite Galvani", "56343332550", "1968-09-15", "davigalvani@hotmail.com", "62933397761", "62933397761", 
"M", "Avenida Araguáia", "620", "Centro", "Casa", 1);
INSERT INTO egresso VALUES (null, "	Guilherme Junji Tutiya", "56342200050", "1968-09-15", "Guilherme@hotmail.com", "62989999394", "62989934261", 
"M", "Avenida Brasil", "10", "Vila Rocha", "Casa", 4);
INSERT INTO egresso VALUES (null, "Gabriel Bergara Lima", "56345500770", "1968-09-15", "biellima@hotmail.com", "61989997222", "61989997123", 
"M", "Avenida Ramos de Avezedo", "60", "Santa Cruz", "Casa", 6);
INSERT INTO egresso VALUES (null, "Luís Eduardo Silva Borges", "90876598549", "1986-09-21", "luizsilva@hotmail.com", "62923123943", "62989235453", 
"M", "Rua Potiguar", "104", "São Pedro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Ana Cecília Pereira Firmino", "23478653245", "1991-09-11", "anapereira@hotmail.com", "62995390955", "62995390955", 
"F", "Rua Goiabeira", "345", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Vinícius Silveira Barros", "56465489665", "1992-09-10", "vinibarros@hotmail.com", "62993465439", "62993465439", 
"M", "Avenida Buriti", "349", "Centro", "torre A", 4);
INSERT INTO egresso VALUES (null, "Felipe Saneshima Brasil Barbosa", "22465489665", "1994-10-10", "felipebr@hotmail.com", "62991235439", "62991235439", 
"M", "Avenida Jaú", "311", "Centro", "casa", 4);
INSERT INTO egresso VALUES (null, "Lucas Kim Hsieh", "98065489665", "1999-09-30", "lucaskim@hotmail.com", "62997654439", "62997654439", 
"M", "Avenida Barueri", "389", "Sul", "casa", 4);
INSERT INTO egresso VALUES (null, "Julia Costa Cruvinel Barbosa", "21465489665", "1994-10-10", "juliabarbosa@hotmail.com", "62991299439", "62991277439", 
"F", "Avenida Maringá", "301", "Norte", "casa", 4);
INSERT INTO egresso VALUES (null, "Vitor da Silva Andrade", "12122233344", "2000-12-01", "vitorsilva@gmail.com", "62993334532", "62993334532", 
"M", "Rua Amaro Alves Moreira", "43", "Jardim Vale do Sol", "Casa", 1);
INSERT INTO egresso VALUES (null, "Vinicius Vanzella Candido", "11123200343", "1989-12-01", "vinivanzella@gmail.com", "61945671234", "61945671234", 
"M", "Rua 335", "28", "Vale do Paraiba", "Casa", 6);
INSERT INTO egresso VALUES (null, "Vítor Alexandre Theodosio de Carvalho Ayres Camargo", "23456430034", "1993-06-23", "vitorcarvalho@gmail.com", "62982315321", "62982315321", 
"M", "Avenida 7", "07", "Laranjeira", "casa", 5);
INSERT INTO egresso VALUES (null, "Luiza Lei Mao", "23456432094", "1998-11-23", "luizalei@gmail.com", "62999885321", "62999885321", 
"F", "Avenida da Jatobá", "55", "Centro", "casa", 5);
INSERT INTO egresso VALUES (null, "Glauco César Prado Soares", "235678901234", "2001-11-11", "glaucocesar@gmail.com", "62993234949", "62993234949", 
"M", "Avenida das Rosas", "190", "Vila Pacu", "Casa", 5);
INSERT INTO egresso VALUES (null, "Guilherme Sousa Lopes", "14448233222", "2001-11-03", "guisouza@gmail.com", "62989873234", "62989873234", 
"M", "Rua T", "1111", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Joao Victor Brito Craveiro", "22216432134", "1994-06-13", "Joaovictor@gmail.com", "62987345441", "62987345441", 
"M", "Avenida Carajá", "237", "Centro", "casa", 5);
INSERT INTO egresso VALUES (null, "Lincoln Daisuke Kinukawa Sato", "234678331234", "2002-11-11", "lisato@gmail.com", "62995443949", "62995443949", 
"M", "Avenida Modelo", "190", "Jundaia", "Casa", 5);
INSERT INTO egresso VALUES (null, "Lariane Fernandes de Faria", "11134253332", "2001-11-03", "larifaria@gmail.com", "62985673234", "62985673234", 
"F", "Rua MM", "1155", "Cedro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Thais de Albuquerque Pereira", "45656432134", "1995-09-23", "thaispereira@gmail.com", "62987444421", "62987444421", 
"F", "Avenida 51", "432", "Centro", "casa", 5);
INSERT INTO egresso VALUES (null, "Cássio Federizzi Barcellos de Oliveira", "234098001234", "2003-12-11", "cassiooliver@gmail.com", "62993423949", "62993423949", 
"M", "Avenida Presidente Vargas", "1930", "Dona Tidinha", "Casa", 5);
INSERT INTO egresso VALUES (null, "Lucas Cabral Kauvano", "11990233222", "2000-12-13", "lucasinha@gmail.com", "62986544434", "62986544434", 
"M", "Rua PT", "1113", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Lívia de Araujo Nascimento", "89945845655", "1991-06-10", "liviaara@hotmail.com", "62993450969", "62993450969", 
"F", "Avenida Vargas", "53", "Vale de Casamar", "casa", 5);
INSERT INTO egresso VALUES (null, "Marina Carvalho Moreira de Santana", "83345845655", "1994-09-10", "marianasantana@hotmail.com", "62993432169", "62993432169", 
"F", "Avenida W", "533", "Centro", "casa", 5);
INSERT INTO egresso VALUES (null, "Diego Teixeira Ribeiro", "83345345643", "1991-09-10", "teixeiradiego@hotmail.com", "62993657469", "62993657469", 
"M", "Avenida  Tabajára", "5233", "Centro", "casa", 1);
INSERT INTO egresso VALUES (null, "Davi Teixeira de Souza", "83345345111", "1993-09-10", "davisouza@hotmail.com", "62993652229", "62993652229", 
"M", "Avenida  da Damas", "5213", "Vale dos passáros", "casa", 1);
INSERT INTO egresso VALUES (null, "Ana Luiza Medeiros Bacelar", "83767645643", "1991-12-14", "analuiza@hotmail.com", "62993600069", "62993600069", 
"F", "Avenida  Guariroba", "5212", "Centro", "casa", 1);
INSERT INTO egresso VALUES (null, "Cauã Pereira Masseu", "83345444111", "1983-12-10", "cuaamasseu@hotmail.com", "62987252229", "62993658829", 
"M", "Avenida  da Padroeira", "5290", "Vale dos canários", "casa", 1);
INSERT INTO egresso VALUES (null, "Natasha Kayle de Alencar Maia", "83765555643", "1955-12-18", "nataalen@hotmail.com", "62993608739", "62993608739", 
"F", "Rua Caruarú", "5982", "Centro", "casa", 1);
INSERT INTO egresso VALUES (null, "Douglas Felipe Speck", "83345365411", "1983-12-10", "felipedouglas@hotmail.com", "62987252221", "62987252221", 
"M", "Avenida  Nazaré Tedesco", "5276", "Norte", "casa", 1);
INSERT INTO egresso VALUES (null, "Mariana Caldas Borges", "83765532143", "1943-12-18", "maricaldas@hotmail.com", "62993603219", "62993603219", 
"F", "Rua 38", "592", "Centro", "casa", 1);
INSERT INTO egresso VALUES (null, "Julia Batista Santana", "83345342711", "1999-12-19", "Santanajulia@hotmail.com", "62987252151", "62987252151", 
"F", "Avenida  Tedesco", "5096", "Sudeste", "casa", 1);
INSERT INTO egresso VALUES (null, "Alice Brasil de Matos Galvao", "41126743222", "2000-02-31", "alicematos@gmail.com", "62963703234", "62963703234", 
"F", "Rua Cornelina", "172", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Thais Martins de Sousa", "47925609090", "2001-11-03", "thaism@gmail.com", "62947613234", "62947613234", 
"F", "Rua Marciana", "2323", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Gabriela Calheiros Braga", "41126043122", "2000-02-30", "gabibraga@gmail.com", "62963777734", "62963777734", 
"F", "Rua Coronel Teixeira", "1702", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Guilherme Martins Holanda de Santana", "17925367590", "1998-11-03", "guimartins@gmail.com", "62941264234", "62941264234", 
"M", "Rua Ti", "2423", "Centro", "Casa", 3);
INSERT INTO egresso VALUES (null, "Marcela Lima Fernandes", "44458769090", "1990-11-12", "marcelalima@gmail.com", "62876769082", "62876769082", 
"F", "Rua Benedito", "237", "Vitória", "Casa", 1);
INSERT INTO egresso VALUES (null, "Natália de Araujo Fabris Rodrigues", "89729867567", "2002-08-19", "natalia@gmail.com", "62949864763", "62949864763", 
"F", "Rua Baú", "28", "Marisa", "Casa", 1);
INSERT INTO egresso VALUES (null, "Thierys Renner Nery de Soua", "89724358567", "2001-12-29", "nery@gmail.com", "62940064763", "62940064763", 
"F", "Rua Santa Fé", "2878", "Matina", "Casa", 1);
INSERT INTO egresso VALUES (null, "Jose Euclides Arruda Neto", "89724666667", "1995-12-29", "josearruda@gmail.com", "62945444763", "62909064763", 
"M", "Rua Santa Ana", "2871", "Ipiranga", "Casa", 1);
INSERT INTO egresso VALUES (null, "Lucas Araújo Bianchi", "89724985667", "1958-12-29", "lucasbianchi@gmail.com", "62945478763", "62945478763", 
"M", "Rua Santana", "2875", "Ipirangapora", "Casa", 1);
INSERT INTO egresso VALUES (null, "Marcelo Torres Ramos de Andrade", "89724666614", "1990-12-29", "marcelotorres@gmail.com", "62909044763", "62976064763", 
"M", "Rua Santa Tereza", "2081", "Caxias", "Casa", 1);
INSERT INTO egresso VALUES (null, "Pedro Freixinho Nunes", "89728885667", "1955-12-29", "Pedronunes@gmail.com", "62945475563", "62945475563", 
"M", "Rua D", "2870", "Ipia", "Casa", 1);
INSERT INTO egresso VALUES (null, "Aparecida Nunes", "89732895667", "1965-12-29", "aparecidan@gmail.com", "62940005563", "62940005563", 
"F", "Rua P", "870", "Novo", "Casa", 1);


INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2012, 1, 1);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2010, 4, 2);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2000, 1996, 2, 3);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2012, 5, 4);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2005, 2001, 6, 5);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2010, 1, 6);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2010, 2014, 3, 7);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1998, 1995, 6, 8);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2004, 2000, 8, 9);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2011, 2008, 2, 10);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1999, 1996, 4, 11);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2000, 1997, 8, 12);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1998, 1994, 2, 13);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1996, 1993, 4, 14);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2003, 2000, 8, 15);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2010, 2, 16);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1999, 1996, 1, 17);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2004, 2005, 8, 18);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2012, 2008, 2, 19);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1998, 1996, 4, 20);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2000, 1998, 2, 21);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1997, 1995, 4, 22);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2000, 1997, 2, 23);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1997, 1993, 1, 24);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1996, 1994, 4, 25);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2000, 1994, 2, 26);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1997, 1994, 1, 27);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1998, 1994, 4, 28);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2000, 1996, 2, 29);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1997, 1993, 1, 30);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1999, 1995, 1, 31);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1999, 1994, 7, 32);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2000, 1995, 6, 33);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (1996, 1993, 1, 34);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2004, 1999, 8, 35);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2012, 7, 36);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2014, 2009, 6, 37);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2013, 2009, 9, 38);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2009, 2005, 8, 39);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2013, 2010, 7, 40);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2014, 6, 41);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2013, 9, 42);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2011, 4, 43);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2010, 3, 44);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2013, 1, 45);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2014, 9, 46);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2012, 4, 47);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2009, 3, 48);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2012, 2, 49);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2014, 3, 50);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2010, 2005, 4, 51);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2010, 3, 52);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2016, 2013, 1, 53);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2014, 7, 54);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2009, 4, 55);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2009, 6, 56);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2012, 1, 57);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2013, 10, 58);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2004, 4, 59);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2010, 13, 60);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2012, 13, 61);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2013, 11, 62);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2008, 2005, 12, 63);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2009, 13, 64);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2013, 12, 65);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2012, 11, 66);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2004, 2, 67);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2010, 9, 68);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2016, 2012, 13, 69);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2013, 11, 70);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2003, 2, 71);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2010, 9, 72);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2012, 13, 73);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2012, 11, 74);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2002, 4, 75);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2011, 9, 76);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2014, 12, 77);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2011, 11, 78);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2004, 2, 79);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2011, 9, 80);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2013, 10, 81);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2012, 11, 82);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2005, 6, 83);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2014, 2010, 9, 84);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2016, 2012, 13, 85);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2012, 1, 86);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2017, 2013, 2, 87);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2011, 9, 88);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2015, 2012, 13, 89);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2012, 3, 90);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2008, 2004, 2, 91);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2011, 9, 92);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2011, 13, 93);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2011, 11, 94);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2010, 2007, 2, 95);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2013, 2010, 9, 96);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso)
VALUES (2017, 2013, 13, 97);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2016, 2011, 7, 98);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2007, 2002, 2, 99);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2015, 2011, 9, 100);
INSERT INTO cursoConcluido (anoFimCursoConcluido, anoInicioCursoConcluido, idCurso, idEgresso) 
VALUES (2000, 1998, 1, 74);

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


