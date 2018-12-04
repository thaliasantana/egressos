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

  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){

    <!-- Carrega os Paises -->
    $('#btnPais').click(function(e){
      $('#btnPais').hide();

      $.getJSON('consulta.php?opcao=pais', function (dados){

         if (dados.length > 0){
          var option = '<option>Paises</option>';
          $.each(dados, function(i, obj){
            option += '<option value="'+obj.idPais+'">'+obj.nomePais+'</option>';
          })
          $('#cmbPais').html(option).show();
         }else{
           Reset();
         }
      })
    })

    <!-- Carrega os Estados -->
    $('#cmbPais').change(function(e){
      var pais = $('#cmbPais').val();

      $.getJSON('consulta.php?opcao=estado&valor='+pais, function (dados){

         if (dados.length > 0){
          var option = '<option>Estados</option>';
          $.each(dados, function(i, obj){
            option += '<option value="'+obj.idEstado+'">'+obj.nomeEstado+'</option>';
          })
         }else{
          Reset();
         }
         $('#cmbEstado').html(option).show();
      })
    })

    <!-- Carrega as Cidades -->
    $('#cmbEstado').change(function(e){
      var estado = $('#cmbEstado').val();

      $.getJSON('consulta.php?opcao=cidade&valor='+estado, function (dados){

        if (dados.length > 0){
          var option = '<option>Cidades</option>';
          $.each(dados, function(i, obj){
            option += '<option value="'+obj.idCidade+'">'+obj.nomeCidade+'</option>';
          })
        }else{
          Reset();
        }
        $('#cmbCidade').html(option).show();
      })
    })

    <!-- Resetar Selects -->
    function Reset(){

      $('#cmbPais').empty().append('<option>Carregar Países</option>>');
      $('#cmbEstado').empty().append('<option>Carregar Estados</option>>');
      $('#cmbCidade').empty().append('<option>Carregar Cidades</option>');
    }
    });
  </script>

  <body>
    <section class="container" align="left">
		<div class="alinhar">
			<label class="font">Atualizar Dados</label> <br> <br>
			<label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>

			<?php
				$con =  new mysqli("localhost", "root", "", "dbegressos");
				mysqli_set_charset($con, "utf8");

        session_start();
        $cpf = $_SESSION['cpf'];

				$sql = $con->query("select egresso.nomeEgresso, egresso.cpfEgresso, egresso.dataNascimentoEgresso,
				egresso.emailEgresso, egresso.telefoneEgresso, egresso.whatsappEgresso, egresso.sexoEgresso, egresso.enderecoEgresso,
				egresso.numeroEnderecoEgresso, egresso.setorEnderecoEgresso, egresso.complementoEgresso, cursoConcluido.idEgresso,
				cursoConcluido.anoFimCursoConcluido, cursoConcluido.anoInicioCursoConcluido, curso.idCurso, curso.nomeCurso from egresso,
				cursoConcluido, curso where cursoConcluido.idEgresso = egresso.idEgresso and cursoConcluido.idCurso = curso.idCurso
				and cpfEgresso = '$cpf';");

				if ($aux = $sql->fetch_assoc()){
					$id  = $aux["idEgresso"];

					$_SESSION['id'] = $id;

          echo "<form method='post' action='update_egresso.php'>";
					echo "Nome: <br />";
					echo "<input type='text' required name='nome' size='52' value='".$aux["nomeEgresso"]."'> <br /><br />";
					echo "E-mail: <br />";
					echo "<input type='email' name='email' size='52' value='".$aux["emailEgresso"]."'> <br /><br />";
					echo "Telefone: <br />";
					echo "<input type='text' name='telefone' size='52' value='".$aux["telefoneEgresso"]."'> <br /><br />";
					echo "WhatsApp: <br />";
					echo "<input type='text' name='whatsapp' size='52' value='".$aux["whatsappEgresso"]."'> <br /><br />";
					echo "Sexo: <br />";
					echo "<input type='text' name='sexo' size='52' value='".$aux["sexoEgresso"]."'> <br /><br />";
					echo "Endereço: <br />";
					echo "<input type='text' name='endereco' size='52' value='".$aux["enderecoEgresso"]."'> <br /><br />";
					echo "Número: <br />";
					echo "<input type='text' name='numero' size='52'  value='".$aux["numeroEnderecoEgresso"]."'> <br /><br />";
					echo "Setor: <br />";
					echo "<input type='text' name='setor' size='52' value='".$aux["setorEnderecoEgresso"]."'> <br /><br />";
					echo "Complemento: <br />";
          echo "<input type='text' name='complemento' size='52' value='".$aux["complementoEgresso"]."'> <br /><br />";
          echo "País (clique no botão ao lado): <input type='button' value='Carregar' id='btnPais'/> <br />";
          echo "<select id='cmbPais' style='width:395px;' required>
            <option>Carregar Países</option>
          </select> <br /><br />";
          echo "Estado: <br />";
          echo "<select id='cmbEstado' style='width:395px;' required>
            <option>Carregar Estados</option>
          </select> <br /><br />";
          echo "Cidade: <br />";
          echo "<select id='cmbCidade' name='cmbCidade' style='width:395px;' required>
            <option>Carregar Cidades</option>
          </select><br /> <br />";
          echo "<input type='submit' value='Avançar' class='button'/><br /><br /><br />";
					} else {
					echo "<b>CPF não cadastrado!</b><br /> <br />";
					echo "<a href='cadastrar.php'><button class='button1'>Criar Cadastro</button></a>";
					echo "<br /> <br /><br /> <br /> <br /> <br /><br /> <br /><br /> <br />";
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
