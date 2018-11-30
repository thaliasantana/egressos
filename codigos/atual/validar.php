<?php
	session_start();
	
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido!";
		header("Location: login.php");
	}
?>