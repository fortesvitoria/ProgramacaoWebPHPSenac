<?php
//Conexão com Banco de dados
$servidor = "localhost";
$usuarioBd = "root";
$senhaBd = "";
$bancoDados = "cdz";
$connect = mysqli_connect($servidor, $usuarioBd, $senhaBd, $bancoDados);

function insertUser($connect){
	if ( isset($_POST['cadastrar']) ) {
		$nome = mysqli_real_escape_string($connect, $_POST['nome']);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$senha = sha1( $_POST['senha'] );
		
		if ( !empty($nome) and !empty($email) and !empty($senha) ) {
			//Insert no BD
			$sql = "INSERT INTO users (nome, email, senha, data) VALUES ( '$nome', '$email', '$senha', NOW() )";
			$execute = mysqli_query($connect, $sql);
			if ($execute) {
				echo "Usuário inserido com sucesso!";
			}else{
				echo "Erro ao inserir usuário";
			}
		}else{
			echo "Preencha todos os campos corretamente";
		}
	}
}

function select( $connect, $tabela, $where = 1 ){
	$sql = "SELECT * FROM $tabela WHERE $where";
	$execute = mysqli_query($connect, $sql);
	
	//Busca apenas um dado da tabela
	//$result = mysqli_fetch_assoc($execute);
	//MYSQLI_BOTH - MYSQLI_NUM - MYSQLI_ASSOC
	$result = mysqli_fetch_all($execute, MYSQLI_ASSOC);
	return $result;
}