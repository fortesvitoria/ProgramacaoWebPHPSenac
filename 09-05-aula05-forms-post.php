<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <form action="" method="post">
        <h2>Formulario:</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">Email</label>
        <input type="text" name="email">

        <label for="idade">Sua idade:</label>
        <input type="number" name="idade">

        <button name="enviar">Cadastrar</button>
    </form>
    <?php
        if (isset($_POST['enviar'])) {

            $erros = [];

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            #strlen para contar quantidade de letras numa frase
            if (strlen($_POST['nome']) <= 4) {
                $erros[] = "Preencha com o nome completo.";
            }

            #verifica se o formato de email é valido
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); 
            if (empty($email)) {
                $erros[] = "Preencha seu e-mail corretamente.";
                
            }

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); 

            if ($_POST['idade'] < 18) {
                $erros[] = "Cadastro somente para maiores de idade.";
            }

            #se não está vazio
            if (!empty($erros)) {
                foreach ($erros as $erro) {
                    echo "<p>$erro</p>";
                }
                
            } else {
                #contuniaremos com envio do formulario
                echo "<br>" . "Nome: " . $nome . "<br>";
                echo "Email:  " . $email . "<br>";
                echo "Idade:  " . $idade . "<br>";
            }

        }
    ?>
</body>
</html>