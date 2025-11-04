<?php require_once "dados.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Usuários</title>
</head>
<body>
	<h1>Usuários cadastrados</h1>
	<?php 
		$order = "asc";
		if (isset($_GET['order'])) {			
			if($_GET['order'] == "asc"){
				//Ordena o array em ordem crescente
				asort($dados);
				$order = "desc";
			}else{
				//ordem decrescente
				arsort($dados);
				$order = "asc";
			}			
		}			
	?>
	<table border="1">
		<thead>
			<tr>
				<th>
					<a href="?order=<?php echo $order; ?>">Nome</a>
				</th>
				<th>E-mail</th>
				<th>Telefone</th>
				<th>Data de Cadastro</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($dados as $dado) : ?>
				<tr>
					<td><?php echo $dado['nome']; ?></td>
					<td><?php echo $dado['email']; ?></td>
					<td><?php echo $dado['telefone']; ?></td>
					<td><?php echo $dado['cadastro']; ?></td>
				</tr>			
		<?php endforeach; ?>
		</tbody>		
	</table>
	<div>		
		<a href="?order=asc">Mudar Ordem</a>
	</div>
	<!-- 
		?nome=Vitor&email=teste%40email.com&enviar=Enviar
	-->
	<form method="get">
		<input type="text" name="nome">
		<input type="text" name="email">
		<input type="submit" name="enviar">
	</form>


</body>
</html>