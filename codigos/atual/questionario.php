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
        <div class="content">
            <section class="container" align="left">
            <div class="alinhar">
			
				<label class="font">Encontro de Egressos</label> <br> <br>
				<label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>
				
				<?php
					$con =  new mysqli("localhost", "root", "", "dbegressos");
					mysqli_set_charset($con, "utf8");
					$resultado = $con->query("SELECT * FROM pergunta");
		
					echo "<form method='post' action='inserir_questionario.php'>";
					while ($pergunta = $resultado->fetch_assoc()) {
						echo "Pergunta nº " . $pergunta['idPergunta'] . " - ";
						echo $pergunta['enunciadoPergunta'];
						echo "<br>";

						$resultado2 = $con->query("SELECT * FROM opcao WHERE idPergunta = " . $pergunta['idPergunta']);
						while ($opcao = $resultado2->fetch_assoc()) {
							echo "<input type='radio' name='resposta" . $pergunta['idPergunta'];
							echo "' value='" . $opcao['idOpcao'] . "'> " . $opcao['texto'];
							echo "<br>";
						}
						echo "<br><br>";
					}
					echo "<input type='submit' value='Avançar' class='button'/>";
					echo "</form>";
				?>
			</div>
		</section>
    </div>
        <footer class="footer">
            <a href="https://pt-br.facebook.com/ifgoianoceresoficial"><img src="src/imagem/facebook.png" alt="Facebook"></a>/ifgoianoceresoficial
            <a href="https://www.instagram.com/ifgoianoceres"><img src="src/imagem/instagram.png" alt="Instagram"></a>@ifgoianoceres
            <img src="src/imagem/telefone.png" alt="Telefone">(62) 3307-7100
            <a href="https://www.ifgoiano.edu.br/ceres"><img src="src/imagem/site.png" alt="Site"></a>www.ifgoiano.edu.br/ceres

        </footer>
    </body>
</html>