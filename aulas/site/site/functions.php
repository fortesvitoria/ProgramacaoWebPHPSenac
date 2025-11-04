<?php
//Criando Funções com PHP

function welcome(){
	echo "Bem vindo!";
}
welcome();
echo "<hr>";
function bemVindo($usuario){
	$mensagem = "<h2>Bem vindo, $usuario.</h2>";
	return $mensagem;
}
echo bemVindo("Fernando");
$usuario = "Carlos";
echo bemVindo($usuario);
$nome = "Carlos";
echo bemVindo($nome);

function mediaFinal($nota1, $nota2, $nota3, $aluno = ""){
	$media = ($nota1 + $nota2 + $nota3) / 3;
	$media = round($media, 2);
	if ($media >= 7) {
		$resultado = "O aluno $aluno está APROVADO com média $media";
	} elseif($media <= 5){
		$resultado = "O aluno $aluno está REPROVADO com média $media";
	}else{
		$resultado = "O aluno $aluno está em RECUPERAÇÃO com média $media";
	}
	return $resultado;
}
echo mediaFinal(8, 7, 4 );
echo "<hr>";
echo mediaFinal(10, 9, 7, "Ana");

function lista($lista){
	if ( is_array($lista) ) {
		//ordena a lista em ordem crescente
		asort($lista);
		$resultado = "<ul>";
		foreach ($lista as $item) {
			$resultado .= "<li>$item</li>";
		}
		$resultado .= "</ul>";		
	} else {
		$resultado = "Insirá uma lista Válida.";
	}
	return $resultado;
}

$frutas = ["Maçã", "Banana", "Laranja", "Uva"];
echo lista($frutas);