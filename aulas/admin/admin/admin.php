<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel administrativo do site</title>
</head>
<body>
<?php if (isset($_SESSION['ativa'])) { ?>
	
	<h1>Painel administrativo do site</h1>
	<h2>Bem vindo, <?php echo $_SESSION['usuario']; ?></h2>
	<a href="deslogar.php"> Sair </a>

<?php } else {
	echo "Você não tem acesso a está página";
} ?>
</body>
</html>