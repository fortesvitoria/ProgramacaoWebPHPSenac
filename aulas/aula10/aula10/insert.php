<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Users</title>
	<style type="text/css">
		input{
			display: block;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<form method="post">
		<label>Nome do Usuário</label>
		<input type="text" name="nome" required>
		<label>Seu e-mail</label>
		<input type="email" name="email" required>
		<label>Cadastre uma senha</label>
		<input type="password" name="senha" required>

		<input type="submit" name="cadastrar" value="Cadastrar">
	</form>
	<div class="aviso">
		<?php insertUser($connect); ?>
	</div>

	<?php 
		$usuarios = select($connect, "users", "data >= '2025-1010' "); 
		//print_r($usuarios);
		if (!empty($usuarios)) { ?>
			<table border="1">
				<thead>
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $usuario) { ?>
						<tr>
							<td><?php echo $usuario['nome']; ?></td>
							<td><?php echo $usuario['email']; ?></td>
							<td><?php echo $usuario['data']; ?></td>
						</tr>
					<?php } ?>
				</tbody>				
			</table>
		<?php } ?>
</body>
</html>