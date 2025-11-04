<?php require_once 'admin/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABC Cursos</title>
	<style type="text/css">
		.flex{
			display: flex;
		}
		.curso{
			border: solid 1px #999;
			margin: 20px;
		}
	</style>
</head>
<body>
	<h1>Bem vindo ao nosso site</h1>
	<h2>Veja os cursos em Destaque</h2>
	<div class="flex">
		<?php 
			$cursos = buscarDados($connect, "cursos");
			foreach ($cursos as $curso) {
		?>
		<div class="curso">
			<h2><?php echo $curso['nome']; ?></h2>
			<p><?php echo $curso['preco']; ?></p>
			<div>
				<?php echo $curso['descricao']; ?>
			</div>
		</div>
	<?php } ?>
	</div>
</body>
</html>