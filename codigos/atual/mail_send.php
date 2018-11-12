<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assun = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	$to = "thaliassantana15@gmail.com";
	$assunto = "[ENCONTRO DE EGRESSOS] Mensagem de ".$email." - ".$assun;

	echo $nome . "<br />";
	echo $email . "<br />";
	echo $mensagem . "<br />";
	echo $to . "<br />";
	echo $assunto;
	
    $a = mail($to, $assunto, $mensagem);

    if($a){
        echo "True";
    } else {
        echo "False";
    }
  
	//header("location:obrigada.html");
?>