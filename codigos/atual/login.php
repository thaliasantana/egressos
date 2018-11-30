<?php
	session_start();
?>
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
              
                <label class="font"> Acompanhamento de Egressos </label> <br> <br>
				
                <form method="post" action="validar.php">
                    E-mail <br />
                    <input type="email" name="email" id="inputEmail" size="50" required autofocus/><br /> <br />

                    Senha <br />
                    <input type="password" name="senha" id="inputPassword" size="50" required/><br /> <br />

                    <button class="button type="submit"> Entrar</button>
                </form> <br /> <br /> <br />
				
				<!--Emitir erro-->
				<p class="text-left">
					<?php if(isset($_SESSION['loginErro'])){
						echo $_SESSION['loginErro'];
						unset ($_SESSION['loginErro']);
					}?>
				</p>	
				
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