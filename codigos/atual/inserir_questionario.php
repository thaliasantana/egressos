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

				$data = new DateTime();
				$ano = $data->format('Y');
				
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
			
				/*echo $ano . "<br />"; ;
				echo $resposta1 . "<br />"; 
				echo $resposta2 . "<br />"; 
				echo $resposta3 . "<br />"; 
				echo $resposta4 . "<br />"; 
				echo $resposta5 . "<br />"; 
				echo $resposta6 . "<br />"; 
				echo $resposta7 . "<br />"; 
				echo $resposta8 . "<br />"; 
				echo $resposta9 . "<br />"; 
				echo $resposta10 . "<br />"; */
				
				session_start();
				$id = $_SESSION['id'];
				//echo $id; . "<br />";
				
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 1, $resposta1, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 2, $resposta2, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 3, $resposta3, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 4, $resposta4, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 5, $resposta5, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 6, $resposta6, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 7, $resposta7, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 8, $resposta8, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 9, $resposta9, $ano)");
				$con->query("INSERT INTO resposta (idEgresso, idPergunta, idOpcao, anoResposta) VALUES ($id, 10, $resposta10, $ano)");
								
				echo "<b>Sua inscrição para o Encontro de Egressos " . $ano. " foi realizada com sucesso!</b> <br />";
				echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
			
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