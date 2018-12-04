<?php
	session_start();
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	if ((isset($_POST['usuario'])) && (isset($_POST['senha']))){
		$con =  new mysqli("localhost", "root", "", "dbegressos");
		$logar = $con->query("SELECT * FROM usuario WHERE nomeUsuario = '$usuario' and senhaUsuario = '$senha';");

		if(mysqli_num_rows($logar) > 0){
			$_SESSION['logado'] = "sim";
			header("Location: acompanhamento.php");
		}
		else {
			echo "<script>alert('Acesso não permitido e/ou usuário e senha inválida!!'); document.location.href='login.php';</script>";
		}
	}
?>
