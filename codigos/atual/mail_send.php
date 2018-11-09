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
	
	mail($to, $assunto, $mensagem);
  
	header("location:obrigada.html");
?>