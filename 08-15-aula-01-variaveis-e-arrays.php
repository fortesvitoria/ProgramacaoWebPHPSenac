<?php

// cria variáveis
$pula = "<br><br>";
$aluno = "Vitor";
$idade = 25;
$altura = 1.80;
$matriculado = true;

echo "<h1> Bem vindo, $aluno </h1>";
echo $altura;

// concatenação de strings com '.'
echo $pula;
echo "Minha idade é ". $idade;
echo $pula;
echo "O aluno " . $aluno . " tem " . $altura . " de altura.";
echo $pula;

//numeros - mesmo declarado como string o numero é calculado quando sozinho entre aspas
$x = 10;
$y = 2.5;
$z = "1";
echo $x + $y;
echo $pula;
echo $x + $z;
echo $pula;
echo 3+3+3/3;
echo $pula;
echo (3+3+3)/3;
echo $pula;

//arrays - 
$lanches = array("Xis", "Pizza", "Pastel", "Hamburguer", "Coxinha"); #criando array atraves da função array();
print_r($lanches); #print_r é utilizado para entender a estrutura do array, nao para ser visualizado pelo usuario
echo $pula;
echo $lanches[2];
echo $pula;

//a partir do php5.4 -  mais atual que a com método
$frutas = ['Limão', 'Acerola', 'Morango', 'Maracuja', 4];
print_r($frutas);

//array associativo
$dados = [
    "aluno" => "Cristiano",
    "idade" => 27,
    "cidade" => "Poa",
    "curso" => "ADS"

];
echo $pula;
print_r($dados);
echo $pula;
echo $dados["cidade"];
echo $pula;
echo $dados;
echo $pula;

//array multidimensional
$alunos = array(
    [
        "nome" => "Vitoria",
        "curso" => ["ADS","PNM"],
        "idade" => 34
    ],
    [
        "nome" => "Eduardo",
        "curso" => "Biologia",
        "idade" => 41
    ],
    [
        "nome" => "Michelle",
        "curso" => "Biologia",
        "idade" => 35
    ],

);

print_r($alunos);
echo $pula;
echo $alunos[0]['curso'][1];
echo $pula;
echo $alunos[2]['nome'];
echo $pula;

//acrescenta valores ao array
$dados['semestre'] = 2;
print_r($dados);
echo $pula;


$lanches[] = "Pao de queijo";
print_r($lanches);
echo $pula;

// acrescentando valores a uma variável
$nomeCompleto = "Lucas ";
echo $nomeCompleto;
echo $pula;
$nomeCompleto = "Oliveira "; #Troca o valor da variável
echo $nomeCompleto;
echo $pula;
$nomeCompleto .= "Manskoviski ";
echo $nomeCompleto;
echo $pula;

//constante no php - uma variavel que nao varia
const NOME = "Paola";
echo NOME;


?>