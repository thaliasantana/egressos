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
			<label class="font">Inscrever</label> <br> <br>
			<label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>

			<?php
				$con =  new mysqli("localhost", "root", "", "dbegressos");

				$nome = $_POST["nome"];
				$cpf = $_POST["cpf"];
				$data = $_POST["data"];
				$email = $_POST["email"];
				$telefone = $_POST["telefone"];
				$whatsapp = $_POST["whatsapp"];
				$sexo = $_POST["sexo"];
				$endereco = $_POST["endereco"];
				$numero = $_POST["numero"];
				$setor = $_POST["setor"];
				$complemento = $_POST["complemento"];
				$cidade = $_POST["cmbCidade"];
				$curso = $_POST["curso"];
				$inicio = $_POST["inicio"];
				$fim = $_POST["fim"];

				/*echo $nome . "<br />";
				echo $cpf . "<br />";
				echo $data . "<br />";
				echo $email . "<br />";
				echo $telefone . "<br />";
				echo $whatsapp . "<br />";
				echo $sexo . "<br />";
				echo $endereco . "<br />";
				echo $numero . "<br />";
				echo $setor . "<br />";
				echo $complemento . "<br />";
				echo $cidade . "<br />";
				echo $curso . "<br />";
				echo $inicio . "<br />";
				echo $fim . "<br />"; */

				function validaCPF($cpf){
					// Verifiva se o número digitado possui todos os dígitos
					$cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

					// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
					if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999'){
						return false;
					} else {   // Calcula os números para verificar se o CPF é verdadeiro
						for ($t = 9; $t < 11; $t++) {
							for ($d = 0, $c = 0; $c < $t; $c++) {
								$d += $cpf{$c} * (($t + 1) - $c);
							}

							$d = ((10 * $d) % 11) % 10;

							if ($cpf{$c} != $d) {
								return false;
							}
						}

						return true;
					}
		       }

				// Verifica se o botão de validação foi acionado
				if(isset($_POST['cpf'])){
					// Adiciona o numero enviado na variavel $cpf_enviado, poderia ser outro nome, e executa a função acima
					$cpf_enviado = validaCPF($_POST['cpf']);
					// Verifica a resposta da função e exibe na tela

					if ($cpf_enviado == true){

						$con->query ("insert into egresso (nomeEgresso, cpfEgresso, dataNascimentoEgresso, emailEgresso, telefoneEgresso,
						whatsappEgresso, sexoEgresso, enderecoEgresso, numeroEnderecoEgresso, setorEnderecoEgresso, complementoEgresso, idCidade)
						values ('$nome', '$cpf', '$data', '$email', '$telefone', '$whatsapp', '$sexo', '$endereco', '$numero', '$setor',
								'$complemento', '$cidade')");

						$sql = $con->query("select idEgresso from egresso where cpfEgresso = '$cpf';");

						if ($aux = $sql->fetch_assoc()){
							$id = $aux["idEgresso"];
							//echo $idEgresso . "<br />";

							session_start();
							$_SESSION['id'] = $id;

							$con->query  ("insert into cursoConcluido (anoFimCursoConcluido,anoInicioCursoConcluido, idCurso, idEgresso)
							values ('$fim', '$inicio', '$curso', '$id')");

							echo "<b>Seu pré-cadastro foi realizado com sucesso!</b><br /><br />";

							echo "<a href='questionario.php'><button class='button'>Avançar</button></a><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";

							$con->close();
						}

				} else if($cpf_enviado == false){
						echo "<b>CPF Incorreto!</b><br /> <br />";
						echo "<a href='cadastrar.php'><button class='button2'>Tentar novamente</button></a> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />  <br /> <br />";
					}
	            }

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
