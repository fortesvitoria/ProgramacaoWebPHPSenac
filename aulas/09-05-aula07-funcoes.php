<?php

// criando funções
function welcome () {
    echo "Bem vindo!";
}

welcome();

echo "<hr>";

function bemVindo($usuario) {
    $mensagem = "<h3>Bem vindo(a), $usuario!</h3>";
    return $mensagem;
}

echo bemVindo("Vito");

$usuario = "Eduardo";
echo bemVindo($usuario);

$nome = "Jo";
echo bemVindo($nome);

//valor padrao de aluno é string vazia, para o parametro ser opcional
function mediaFinal($nota1,$nota2,$nota3, $aluno = "") {
    // $media = ($nota1 + $nota2 + $nota3) / 3;
    // $media = round($media,2) |--juntando ambos abaixo:
    $media = round(($nota1 + $nota2 + $nota3) / 3, 2);

    if ($media >= 7) {
        $resultado = "O aluno $aluno está aprovado com média $media";
    } elseif ($media <= 5) {
        $resultado = "O aluno $aluno está reprovado com média $media";
    } else {
        $resultado = "O aluno $aluno está em recuperação com média $media";
    }
    return $resultado;
}

echo mediaFinal(9,5,9);
echo "<hr>";
echo mediaFinal(3,5,9, "Ana");
echo "<hr>";

function lista($lista) {
    //tranforma valor do array em uma lista html
    if (is_array($lista)) {
        //ordena a lista em ordem crescente
        asort($lista);
        $resultado = "<ul>";
        foreach ($lista as $item) {
            //.= agragdando valor à variável, agrega, concatena, nao substitui
            $resultado .= "<li>$item</li>";
        }

        $resultado .= "</ul>";

    } else {
        $resultado = "Insira uma lista válida";
    }

    return $resultado;
}

$frutas = ["Maça", "Acerola", "Limão"];
echo lista($frutas);