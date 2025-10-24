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
	
	<h1>Bem vindo, <?php $_SESSION['nome']; ?></h1>
	<h2>Essa é a área para gerenciar seu site.</h2>
	<a href="sair.php"> Sair </a>
<?php 
	} else {
		echo "<h2> Acesso Bloqueado </h2>";
	} 
?>
</body>
</html>