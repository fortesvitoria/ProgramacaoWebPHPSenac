<?php 
	session_start();
	require_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bem vindo</title>
</head>
<body>
<?php if (isset($_SESSION['ativa'])) { ?>	
	<h1>Bem vindo, <?php echo $_SESSION['nome']; ?></h1>
	<h2>Essa é a área para gerenciar seu site.</h2>
	<a href="sair.php"> Sair </a>

	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Data</th>
				<th>Ações</th>				
			</tr>
		</thead>
		<tbody>
		<?php 
			$usuarios = buscarDados($connect, "users", $where = 1, "nome");
			foreach ($usuarios as $usuario) {
		?>
			<tr>
				<td><?php echo $usuario['id']; ?></td>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><?php echo $usuario['data']; ?></td>
				<td>
					<a href="deleteUser.php?id=<?php echo $usuario['id'];?>&nome=<?php echo $usuario['nome']; ?> ">
						Excluir
					</a>
					- 
					<a href="updateUser.php?id=<?php echo $usuario['id']; ?>">
						Editar
					</a>

				</td>
			</tr>				
		<?php }	?>
		</tbody>
	</table>




<?php 
	} else {
		echo "<h2> Acesso Bloqueado </h2>";
	} 
?>
</body>
</html>