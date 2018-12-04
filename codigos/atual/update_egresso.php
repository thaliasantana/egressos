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
          <label class="font">Atualizar Dados</label> <br> <br>
			    <label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>

          <?php
    				$con =  new mysqli("localhost", "root", "", "dbegressos");

    				$nome = $_POST["nome"];
    				$email = $_POST["email"];
    				$telefone = $_POST["telefone"];
    				$whatsapp = $_POST["whatsapp"];
    				$sexo = $_POST["sexo"];
    				$endereco = $_POST["endereco"];
    				$numero = $_POST["numero"];
    				$setor = $_POST["setor"];
    				$complemento = $_POST["complemento"];
    				$cidade = $_POST["cmbCidade"];

            session_start();
    				$id = $_SESSION['id'];

    				$con->query ("update egresso set nomeEgresso = '$nome', emailEgresso = '$email', telefoneEgresso = '$telefone',
    				whatsappEgresso = '$whatsapp', sexoEgresso = '$sexo', enderecoEgresso = '$endereco', numeroEnderecoEgresso = '$numero',
            setorEnderecoEgresso = '$setor', complementoEgresso = '$complemento', idCidade = '$cidade' where idEgresso = '$id';
    				");

    				echo "<b>Seus dados foram atualizados com sucesso!</b><br /><br />";

    				echo "<a href='questionario.php'><button class='button'>Avançar</button></a><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";

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
