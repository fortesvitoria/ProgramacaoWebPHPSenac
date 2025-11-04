<?php 
	session_start();
	require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerenciador de Cursos</title>
</head>
<body>
<?php if (isset($_SESSION['ativa'])) { ?>	
	<h1>Lista de Cursos Cadastrados</h1>
	<nav>
		<a href="admin.php"> Início </a>
		<a href="cursos.php"> Cursos </a>
	</nav>
	<?php insertCurso($connect); ?>
	<form method="post">
		<label>Nome do Curso</label>
		<input type="text" name="nome" required>
		<label>Preço</label>
		<input type="text" name="preco" required>
		<label>Descrição</label>
		<textarea name="descricao"></textarea>
		<button name="inserir">Inserir Novo Curso</button>
	</form>
	<?php 
		$cursos = buscarDados($connect, "cursos");
		foreach ($cursos as $curso) { 
	?>
		<div>
			<h2><?php echo $curso['nome']; ?></h2>
			<p><?php echo $curso['preco']; ?></p>
			<hr>
		</div>	
	<?php } ?>

<?php 
	} else {
		header("location: index.php");
	}
?>
</body>
</html>