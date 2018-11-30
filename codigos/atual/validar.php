<?php
	session_start();
	
	if((isset($_POST['email'])) && if(isset($_POST['senha']))){
		
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválida.";
		header("Location: login.html");
	}
?>