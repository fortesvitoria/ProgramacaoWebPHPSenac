<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Login</title>
	<style type="text/css">
		.login{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.login form{
			width: 350px;
			border: solid 1px #333;
			border-radius: 12px;
			padding: 20px;
		}
		.login input{
			width: 100%;
			box-sizing: border-box;
			margin-bottom: 10px;
			padding: 10px;
			box-shadow: inset 2px 2px 3px #333;
			border-radius: 10px;
		}
		.login button{
			width: 100%;
			border-radius: 10px;
			background: #333;
			color: #fff;
			padding: 10px;
		}
	</style>
</head>
<body>

	<div class="login">		
		<form method="post">
			<h2>Acesso ao Sistema</h2>
			<input type="email" name="email" placeholder="Seu E-mail" required>
			<input type="password" name="senha" placeholder="Sua Senha" required>
			<button name="logar">Acessar</button>
		</form>
		<div class="aviso">
			<?php login($connect); ?>
		</div>
	</div>

</body>
</html>