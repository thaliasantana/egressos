<!DOCTYPE html>
<html>
  <header>
    <title> Egressos </title>

    <img src="src/imagem/logo_if.png" alt="Logo if">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
	<meta charset="utf-8">

	<nav>
		<li>EGRESSOS</li>
        <li><a href="index.html">Início</a></li>
		<li><a href="sobre.html">Sobre</a></li>
		<li><a href="encontro_de_egressos.html">Encontro de Egressos</a></li>
		<li><a href="contato.html">Contato</a></li> <br>
    </nav>

  </header>
  <body>
    <section class="container" align="left">
		<div class="alinhar">
			<label class="font"> Encontro de Egressos </label> <br> <br>
			<label> Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano </label> <br> <br> <br>
			
			<?php
				$con =  new mysqli("localhost", "root", "", "dbegressos");

				$ano = $_POST["ano"];
				$resposta1 = $_POST["resposta1"];
				$resposta2 = $_POST["resposta2"];
				$resposta3 = $_POST["resposta3"];
				$resposta4 = $_POST["resposta4"];
				$resposta5 = $_POST["resposta5"];
				$resposta6 = $_POST["resposta6"];
				$resposta7 = $_POST["resposta7"];
				$resposta8 = $_POST["resposta8"];
				$resposta9 = $_POST["resposta9"];
				$resposta10 = $_POST["resposta10"];
				
				echo $ano . "<br />"; 
				echo $resposta1 . "<br />"; 
				echo $resposta2 . "<br />"; 
				echo $resposta3 . "<br />"; 
				echo $resposta4 . "<br />"; 
				echo $resposta5 . "<br />"; 
				echo $resposta6 . "<br />"; 
				echo $resposta7 . "<br />"; 
				echo $resposta8 . "<br />"; 
				echo $resposta9 . "<br />"; 
				echo $resposta10 . "<br />"; 
				
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 1, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 2, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 3, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 4, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 5, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 6, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 7, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 8, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 9, '$resposta1', '$ano'");
				$con->query ("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES (1, 10, '$resposta1', '$ano'");
								
				echo "Sua inscrição para o Encontro de Egressos " . $ano. " foi realizada com sucesso! <br />";
			
				$con->close();
		
			?>
		</div>
	</section>

      <div class="footer">
        <a href="https://pt-br.facebook.com/ifgoianoceresoficial"><img src="src/imagem/facebook.png" alt="Facebook"></a>/ifgoianoceresoficial
        <a href="https://www.instagram.com/ifgoianoceres"><img src="src/imagem/instagram.png" alt="Instagram"></a>@ifgoianoceres
		<img src="src/imagem/telefone.png" alt="Telefone">(62) 3307-7100
		<a href="https://www.ifgoiano.edu.br/ceres"><img src="src/imagem/site.png" alt="Site"></a>www.ifgoiano.edu.br/ceres
      </div>

  </body>

</html>