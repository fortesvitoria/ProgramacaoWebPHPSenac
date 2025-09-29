<!-- 4 - Atividade | Busca com Formulário
Crie um arquivo: formulario.php
Formulário HTML para o usuário digitar uma busca
Crie um arquivo chamado resultado.php
Crie um vínculo entre os arquivos
Lógica para mostrar se foi encontrado o valor procurado em formulario.php
Crie um array com os seguintes valores: [ PHP, HTML, CSS, JavaScript, Jquery, Python, SQL, Bootstrap, Java, C++, Fluter ]
Se o usuário encontrar um valor acima, mostre a seguinte mensagem "Temos o curso para a sua busca $valorda busca"
Se não encontrar mostre uma mensagem avisando o usuário -->
<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos TI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <main>
        <h1>Cursos TI</h1>
        <div class="resultado">
            <?php
                if (isset($_SESSION['cursoSelecionado']) && isset($_SESSION['valorCurso'])) {
                    $curso = $_SESSION['cursoSelecionado'];
                    $valor = $_SESSION['valorCurso'];
                    echo "<p>Curso selecionado: <span class='destaque'> $curso </span></p>";
                    echo "<p>Valor do curso:<span class='destaque'> R$ $valor,00</span></p>";
                } else {
                    echo "<p>Nenhum curso foi selecionado.</p>";
                }
            ?>
        </div>

    </main>
    <footer><p>© 2025 Vitória Fortes</p></footer>
</body>
</html>