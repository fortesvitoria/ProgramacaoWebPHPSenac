<?php 
	session_start();
	require_once "functions.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deletar Usuário</title>
</head>
<body>
<?php if(isset($_SESSION['ativa'])) { ?>

	<?php if (isset($_GET['id']) and !empty($_GET['id'])) { ?>
		<h1>
			Você tem certeza que quer deletar o usuário <?php echo $_GET['nome']; ?>?
		</h1>
		<form method="post">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<button name="deletar"> Deletar Usuário </button>
		</form>

		<?php 
			if (isset($_POST['deletar']) and !empty($_POST['id'])) {
				if ($_POST['id'] == $_SESSION['id']) {
					echo "Você não pode deletar seu próprio usuário!";
				}else{
					delete($connect, "users", $_POST['id']);
				}				
			}
		?>

	<?php } ?>

<?php } ?>
</body>
</html>