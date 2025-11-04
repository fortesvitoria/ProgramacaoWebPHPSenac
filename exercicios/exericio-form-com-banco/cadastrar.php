<?php

# Configuração do banco
$server = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "cadastro_usuario";

# Conexão do banco
$connect = mysqli_connect($server, $userDb, $passDb, $nameDb);

# Verifica conexão
if (!$connect) {
    $_SESSION['mensagem'] = "Falha grave na conexão com o banco de dados: " . mysqli_connect_error();
    header("Location: cadastro_sucesso.php");
    exit();
}

# Inserir dados
function insertData($connect){
	if (isset($_POST['enviar'])) {
		$nome =  $_POST['nome'];
        $sobrenome =  $_POST['sobrenome'];
        $email =  $_POST['email'];
        $telefone =  $_POST['telefone'];
        $senha =  $_POST['senha'];
        $repitaSenha =  $_POST['repitaSenha'];
        $logradouro =  $_POST['logradouro'];
        $numero =  $_POST['numero'];
        $complemento =  $_POST['complemento'];
        $bairro =  $_POST['bairro'];
        $cidade =  $_POST['cidade'];
        $cep =  $_POST['cep'];
        $estado =  $_POST['estado'];

        # Verifica se a senhas são igual, se forem cria uma query para inserir dados no banco, passando as váriaveis coletadas no formulario
		if ($senha == $repitaSenha) {
			$sql = "INSERT INTO clientes ( nome, sobrenome, email, telefone, senha, logradouro, numero, complemento, bairro, cidade, cep, estado ) VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$senha', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep', '$estado' )";
            
            # executanto query
			$execute = mysqli_query($connect, $sql);
			if($execute){
				$mensagem = "Dados cadastrados com Sucesso!";
			}else{
				$mensagem = "Erro ao cadastrar";
			}
		}else{
			$mensagem = "As senhas estão diferentes";
		}

        // Salva a mensagem na sessão
        $_SESSION['mensagem'] = $mensagem;

        // Redireciona para a pagina cadastro_sucesso.php
        header("Location: cadastro_sucesso.php");
        exit();
	}
}