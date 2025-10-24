<?php

echo "<h2>IF/ELSE</h2>";

// E - and &&
// Ou - or ||

$idade = 16;

if ($idade >= 18){
    echo "Cadastro permitido";
} else {
    echo "Cadastro somente para maiores de 18 anos";
}

echo "<br><hr>";

$notaFinal = 8;
if($notaFinal >= 7) {
    echo "O aluno está aprovado com nota final $notaFinal.";
} elseif ($notaFinal >= 5) {
    echo "Reprovado com nota final $notaFinal!";
} else{
    echo "O aluno está em recuperação com a nota final de $notafinal";
}

echo "<br><hr>";

$usario = "Vito";
$senha = "123";

if ($usario == "Vito" and $senha == "123"){
    echo "Acesso liberado!";
} else {
    echo "Usuário ou senha inválidos";
}

echo "<br><hr>";
echo "<h2>SWITCH</h2>";
//switch - utilizado quando há mtas opcoes de valores e a resposta final é simples, como um echo

$diaSemana = "sexta-feira";
//verifica os possiveis valores da variavel
switch ($diaSemana) {
    case 'domingo': //caso contenha o valor domingo
        $resultado = "Dia de churrasco!"; #codigo
        break;#finaliza programa
    case 'segunda-feira':
        $resultado = "Dia de trabalho.";
        break;
    case 'sexta-feira':
        $resultado = "Dia de PHP.";
        break;
    default:
        $resultado = "Não encontramos o valor digitado.";
        break;
}

echo $resultado;

echo "<br><hr>";

echo "<h2>OPERADOR TERNARIO</h2>";
//teste logicoVerificação ? "Valor se verdade" : "valor se falso"

$nota = 5;
$resposta = $nota >= 7 ? "Verdade" : "Falso";
echo $resposta;



?>