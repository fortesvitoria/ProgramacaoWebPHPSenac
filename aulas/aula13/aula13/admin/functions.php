<?php 
$server = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "cdz";
$connect = mysqli_connect( $server, $userDb, $passDb, $nameDb );

//Inserir Cursos
function insertCurso($connect){
	if (isset($_POST['inserir'])) {
		$nome = mysqli_real_escape_string($connect, $_POST['nome']);
		$preco = mysqli_real_escape_string($connect, $_POST['preco']);
		$descricao = mysqli_real_escape_string($connect, $_POST['descricao']);
		if (!empty($nome) and !empty($preco)) {
			$sql = "INSERT INTO cursos ( nome, preco, descricao ) VALUES ('$nome', '$preco', '$descricao')";
			$execute = mysqli_query($connect, $sql);
			if($execute){
				echo "Curso Inserido com Sucesso!";
			}else{
				echo "Erro ao inserir";
			}
		}else{
			echo "Preencha corretamente o nome do curso e o preço";
		}
	}
}

//Update nos usuários
function updateUser($connect, $id){
	if ( !empty($id) and is_numeric($id)) {
		$nome = mysqli_real_escape_string($connect, $_POST['nome']);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$data = mysqli_real_escape_string($connect, $_POST['data']);
		$erros = array();
		$senha = !empty($_POST['senha']) ? sha1($_POST['senha']) : "";

		$sql = "SELECT email FROM users WHERE email = '$email' AND id <> $id";
		$executeEmail = mysqli_query($connect, $sql);
		$verificaEmail = mysqli_fetch_assoc($executeEmail);

		if(!empty($verificaEmail['email'])){
			$erros[] = "E-mail já cadastrado no sistema!";
		}
		if (empty($nome)) {
			$erros[] = "Preencha seu nome completo";
		}
		if (empty($email)) {
			$erros[] = "Preencha seu E-mail corretamente";
		}
		if (empty($data)) {
			$erros[] = "Preencha a data corretamente";
		}
		if (!empty($erros)) {
			foreach ($erros as $erro) {
				echo "<p>$erro</p>";
			}
		}else{
			
			$sql = "UPDATE users SET nome = '$nome', email = '$email', data = '$data' ";
			if(!empty($senha)){
				$sql .= " , senha = '$senha' ";
			}
			
			$sql .= " WHERE id = $id";

			$execute = mysqli_query($connect, $sql);
			if ($execute) {
				header("location: admin.php");
			}else{
				echo "Erro ao salvar dados";
			}
		}
	}
}


//Deletar qualquer dado
function delete($connect, $tabela, $where){
	$where = is_numeric($where) ? $where : 0;	
	echo $sql = "DELETE FROM $tabela WHERE id = $where";
	$execute = mysqli_query($connect, $sql);
	if ($execute) {
		header("location: admin.php");
	}else{
		echo "Erro ao deletar!";
	}
}
function selectId($connect, $tabela, $id = 0){
	$sql = "SELECT * FROM $tabela WHERE id = $id";
	$execute = mysqli_query($connect, $sql);
	$resultado = mysqli_fetch_assoc($execute);
	return $resultado;
}

//Buscar dados do Banco
function buscarDados($connect, $tabela, $where = 1, $order = "id"){
	$sql = "SELECT * FROM $tabela WHERE $where ORDER BY $order";
	$execute = mysqli_query($connect, $sql);
	$resultado = mysqli_fetch_all($execute, MYSQLI_ASSOC);
	return $resultado;
}


// Função para Logar no sistema
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
				$_SESSION['id'] = $result['id'];
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