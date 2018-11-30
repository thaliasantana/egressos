<?php
	session_start();
	include_once("conexao.php");
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
	/*$usuario = mysqli_real_escape_string($con, $_POST['email']); #Não permite caracteres especiais, como aspas.
		$senha = mysqli_real_escape_string($con, $_POST['senha']); #Não permite caracteres especiais, como aspas.
		$senha = md5($senha);
		
		if(($senha == "123456789") && ($usuario == "iankatalitaa@hotmail.com")){
			header("Location: sobre.html");
		}else{
			$_SESSION['loginErro'] = "Usuário ou senha inválido!";
			header("Location: login.php");
		}
	*/	
		
		
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido!";
		header("Location: login.php");
	}
?>