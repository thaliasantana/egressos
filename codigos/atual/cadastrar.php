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
        <div class="content">
          <section class="container" align="left">
            <div class="alinhar">

                <!-- Todo Conteúdo Aqui-->

                <label class="font">Inscrever</label> <br> <br>
                <label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>

                <form method="post" action="inserir.php">
                    Nome completo: <br />
                    <input type="text" name="nome" size="70" required/><br /> <br />

                    CPF (sem traços e pontos): <br />
                    <input type="text" name="cpf" size="70"required/><br /> <br />

                    Data de Nascimento: <br />
                    <input type="date" name="data"required/> <br /> <br />

					          E-mail: <br />
                    <input type="email" name="email" size="70" required/><br /> <br />

					          Telefone (sem traços e espaços): <br />
                    <input type="text" name="telefone" size="70" required/><br /> <br />

					          WhatsApp (sem traços e espaços): <br />
                    <input type="text" name="whatsapp" size="70"/><br /> <br />

          					Sexo: <br />
          					<select name="sexo" required>
          						<option value="F">F</option>
          						<option value="M">M</option>
          					</select> <br /> <br />

                    Endereço: <br />
                    <input type="text" name="endereco" size="70" required/><br /> <br />

					          Número: <br />
                    <input type="text" name="numero" size="70" required/><br /> <br />

                    Setor: <br />
                    <input type="text" name="setor" size="70" required/><br /> <br />

                    Complemento: <br />
                    <input type="text" name="complemento" size="70" required/><br /> <br />

          					País (clique no botão ao lado): <input type="button" value="Carregar" id="btnPais"/> <br />
          					<select id="cmbPais" style="width:520px;" required>
          						<option>Carregar Países</option>
          					</select> <br /><br />

          					Estado: <br />
          					<select id="cmbEstado" style="width:520px;" required>
          						<option>Carregar Estados</option>
          					</select> <br /><br />

          					Cidade: <br />
          					<select id="cmbCidade" name="cmbCidade" style="width:520px;" required>
          						<option>Carregar Cidades</option>
          					</select>
          					<br /> <br />

          					Curso concluído: <br />

          					<?php
          						$con =  new mysqli("localhost", "root", "", "dbegressos");
          						mysqli_set_charset($con, "utf8");
          						$sql = $con->query("select idCurso, nomeCurso from curso"); ?>

            					<select name="curso" style="width:520px;" required>
            						<?php
            							while($resultado = $sql->fetch_assoc()){ ?>
            								<option value="<?php echo $resultado['idCurso'] ?>"><?php echo $resultado['nomeCurso']; ?></option>
            						<?php } ?>
            					</select>
          					<br /> <br />

          					Ano de início do curso: <br />
                    <input type="text" name="inicio" size="70" required/><br /> <br />

                    Ano de fim do curso: <br />
                    <input type="text" name="fim" size="70" required/><br /> <br />

                    <input type="submit" value="Enviar" class="button"/>
                </form>
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
