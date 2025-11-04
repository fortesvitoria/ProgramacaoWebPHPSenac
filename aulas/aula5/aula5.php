<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulários com PHP</title>
</head>
<body>
	<form method="post" action="">
		<label>Nome:</label>
		<input type="text" name="nome" required>

		<label>E-mail</label>
		<input type="email" name="email" required>

		<label>Sua Idade</label>
		<input type="number" name="idade">
		<button name="enviar">Cadastrar</button>
	</form>
	<?php 
		//print_r($_POST);
		if(isset($_POST['enviar'])){
			$erros = [];

			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			if ( strlen($_POST['nome']) <= 3) {
				$erros[] = "Preencha seu Nome completo.";
			}

			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

			if ( empty($email) ) {
				$erros[] = "Preencha seu E-mail Corretamente.";
			}
			$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

			if ( $_POST['idade'] < 18 ) {
				$erros[] = "Cadastro somente para maiores de idade.";
			}
			if ( !empty($erros) ) {
				foreach ($erros as $erro) {
					echo "<p>$erro</p>";
				}
			}else{
				//Continuaremos com o envio do Formulário (dados)
				echo "Nome: " . $nome . "<br>";
				echo "E-mail: " . $email . "<br>";
				echo "Idade: " . $idade . "<br>";
			}			
		}
	?>
</body>
</html>