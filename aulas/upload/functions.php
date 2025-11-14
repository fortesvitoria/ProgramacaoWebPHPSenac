<?php

function uploadImages(){
	if (isset($_POST['enviar'])) {
		//print_r($_FILES);
		if (!empty($_FILES['arquivo']['name'])) {
			$nomeArquivo = $_FILES['arquivo']['name'];
			$nomeTemporario = $_FILES['arquivo']['tmp_name'];
			$tipo = $_FILES['arquivo']['type'];
			$tamanho = $_FILES['arquivo']['size'];
			$erros = array();

			$tamanhoMaximo = 1024 * 1024 * 5; //5mb
			if ($tamanho > $tamanhoMaximo) {
				$erros[] = "Seu arquivo é muito grande. Envie o tamanho máximo de 5 Mb";
			}

			$arquivosPermitidos = ["png", "jpg", "jpeg", "pdf", "webp"];
			$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
			if (!in_array($extensao, $arquivosPermitidos)) {
				$erros[] = "Extensão arquivo não permitido! Só permitimos arquivos de imagens ou PDF.";
			}

			$typesPermitidos = ["image/png", "image/jpg", "image/jpeg", "image/webp", "application/pdf"];
			if (!in_array($tipo, $typesPermitidos)) {
				$erros[] = "Tipo de arquivo não permitido!";
			}

			if (empty($_POST['nome'])) {
				$erros[] = "Preencha seu nome completo!";
			}

			if (!empty($erros)) {
				foreach ($erros as $erro) {
					echo "<p>$erro</p>";
				}
			}else{
				//uniqid(); // gera um número único
				$caminho = "uploads/";
				$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				//$novoNome = "$nome-$nomeArquivo";
				$hoje = date("d-m-Y_h-i");
				$novoNome = "$hoje-$nomeArquivo";
				if (move_uploaded_file($nomeTemporario, $caminho.$novoNome)) {
					echo "<p>Upload feito com sucesso!</p>";
				}else{
					echo "<p>Erro ao enviar o arquivo.</p>";
				}
			}			
		}
	}
}