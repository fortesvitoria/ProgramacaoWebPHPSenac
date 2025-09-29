<?php 

//array com cursos - No PHP, um array é um mapa ordenado que relaciona chaves a valores. Como se fosse um dicionario.
$listaCursos = [ 
    ["curso" => "PHP", "valor" => 200],
    ["curso" => "HTML", "valor" => 250],
    ["curso" => "CSS", "valor" => 300],
    ["curso" => "JavaScript", "valor" => 350],
    ["curso" => "Jquery", "valor" => 400],
    ["curso" => "Python", "valor" => 450],
    ["curso" => "SQL", "valor" => 500],
    ["curso" => "Bootstrap", "valor" => 550],
    ["curso" => "Java", "valor" => 600],
    ["curso" => "C++", "valor" => 650],
    ["curso" => "Fluter", "valor" => 700],
];

//condição para verificar ser existe o curso na lista
//se a variárial enviar foi acionada e a variavel curso não estiver vazia, 
//coloca o curso dentro de uma váriavel, usando o trim para retirar espaços extras no incio e final da frase.
if (isset($_POST['enviar']) && !empty($_POST['curso'])) {
    $cursoDigitado = trim($_POST['curso']);
    
    // Loop para percorrer cada item dentro do array $listaCursos.
    foreach ($listaCursos as $curso){
        // Compara a string digitada pelo usuário ($cursoDigitado) com o nome do curso atual no loop ($curso['curso']).
        // strcasecmp() para NÃO DIFERENCIAR maiúsculas de minúsculas.
        // Se as strings forem idênticas (ignorando o case), a função retorna 0. Se for menor, vai entregar um valor menor que zero, se for maior, entrega um valor major que zero
    
        if (strcasecmp($cursoDigitado, $curso['curso']) == 0) {
            // Iniciar sessão
                session_start();
                $_SESSION['cursoSelecionado'] = $curso['curso'];
                $_SESSION['valorCurso'] = $curso['valor'];

                // Redirecionar
                header("Location: resultado.php");
        }

    }
        
}