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
			<label> Realize sua inscrição para o Encontro de Egressos 2019 </label> <br> <br> <br>
			
			<?php
				$con =  new mysqli("localhost", "root", "", "dbegressos");

				$cpf = $_POST["cpf"];	
				
				$sql = mysqli_query($con, "select * from egresso where cpfEgresso = '$cpf';") or die (
				mysqli_error($con)
				);
				
				if ($aux = mysqli_fetch_assoc($sql)){
					echo "<a href='update.php'>Alterar Cadastro</a> <br />";
					echo "<a href='questionario.php'>Avançar</a> <br />";
					echo "Nome: <br />";
					echo "<input type='text' name='nome' value='".$aux["nomeEgresso"]."'> <br /><br />";
					echo "CPF: <br />";
					echo "<input type='text' name='cpf' value='".$aux["cpfEgresso"]."'> <br /><br />";
					echo "Data de Nascimento: <br />";
					echo "<input type='date' name='data' value='".$aux["dataNascimentoEgresso"]."'> <br /><br />";
					echo "E-mail: <br />";
					echo "<input type='email' name='email' value='".$aux["emailEgresso"]."'> <br /><br />";
					echo "Telefone: <br />";
					echo "<input type='text' name='telefone' value='".$aux["telefoneEgresso"]."'> <br /><br />";
					echo "WhatsApp: <br />";
					echo "<input type='text' name='whatsapp' value='".$aux["whatsappEgresso"]."'> <br /><br />";
					echo "Sexo: <br />";
					echo "<input type='text' name='sexo' value='".$aux["sexoEgresso"]."'> <br /><br />";
					echo "Endereço: <br />";
					echo "<input type='text' name='endereco' value='".$aux["enderecoEgresso"]."'> <br /><br />";
					echo "Número: <br />";
					echo "<input type='text' name='numero' value='".$aux["numeroEnderecoEgresso"]."'> <br /><br />";
					echo "Setor: <br />";
					echo "<input type='text' name='setor' value='".$aux["setorEnderecoEgresso"]."'> <br /><br />";
					echo "Complemento: <br />";
					echo "<input type='text' name='complemento' value='".$aux["complementoEgresso"]."'> <br /><br />";
					//echo "<a href='update.php'> Alterar Cadastro </a> <br />";
					//echo "<a href='perguntas.php'> Avançar </a> <br />";
				} else {
					echo "CPF não cadastrado! <br /> <br />"; 
					echo "<a href='cadastrar.html'> Criar Cadastro </a>";
				}

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