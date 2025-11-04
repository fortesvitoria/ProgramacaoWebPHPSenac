<!-- Crie um Banco de Dados com a tabela CLIENTES.

Crie uma função para inserir os dados no banco, via formulário PHP.

Com os seguintes dados:
Nome, Sobrenome, e-mail, senha, repetia a senha, Telefone, endereço, Número, bairro, cidade, UF.-->
<?php 
	session_start();
	require_once 'cadastrar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    </header>
    <main>
        <?php insertData($connect); ?>
        <form class="card_principal" method="post">
            <h1>Cadastro</h1>

            <div class="container-data">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="container-data">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome" required>
            </div>

            <div class="container-data">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="container-data">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
            </div>

            <div class="container-group">

                <div class="container-data">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="container-data">
                    <label for="repitaSenha">Repita sua senha</label>
                    <input type="password" name="repitaSenha" id="repitaSenha" placeholder="Digite sua senha novamente" required>
                </div>
            </div>

            <div class="container-group">
                <div class="container-data">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" name="logradouro" id="logradouro" placeholder="Digite seu logradouro" required>
                </div>

                <div class="container-data">
                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero" placeholder="Digite o numero do endereço" required>
                </div>
            </div>

            <div class="container-group">

                <div class="container-data">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" placeholder="Digite seu complemento" required>
                </div>

                <div class="container-data">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro" required>
                </div>
            </div>

            <div class="container-group">
                <div class="container-data">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" placeholder="Digite seu cidade" required>
                </div>

                <div class="container-data">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" required>
                </div>
            </div>

            <div class="input-50">
                <div class="container-data">
                    <select name="estado" id="estado" required>
                        <option value="ac">AC</option>
                        <option value="al">AL</option>
                        <option value="ap">AP</option>
                        <option value="am">AM</option>
                        <option value="ba">BA</option>
                        <option value="ce">CE</option>
                        <option value="df">DF</option>
                        <option value="es">ES</option>
                        <option value="go">GO</option>
                        <option value="ma">MA</option>
                        <option value="mt">MT</option>
                        <option value="ms">MS</option>
                        <option value="mg">MG</option>
                        <option value="pa">PA</option>
                        <option value="pb">PB</option>
                        <option value="pr">PR</option>
                        <option value="pe">PE</option>
                        <option value="pi">PI</option>
                        <option value="rj">RJ</option>
                        <option value="rn">RN</option>
                        <option value="rs">RS</option>
                        <option value="ro">RO</option>
                        <option value="rr">RR</option>
                        <option value="sc">SC</option>
                        <option value="sp">SP</option>
                        <option value="se">SE</option>
                        <option value="to">TO</option>
                    </select>

                </div>
            </div>

            </div>
            <button class="btn" name="enviar">Enviar</button>

        </form>
    </main>

    <footer>
        <p>© 2025 Vitória Fortes</p><a href=""><img src="github.png" alt="icone github com link do projeto"></a>
    </footer>
</body>

</html>