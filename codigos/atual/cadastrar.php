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
                
                <!-- Todo Conteúdo Aqui-->
                
                <label class="font"> Inscrever </label> <br> <br>
                <label>Realize sua inscrição para o Encontro de Egressos do Campus Ceres do IF Goiano</label> <br> <br> <br>

                <form method="post" action="inserir.php">
                    Nome completo: <br />
                    <input type="text" name="nome" size="70"  required/><br /> <br />

                    CPF (sem traços e pontos): <br />
                    <input type="text" name="cpf" size="70"required/><br /> <br />

                    Data de Nascimento: <br />
                    <input type="date" name="data"required/> <br /> <br />

					E-mail: <br />
                    <input type="email" name="email" size="70" required/><br /> <br />
					
					Telefone (sem traços e espaços): <br />
                    <input type="text" name="telefone" size="70" required/><br /> <br />

					WhatsApp (sem traços e espaços): <br />
                    <input type="text" name="whatsapp" size="70" required/><br /> <br />
					
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
					
					Curso concluído: <br />
					
					<?php
						$con =  new mysqli("localhost", "root", "", "dbegressos");
						mysqli_set_charset($con, "utf8");
						$sql  = mysqli_query($con, "select nomeCurso from curso"); ?>
						
					<select style="width:520px;" required>
						<?php 
							while($resultado = mysqli_fetch_array($sql)){ ?>
								<option value="<?=  $resultado['id'] ?>"><?php echo $resultado['nomeCurso']; ?></option>
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