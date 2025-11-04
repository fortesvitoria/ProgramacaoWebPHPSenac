<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    </header>
    <main>
        <div class="card_principal sucesso">
            <h1>Resultado do Cadastro</h1>
            <?php
            # Verifica se existe uma mensagem na sessão
            if (isset($_SESSION['mensagem'])) {

                # Exibe a mensagem
                echo "<div>";
                echo $_SESSION['mensagem'];
                echo "</div>";

                # Limpa as variáveis da sessão
                unset($_SESSION['mensagem']);
            } else {
                # Mensagem padrão se alguém acessar a página diretamente
                echo "<p>Não existem usuários cadastrados.</p>";
            }
            ?>

            <a href="cadastro.php" class="btn btn-250">Voltar para o Cadastro</a>
        </div>
    </main>

    <footer>
        <p>© 2025 Vitória Fortes</p><a href=""><img src="github.png" alt="icone github com link do projeto"></a>
    </footer>
</body>

</html>