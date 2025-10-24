<?php 
$server = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "cdz";
$connect = mysqli_connect( $server, $userDb, $passDb, $nameDb );

function login($connect){
	if (isset($_POST['logar'])) {
		if (!empty($_POST['email']) and !empty($_POST['senha'])) {
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			$senha = sha1($_POST['senha']);
			
			echo $sql = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";			
			$execute = mysqli_query($connect, $sql);
			$result = mysqli_fetch_assoc($execute);							
			if ( !empty($result['email']) ) {
				//Continuamos o processo de Login
				session_start();
				$_SESSION['nome'] = $result['nome'];
				$_SESSION['email'] = $result['email'];
				$_SESSION['ativa'] = true;
				header("location: admin.php");
			}else{
				echo "<p>E-mail ou senha Inválidos</p>";
			}
		}else{
			echo "<p>Não são permitidos dados Nulos!</p>";
		}
	}
}