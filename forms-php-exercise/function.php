<?php
session_start();
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

if (isset($_POST['enviar']) && !empty($_POST['curso'])) {
    $cursoDigitado = trim($_POST['curso']);
    $erro = "Curso \"{$cursoDigitado}\" não encontrado.";

    foreach ($listaCursos as $curso) {
        //strcasecmp compara se as strings são iguais, se sim, retorna 0, se for maior, retorna maior que zero, se menor, retorna menor que zero, utilizada para tratar upper and lowercase
        if (strcasecmp($cursoDigitado, $curso['curso']) == 0) {
            $_SESSION['cursoSelecionado'] = $curso['curso'];
            $_SESSION['valorCurso'] = $curso['valor'];
            // Redirecionar
            header("Location: resultado.php");
        } 
    }
     $_SESSION['erro'] = $erro;
            header("Location: resultado.php");
}
?>