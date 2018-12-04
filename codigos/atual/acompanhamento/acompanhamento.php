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

    $sql = "SELECT * FROM egresso WHERE idCidade = '944';";
    $resultado = mysqli_query($con, $sql);
    $ceres = mysqli_num_rows($resultado);

    $sql2 = "SELECT * FROM egresso WHERE idCidade = '1077';";
    $resultado2 = mysqli_query($con, $sql2);
    $rialma = mysqli_num_rows($resultado2);

    $sql3 = "SELECT * FROM egresso WHERE idCidade = '1081';";
    $resultado3 = mysqli_query($con, $sql3);
    $rubia = mysqli_num_rows($resultado3);

    $sql4 = "SELECT * FROM egresso WHERE idCidade = '939';";
    $resultado4 = mysqli_query($con, $sql4);
    $carmo = mysqli_num_rows($resultado4);

    $sql5 = "SELECT * FROM egresso WHERE idCidade = '1121';";
    $resultado5 = mysqli_query($con, $sql5);
    $uruana = mysqli_num_rows($resultado5);

    $sql6 = "SELECT * FROM egresso WHERE sexoEgresso = 'F';";
    $resultado6 = mysqli_query($con, $sql6);
    $feminino = mysqli_num_rows($resultado6);

    $sql7 = "SELECT * FROM egresso WHERE sexoEgresso = 'M';";
    $resultado7 = mysqli_query($con, $sql7);
    $masculino = mysqli_num_rows($resultado7);
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
    						//is3D: true
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
