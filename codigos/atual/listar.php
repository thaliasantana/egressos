<!DOCTYPE html>
<html>
    <header>
        <title> Egressos </title>

        <img src="src/imagem/logo_if.png" alt="Logo if">
        <link rel="stylesheet" type="text/css" href="src/css/style.css">
        <meta charset="utf-8">

        <nav>
            <li>EGRESSOS</li>
            <li><a href="acompanhamento.php">Visualizar Gráficos</a></li>
            <li><a href="listar.php">Lista de Inscritos</a></li>
            <li><a href="logout.php">Sair</a></li> <br>
        </nav>

    </header>

    <body>
        <div class="content">
            <section class="container" align="left">
            <div class="alinhar">

                <!-- Todo Conteúdo Aqui-->
                <label class="font">Acompanhamento de Egressos </label> <br> <br>
                <label>Informações sobre inscrições e estatísticas dos inscritos no evento</label> <br> <br> <br>

                <?php
          				$con =  new mysqli("localhost", "root", "", "dbegressos");
                  mysqli_set_charset($con, "utf8");

          				$data = new DateTime();
          				$ano = $data->format('Y');

                  echo "<b>Lista de inscritos do ano de " . $ano . " por nome, curso e ano de conclusão</b><br /><br /><br />";

                  $listar = mysqli_query($con, "select egresso.idEgresso, egresso.nomeEgresso, cursoConcluido.idEgresso,
                  curso.idCurso, curso.nomeCurso, cursoConcluido.anoFimCursoConcluido from egresso, cursoConcluido, curso where
                  cursoConcluido.idEgresso = egresso.idEgresso and cursoConcluido.idCurso = curso.idCurso order by
                  egresso.nomeEgresso asc;") or die (
                  mysqli_error($con)
                  );

                  echo "<table border=1 cellspacing=0 cellpadding=3 bordercolor='666633'>";
                  echo "<th width = '400px'>Nome Completo</th>";
                  echo "<th width = '500px'>Curso</th>";
                  echo "<th width = '100px'>Ano Conclusão</th>";

                  while ($aux = mysqli_fetch_assoc($listar)){
                    echo "<table border=1 cellspacing=0 cellpadding=3 bordercolor='666633'>";
                    echo "<tr>";
                    echo "<td width = '400px'>" . $aux["nomeEgresso"] . "</td>";
                    echo "<td width = '500px'>" . $aux["nomeCurso"] . "</td>";
                    echo "<td width = '100px'>" . $aux["anoFimCursoConcluido"] . "</td>";
                    //echo "Nome: " . $aux["nomeEgresso"] . " - Curso: " . $aux["nomeCurso"] . "<br />";
                    echo "</tr>";
                    echo "</table>";
                  }

              $con->close();

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
