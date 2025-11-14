<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload de Arquivos</title>
	<style>
		form{
			width: 250px;
			margin: 0 auto;
		}
		h2{
			text-align: center;
		}
		input{
			display: block;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h2>Faça o envio do seu arquivo:</h2>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="nome" placeholder="Seu Nome" required>
		<input type="file" name="arquivo" required>

		<button name="enviar">Enviar Arquivo</button>
	</form>
	<?php uploadImages(); ?>

</body>
</html>