<?php

echo "<h2>Funções para arrays</h2>";

//cria array
$lanches = ["Xis de Calabrsa", "Pastel", "Pizza", "Lasanha", "Hamburger"];

print_r($lanches);

echo "<br><hr>";

//função array_pop() - extrai ultimo valor do array, dimiuindo o array em um elemento e guardando o valor dentro de uma variavel
echo "<h3>array_pop()</h3>";

$ultimo = array_pop($lanches);
print_r($lanches);
echo "<h4>$ultimo</h4>";

echo "<br><hr>";

//função array_shift() - extrai primeiro valor do array, dimiuindo o array em um elemento e guardando o valor dentro de uma variavel
echo "<h3>array_shift()</h3>";

$primeiro = array_shift($lanches);
print_r($lanches);
echo "<h4>$primeiro</h4>";

echo "<br><hr>";

//função array_sum() - soma os valores
echo "<h3>array_sum()</h3>";

$total = [10, 18, 35, 25, 40];

echo array_sum($total);

echo "<br><hr>";

//função in_array() - 2 parametros: 1.o que, e 2.onde vou procurar - verifica se um valor existe no array 'in' array.
echo "<h3>in_array()</h3>";

$produtos = ["mouse","teclado","monitor","cadeira"];
$buscar = "mouse";

if (in_array($buscar,$produtos)) {
    echo "$buscar encontrado.";
} else {
    echo "O produto $buscar não foi encontrado.";
};

echo "<br><hr>";

//função implode() - transforma um array em uma string - 2 parametros: glue: separador , pieces: array que quero transformar
echo "<h3>implode()</h3>";

echo implode(", ", $produtos);

echo "<br><hr>";

//função explode() - transforma uma string em um array - 2 parametros: 1. separador - o que vai definir o limite de cada item, 2. frase a ser separada
echo "<h3>explode()</h3>";

$frase = "Hoje no café da manhã comi: tapioca, bolo, salame, cafe";
$string_para_array = explode(",", $frase);
$cafe = explode(",", $string_para_array[3]);
print_r($cafe);


echo "<br><hr>";



?>