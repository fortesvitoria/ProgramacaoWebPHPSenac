<?php
function uploadImages(){
    if (isset($_POST['enviar'])) {
        if (!empty($_FILES['arquivo']['name'])) {
            $nomeArquivo = $_FILES['arquivo']['name'];
            $tipo = $_FILES['arquivo']['type'];
            $tamanho = $_FILES['arquivo']['size'];
            $temp_name = $_FILES['arquivo']['tmp_name'];
            $erros = array();

            //limite de tamanho - até 5mb
            $tamanhoMaximo = 1024 * 1024 * 5;
            if ($tamanho > $tamanhoMaximo) {
                $erros[] = "Seu arquivo excede o tamanho máixmo.";
            }

            //extensoes permitidas
            $arquivosPermitidos = ["png", "jpg", "jpeg"];
            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
            //se nao encontrar a extensao nos arquivos permitidos, falso
            if (!in_array($extensao, $arquivosPermitidos)) {
                $erros[] = "Arquivo não permitido.";
            }
            #mime type
            $tiposPermitidos = ["image/png", "image/jpg", "image/jpeg"];
            if (!in_array($tipo, $tiposPermitidos)) {
                $erros[] = "Tipo de arquivo não permitido.";
            }
            if (!empty($erros)) {
                foreach ($erros as $erro) {
                    echo $erro . "<br>";
                }
            } else {
                $caminho = "uploads/";
                $novoNome = uniqid() . "." . $extensao;
                $destino = $caminho . $novoNome;

                if (move_uploaded_file($temp_name, $destino)) {
                    echo "<p>Upload feito com sucesso!</p>";
				}else{
					echo "<p>Erro ao enviar o arquivo.</p>";
                }
            }
        }
    }
}
