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
    			<label class="font">Encontro de Egressos</label> <br> <br>
    			<label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>

    			<?php
    				$con =  new mysqli("localhost", "root", "", "dbegressos");
    				mysqli_set_charset($con, "utf8");

    				$cpf = $_POST["cpf"];

            if (!isset($_POST["cpf"])){
              echo "<script>alert('Insira seu CPF primeiro!!'); document.location.href='encontro_de_egressos.html';</script>";
            }

    				$sql = $con->query("select egresso.nomeEgresso, egresso.cpfEgresso, egresso.dataNascimentoEgresso,
    				egresso.emailEgresso, egresso.telefoneEgresso, egresso.whatsappEgresso, egresso.sexoEgresso, egresso.enderecoEgresso,
    				egresso.numeroEnderecoEgresso, egresso.setorEnderecoEgresso, egresso.complementoEgresso, egresso.idCidade,
            cursoConcluido.idEgresso, cursoConcluido.anoFimCursoConcluido, cursoConcluido.anoInicioCursoConcluido,
            curso.idCurso, curso.nomeCurso, cidade.idCidade, cidade.nomeCidade, cidade.idEstado, estado.idEstado,
            estado.nomeEstado from
            egresso, cursoConcluido, curso, cidade, estado where
            cursoConcluido.idEgresso = egresso.idEgresso and cursoConcluido.idCurso = curso.idCurso
            and egresso.idCidade = cidade.idCidade
            and cidade.idEstado = estado.idEstado
            and cpfEgresso = '$cpf';");

    				if ($aux = $sql->fetch_assoc()){
    					$id  = $aux["idEgresso"];
              $cpf = $aux["cpfEgresso"];

    					session_start();
    					$_SESSION['id'] =  $id;
              $_SESSION['cpf'] =  $cpf;

    					echo "Nome: <br />";
    					echo "<input type='text' disabled name='nome' size='52' value='".$aux["nomeEgresso"]."'> <br /><br />";
    					echo "CPF: <br />";
    					echo "<input type='text' disabled name='cpf' size='52' value='".$aux["cpfEgresso"]."'> <br /><br />";
    					echo "Data de Nascimento: <br />";
    					echo "<input type='date' disabled name='data' value='".$aux["dataNascimentoEgresso"]."'> <br /><br />";
    					echo "E-mail: <br />";
    					echo "<input type='email' disabled name='email' size='52' value='".$aux["emailEgresso"]."'> <br /><br />";
    					echo "Telefone: <br />";
    					echo "<input type='text' disabled name='telefone' size='52' value='".$aux["telefoneEgresso"]."'> <br /><br />";
    					echo "WhatsApp: <br />";
    					echo "<input type='text' disabled name='whatsapp' size='52' value='".$aux["whatsappEgresso"]."'> <br /><br />";
    					echo "Sexo: <br />";
    					echo "<input type='text' disabled name='sexo' size='52' value='".$aux["sexoEgresso"]."'> <br /><br />";
    					echo "Endereço: <br />";
    					echo "<input type='text' disabled name='endereco' size='52' value='".$aux["enderecoEgresso"]."'> <br /><br />";
    					echo "Número: <br />";
    					echo "<input type='text' disabled name='numero' size='52'  value='".$aux["numeroEnderecoEgresso"]."'> <br /><br />";
    					echo "Setor: <br />";
    					echo "<input type='text' disabled name='setor' size='52' value='".$aux["setorEnderecoEgresso"]."'> <br /><br />";
    					echo "Complemento: <br />";
    					echo "<input type='text' disabled name='complemento' size='52' value='".$aux["complementoEgresso"]."'> <br /><br />";
    					echo "Cidade: <br />";
    					echo "<input type='text' disabled name='cidade' size='52' value='".$aux["nomeCidade"]."'> <br /><br />";
    					echo "Estado: <br />";
    					echo "<input type='text' disabled name='estado' size='52' value='".$aux["nomeEstado"]."'> <br /><br />";
    					echo "Curso concluído: <br />";
    					echo "<input type='text' disabled name='curso' size='52' value='".$aux["nomeCurso"]."'> <br /><br />";
    					echo "Ano de início do curso: <br />";
    					echo "<input type='text' disabled name='inicio' size='52' value='".$aux["anoInicioCursoConcluido"]."'> <br /><br />";
    					echo "Ano de fim do curso: <br />";
    					echo "<input type='text' disabled name='fim' size='52' value='".$aux["anoFimCursoConcluido"]."'> <br /><br />";
    					echo "<a href='questionario.php'><button class='button'>Avançar</button></a><br /><br /><br />";
    					echo "<a href='update.php'><button class='button1'>Alterar Cadastro</button></a> <br />";
    					} else {
    					echo "<b>CPF não cadastrado!</b><br /> <br />";
    					echo "<a href='cadastrar.php'><button class='button1'>Criar Cadastro</button></a>";
    					echo "<br /> <br /><br /> <br /> <br /> <br /><br /> <br /><br /> <br />";
    				}
            $con->close();
          ?>
        </div>
      </section>
      <footer class="footer">
        <a href="https://pt-br.facebook.com/ifgoianoceresoficial"><img src="src/imagem/facebook.png" alt="Facebook"></a>/ifgoianoceresoficial
        <a href="https://www.instagram.com/ifgoianoceres"><img src="src/imagem/instagram.png" alt="Instagram"></a>@ifgoianoceres
        <img src="src/imagem/telefone.png" alt="Telefone">(62) 3307-7100
        <a href="https://www.ifgoiano.edu.br/ceres"><img src="src/imagem/site.png" alt="Site"></a>www.ifgoiano.edu.br/ceres
      </footer>
  </body>
</html>
