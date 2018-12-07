<?php
  session_start();

  if(!isset($_SESSION['logado'])){
    echo "<script>alert('Você não está logado!'); document.location.href='login.php';</script>";
    //header("Location: login.php");
  }
?>

<?php
  $con =  new mysqli("localhost", "root", "", "dbegressos");
  mysqli_set_charset($con, "utf8");

  $resultado = $con->query("SELECT * FROM egresso WHERE idCidade = 944;");
  $ceres = mysqli_num_rows($resultado);

  $resultado2 = $con->query("SELECT * FROM egresso WHERE idCidade = 1077;");
  $rialma = mysqli_num_rows($resultado2);

  $resultado3 = $con->query("SELECT * FROM egresso WHERE idCidade = 1081;");
  $rubia = mysqli_num_rows($resultado3);

  $resultado4 = $con->query("SELECT * FROM egresso WHERE idCidade = 939;");
  $carmo = mysqli_num_rows($resultado4);

  $resultado5 = $con->query("SELECT * FROM egresso WHERE idCidade = 1121;");
  $uruana = mysqli_num_rows($resultado5);

  $resultado6 = $con->query("SELECT * FROM egresso WHERE sexoEgresso = 'F';");
  $feminino = mysqli_num_rows($resultado6);

  $resultado7 = $con->query("SELECT * FROM egresso WHERE sexoEgresso = 'M';");
  $masculino = mysqli_num_rows($resultado7);

  $resultado8 = $con->query("SELECT * FROM resposta WHERE idOpcao = 7 and anoResposta = 2018;");
  $excelente_if = mysqli_num_rows($resultado8);

  $resultado9 = $con->query("SELECT * FROM resposta WHERE idOpcao = 8 and anoResposta = 2018;");
  $otimo_if = mysqli_num_rows($resultado9);

  $resultado10 = $con->query("SELECT * FROM resposta WHERE idOpcao = 9 and anoResposta = 2018;");
  $bom_if = mysqli_num_rows($resultado10);

  $resultado11 = $con->query("SELECT * FROM resposta WHERE idOpcao = 10 and anoResposta = 2018;");
  $regular_if = mysqli_num_rows($resultado11);

  $resultado12 = $con->query("SELECT * FROM resposta WHERE idOpcao = 11 and anoResposta = 2018;");
  $ruim_if = mysqli_num_rows($resultado12);

  $resultado13 = $con->query("SELECT * FROM resposta WHERE idOpcao = 12 and anoResposta = 2018;");
  $pessimo_if = mysqli_num_rows($resultado13);

  $resultado14 = $con->query("SELECT * FROM resposta WHERE idOpcao = 22 and anoResposta = 2018;");
  $ret_sim = mysqli_num_rows($resultado14);

  $resultado15 = $con->query("SELECT * FROM resposta WHERE idOpcao = 23 and anoResposta = 2018;");
  $ret_nao = mysqli_num_rows($resultado15);

  $resultado16 = $con->query("SELECT * FROM resposta WHERE idOpcao = 24 and anoResposta = 2018;");
  $retornou = mysqli_num_rows($resultado16);

  $resultado17 = $con->query("SELECT * FROM resposta WHERE idOpcao = 32 and anoResposta = 2018;");
  $amigos = mysqli_num_rows($resultado17);

  $resultado18 = $con->query("SELECT * FROM resposta WHERE idOpcao = 33 and anoResposta = 2018;");
  $wpp = mysqli_num_rows($resultado18);

  $resultado19 = $con->query("SELECT * FROM resposta WHERE idOpcao = 34 and anoResposta = 2018;");
  $redes = mysqli_num_rows($resultado19);

  $resultado20 = $con->query("SELECT * FROM resposta WHERE idOpcao = 35 and anoResposta = 2018;");
  $email = mysqli_num_rows($resultado20);

  $resultado21 = $con->query("SELECT * FROM resposta WHERE idOpcao = 36 and anoResposta = 2018;");
  $site = mysqli_num_rows($resultado21);
?>

<!DOCTYPE html>
<html>
  <header>
    <title> Egressos </title>
      <img src="src/imagem/logo_if.png" alt="Logo if">
      <link rel="stylesheet" type="text/css" href="src/css/style.css">
      <meta charset="utf-8">
      <nav>
        <li>ACOMPANHAMENTO DE EGRESSOS</li>
        <li><a href="logout.php">Sair</a></li> <br>
      </nav>

      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    	<script type="text/javascript">
  			google.load("visualization", "1", {packages:["corechart"]});
  			google.setOnLoadCallback(drawChart);

  			function drawChart() {

  				var dados = google.visualization.arrayToDataTable([
  				  ['Cidades', 'Egressos por cidade'],
  				  ['Ceres', <?php echo $ceres; ?>],
  				  ['Rialma', <?php echo $rialma; ?>],
  				  ['Rubiataba', <?php echo $rubia; ?>],
  				  ['Carmo do Rio Verde', <?php echo $carmo; ?>],
            ['Uruana', <?php echo $uruana; ?>],

  				]);

  				var options = {
  					title: 'Egressos por principais cidades da região',
  					is3D: true
  				};

  				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  				chart.draw(dados, options);

  				var data = google.visualization.arrayToDataTable([
  				  ['Sexo', 'Quantidade', { role: 'style' }],
  				  ['Feminino',  <?php echo $feminino; ?>, 'red'],
  				  ['Masculino',  <?php echo $masculino; ?>, 'green'],
  				]);

  				var options = {
  				 title: 'Egressos por Sexo'
  				};

  				var barras = new google.visualization.ColumnChart(document.getElementById('barras'));
  				barras.draw(data, options);

          var dados = google.visualization.arrayToDataTable([
  				  ['IF Goiano', 'Nível de Satisfação'],
  				  ['Excelente', <?php echo $excelente_if; ?>],
  				  ['Ótimo', <?php echo $otimo_if; ?>],
  				  ['Bom', <?php echo $bom_if; ?>],
  				  ['Regular', <?php echo $regular_if; ?>],
            ['Ruim', <?php echo $ruim_if; ?>],
            ['Péssimo', <?php echo $pessimo_if; ?>],
  				]);

  				var options = {
  					title: 'Nível de Satisfação dos inscritos em relação ao IF Goiano',
            pieHole: 0.4,
  				};

  				var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  				chart.draw(dados, options);

          var dados = google.visualization.arrayToDataTable([
            ['IF Goiano', 'Retornar'],
            ['Sim', <?php echo $ret_sim; ?>],
            ['Não', <?php echo $ret_nao; ?>],
            ['Já retornei', <?php echo $retornou; ?>],
          ]);

          var options = {
            title: 'Interesse de retornar a Instituição para outros cursos',
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
          chart.draw(dados, options);

          var data = google.visualization.arrayToDataTable([
            ['Meio de divulgação', 'Quantidade', { role: 'style' }],
            ['Amigos', <?php echo $amigos; ?>, '#b87333'],            // RGB value
            ['WhatsApp', <?php echo $wpp; ?>, 'silver'],            // English color name
            ['Redes Sociais', <?php echo $redes; ?>, 'gold'],
            ['E-mail', <?php echo $email; ?>, 'blue'],
            ['Site institucional', <?php echo $site; ?>, 'color: #e5e4e2' ], // CSS-style declaration
          ]);

          var options = {
            title: 'Forma de divulgação do evento atingida aos participantes',
          };

          var chart = new google.visualization.BarChart(document.getElementById("barchart"));
          chart.draw(data, options);

      }

  		  </script>
  </header>

  <body>
    <div class="content">
      <section class="container" align="left">
        <div class="alinhar">
          <!-- Todo Conteúdo Aqui-->
          <label class="font">Informações </label> <br> <br>
          <label>Gráficos e estatísticas dos inscritos no evento</label> <br> <br> <br>

          <?php
    				$con =  new mysqli("localhost", "root", "", "dbegressos");

    				$data = new DateTime();
    				$ano = $data->format('Y');

            echo "<b>Ano de " . $ano . "</b>";
          ?>

          <div id="piechart" style="width: 900px; height: 500px;"></div>
          <div id="barras" style="width: 900px; height: 500px;"></div>
          <div id="piechart2" style="width: 900px; height: 500px;"></div>
          <div id="piechart3" style="width: 900px; height: 500px;"></div>
          <div id="barchart" style="width: 900px; height: 500px;"></div>

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
