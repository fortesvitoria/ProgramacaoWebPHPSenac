<?php

$user = "admin";
$pass = "admin123";
if (isset($_POST['logar'])) {
	if ( !empty($_POST['usuario']) and !empty($_POST['senha'])) {
		if ($_POST['usuario'] == "admin" and $_POST['senha'] == "admin123") {
			session_start();
			$_SESSION['usuario'] = $_POST['usuario'];
			$_SESSION['ativa'] = true;
			echo "<a href='admin.php'>Acessar</a>";
			//redireciona páginas
			header("location: admin.php");
		}else{
			echo "Usuário ou senha inválidos";
			echo "<a href='login.php'>Voltar</a>";
		}
	}
} 


//Inicia a sessão
/*session_start();
$_SESSION['usuario'] = "Fernando";
$_SESSION['email'] = "fe@email.com";
$_SESSION['ativa'] = true;*/