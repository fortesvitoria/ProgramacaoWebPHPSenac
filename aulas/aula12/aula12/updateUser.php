<?php 
	session_start();
	require_once "functions.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Usuário</title>
</head>
<body>
<?php if(isset($_SESSION['ativa'])) { ?>

	<?php
		$user = selectId($connect, "users", $_GET['id']);
	 ?>
	<form method="post">
		<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
		
		<input type="text" name="nome" placeholder="Seu Nome" value="<?php echo $user['nome']; ?>" required>
		<input type="email" name="email" placeholder="Seu E-mail" value="<?php echo $user['email']; ?>" required>		
		<input type="password" name="senha" placeholder="Nova Senha">
		
		<input type="date" name="data" value="<?php echo $user['data']; ?>">
		<button name="atualizar"> Salvar Dados </button>
	</form>

	<?php 
		if (isset($_POST['atualizar']) and !empty($_POST['id'])) {
			updateUser($connect, $_POST['id']);
		}
	?>

<?php } ?>
</body>
</html>