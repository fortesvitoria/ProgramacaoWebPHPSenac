<?php

//Exercício (foreach)
//Utilizando um array contendo 5 arrays com os seguintes dados [nome, curso, nota], faça um looping onde mostre os dados da seguinte forma:

// O aluno NOME do curso NOME_CURSO tirou nota NOTA.
// O aluno NOME do curso NOME_CURSO tirou nota NOTA.
// O aluno NOME do curso NOME_CURSO tirou nota NOTA.
// O aluno NOME do curso NOME_CURSO tirou nota NOTA.
// O aluno NOME do curso NOME_CURSO tirou nota NOTA.

//1.cria array contendo 5 arrays:
$alunos = array(
    [
        "nome" => "Maria",
        "curso" => "ADS",
        "nota" => 9
    ],
    [
        "nome" => "Eduardo",
        "curso" => "Redes",
        "nota" => 8
    ],
    [
        "nome" => "Michelle",
        "curso" => "ADS",
        "nota" => 7
    ],
    [
        "nome" => "Lucas",
        "curso" => "Redes",
        "nota" => 6
    ],
    [
        "nome" => "Ana",
        "curso" => "UX",
        "nota" => 10
    ],
);

//looping com foreach:
    foreach ($alunos as $aluno) {
        echo "O aluno ". $aluno['nome'] . " do curso ". $aluno['curso']. " tirou a nota " . $aluno['nota'] . ".<br>";
    };


?>