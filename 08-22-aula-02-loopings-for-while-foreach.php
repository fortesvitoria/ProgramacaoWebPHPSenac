<?php

// Comando de repetição - loopings

//     -indice: onde começa o laço de repetição;
//     -teste logico: condição que a repetição continue;
//     - incremento/decremento: o que ocorre com o indice a cada passagem do looping.

//     i igual a 1, enquanto i menor que 10, incrementa o i 

// COMANDO FOR - normalmente utilizado para elementos determinados - quando se ha um limite de repetições

echo "<h3>COMANDO FOR - normalmente utilizado para elementos determinados - quando se ha um limite de repetições</h3>  </br>";
    for ($i = 1; $i < 3; $i++) {
        echo "Ex 01 - $i - </br> ";
    }

    echo "<hr>";

    for ($i = 1; $i <= 20; $i += 5) {
        echo "Ex 02 - $i - </br> ";
    }

    echo "<hr>";

    for ($i = 10; $i >= 1; $i-=2) {
        echo "Ex 03 - $i - </br> ";
    }

    echo "<hr>";

    $compras = ["Arroz", "Pizza", "Carne", "Tapioca", "Feijao",];
    echo "Pegando item na lista: " . $compras[2] . "<br>";

    echo "<hr>";

    // Funcao count
    $contar = count($compras);

    for ($i = 0; $i < $contar; $i++) {
        echo $compras[$i] . " - ";
    }

    echo "<hr>";
    echo "<br>";

    // COMANDO WHILE - normalmente utilizado para elementos indeterminados
    echo "<h3>COMANDO WHILE - normalmente utilizado para elementos indeterminados</h3>  </br>";
    $indice = 1;

    while ($indice <= 10) {
        echo "$indice - ";
        $indice++;
    }

    echo "<hr>";

    $i = 0;
    echo "<ul>";
    while ($i < $contar ) {
        echo "<li>" . $compras[$i] . "</li>";
        $i++;
    }

    echo "</ul>";
    echo "<hr>";

    // COMANDO FOREACH - ideal para trabalhar com ARRAYS
    echo "<h3>COMANDO FOREACH - ideal para trabalhar com ARRAYS</h3> </br>";
    // variavel $item reprenta cada valor individual do looping naquele momento
    
    foreach ($compras as $item) {
        echo "$item  - ";
    }

    echo "</ul>";
    echo "<hr>";

    $produtos = array(
        [
            "nome" => "Teclado",
            "marca" => "Lenovo",
            "preço" => 49.90
        ],
        [
            "nome" => "Monitor",
            "marca" => "Dell",
            "preço" => 799.90
        ],
        [
            "nome" => "Mouse",
            "marca" => "Lenovo",
            "preço" => 39.00
        ],
    );

    echo $produtos[1]["nome"];

    echo "</ul>";
    echo "<hr>";

    foreach ($produtos as $produto) {
        echo "O produto ". $produto['nome'] . " da marca ". $produto['marca'] . " custa: " . $produto['preço'] . "<br>";
    };

    echo "</ul>";
    echo "<hr>";

    ?>