<!DOCTYPE html>
<html lang="en">
<head>
    <title>Questionário</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
		
        $conexao = new mysqli("localhost", "root", "", "dbegressos");
		mysqli_set_charset($conexao, "utf8");
        $resultado = $conexao->query("SELECT * FROM pergunta");

        while ($pergunta = $resultado->fetch_assoc()) {
            echo "Pergunta nº " . $pergunta['idPergunta'] . " - ";
            echo $pergunta['enunciadoPergunta'];
            echo "<br>";

            $resultado2 = $conexao->query("SELECT * FROM opcao WHERE idPergunta = " . $pergunta['idPergunta']);
            while ($opcao = $resultado2->fetch_assoc()) {
                // No script seguinte (se utilizou GET, por exemplo), poderia pegar a variável
                // $_GET['resposta1'] e nela existiria o valor (idOpcao) da opção marcada. Isso seria
                // útil no momento da inserção das respostas que o usuário forneceu.
                echo "<input type='radio' name='resposta" . $pergunta['idPergunta'];
                echo "' value='" . $opcao['idOpcao'] . "'> " . $opcao['texto'];
                // Teste também sem esse <br> para visualizar a diferença no layout.
                echo "<br>";
            }
            echo "<br><br>";
        }
    ?>
</body>
</html>